<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - PHP</title>
</head>
<body>

 <!-- 
*# Exercícios de PHP

## Exercício 01
Criar **variáveis** e/ou **constantes** para:

- Data de hoje
- Nome de uma pessoa
- Idade da pessoa
- Cidade em que nasceu

Coloque dados nestas variáveis/constantes e faça com que o script mostre no HTML uma mensagem semelhante ao exemplo abaixo:

`Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em São Paulo`

-->

<?php

$hoje = "26/04/2022";
$nome = "Cecília";
$idade = 42;
$cidade_nasc = "São Paulo";
?>

<p> Hoje é <i><b><?=$hoje?></b></i> . <i><b><?=$nome?></b> </i> tem <i><b><?=$idade?></b></i> anos e nasceu em <i><b><?=$cidade_nasc?></b>. </i></p>
<p> Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em São Paulo. </p>

</body>
</html>