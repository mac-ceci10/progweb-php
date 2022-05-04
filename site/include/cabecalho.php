<?php 

$pagina = basename($_SERVER['PHP_SELF']);
echo $pagina;

switch ($pagina){
    case 'index.php': $titulo = "Pagina Inicial"; break;
    case 'produtos.php': $titulo = "Produtos"; break;
    case 'servicos.php': $titulo = "Serviços"; break;
    case 'contato.php': $titulo = "Contato"; break;
}
?>

<!DOCTYPE html>
<html lang="pt-lp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?=$title?> Site x, y, z </title>


    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
    <h1>Site x, y, z  - Serviços   </h1>
        <nav>
            <a href="index.php">Home</a> 
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
</header>
<main>