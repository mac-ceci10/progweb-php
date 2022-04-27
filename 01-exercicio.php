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

<!--// Exemplo data atual = 30/09/2019
$dataSubtraida1 = strtotime('-3 day');
// Formatando para data brasileira
echo date('d/m/Y', $dataSubtraida1); // 27/09/2019

$dataSubtraida2 = strtotime('-2 month');
// Formatando para data brasileira
echo date('d/m/Y', $dataSubtraida2); // 30/07/2019

$dataSubtraida3 = strtotime('-5 year');
// Formatando para data brasileira
echo date('d/m/Y', $dataSubtraida3); // 30/09/2014 

https://www.fordevs.com.br/php/subtrair-datas
-->


<?php

$hoje = date('d/m/y H:i:s');
$nome = "Cecília";
//$data_nasc = 
//$idade = date("Y") - 1990
$idade = 42;

$cidade_nasc = "São Paulo";

//const DATA_NASC= "05/10/1979";

//$idade = date('d/m/y') - DATA_NASC;

//echo $idade

?>



<p> Hoje é <i><b><?=$hoje?></b></i> . <i><b><?=$nome?></b> </i> tem <i><b><?=$idade?></b></i> anos e nasceu em <i><b><?=$cidade_nasc?></b>. </i></p>
<p> Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em São Paulo. </p>

</body>
</html>