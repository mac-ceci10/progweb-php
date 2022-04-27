<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>
    <link rel="stylesheet" href="02-exercicio-style.css">

    <style>
        .aprovado {color:blue; font-weight: bold;}
        .reprovado {color:red; font-weight: bold;}
        .recuperação {color:orangered; font-weight: bold;}
    </style>

</head>
<body>
    <h1>Condicionais do PHP </h1>
    <hr>


<h2> Condicional Simples (aquela que só tem o if e não tem o else)</h2>

<?php
$numero = 5;
$outronumero = 1;

if ($numero > $outronumero){
    echo "<p> $numero é maior que $outronumero!</p>";
}
?>

    <h2>Condicional Composta</h2>

    <?php   

    $nota1 = 7;
    $nota2 = 9;
    $media = ($nota1 + $nota2)/2;

    echo "<p> Média: $media </p>";

    if($media >= 7){
        echo"<p>Aprovado</p>";
    } else {
        echo "<p>Reprovado</p>";
    };
?>

<h2>Condicional encadeada</h2>

<?php   

$notaA = 1;
$notaB = 2;
$mediaC = ($notaA + $notaB)/2;

echo "<p> Média: $mediaC </p>";

if($mediaC >= 7){
    echo"<p class='aprovado'> Aprovado</p>";
        //aspas simples - em aprovado 
} elseif (($mediaC >= 6) && ($mediaC < 7 ) ){
    echo "<p class=\"recuperacao\">Recuperação</p>";
} else {
    echo "<p class=\"reprovado\">Reprovado</p>";
    //escape no PHP - \ BARRA INVERTIDA - afinal neste exemplo 
};
?>

<h2> Switch/case</h2>

<?php

$opcao1=1;

switch($opcao1){
    case 1: $assunto = "<p class=\"aprovado\"> Reclamação </p>"; break;
    case 2: $assunto = "Elogios"; break;
    case 3: $assunto = "Informação"; break;
    default: $assunto = "Falar com nossos atendentes"; break;
}

echo "<p> $assunto </p>"
?>

</body>
</html>