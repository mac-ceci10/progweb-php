<?php

/*Parte 1: identificar o arquivo aberto
/* $_SERVER['PHP_SELF] -> traz os dados completos do endereço basename($_SERVER['PHP_SELF]) -> extrai apenas o nome, ou seja, extensão */

$pagina = basename($_SERVER['PHP_SELF']);

switch($pagina){
    case 'index.php': $titulo = "Página Inicial"; break;
    case 'produtos.php': $titulo = "Produtos"; break;
    case 'servicos.php': $titulo = "Serviços"; break;
    default: $titulo = "Contato"; break;
}

/*break - interrupção no case, para que assim que encontre a igualdade, ele pare.
/* neste caso, esta formúla busca apenas os arquivos aberto*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--Parte 3: colocar a variável no title-->
    <title> <?=$titulo?> - Site ABC</title>

    <!-- mudar a extensão e precisa ser uma imagem quadrada-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">


</head>
<body>
    <header>
        <h1>Site ABC</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
