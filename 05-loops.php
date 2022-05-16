<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>

<body>
    <h1> Loops PHP</h1>
    <hr>

    <h2> While (enquanto)</h2>

    <?php
    $i= 1;
    while($i <=3) {// ou $i <4
    ?>

    <p> <?=$i?> </p>

    <?php
    $i++; // atualizar a variável de controle 
    }
    ?>  

    <h2> do / while (faça/enquanto)</h2>

<?php
$j = 1;
do {
?>
    <div style="border: solid 1px"></div>
    <h3>Exemplo <?=$j?> </h3> 
    </div>

<?php
$j++;
} while($j<=5);
?>

<h2> for (para) </h2>

<?php
// inicialização; condição; atualização
for ($i=1; $i <=10; $i++){
?>
<p>valor de i é <b><?=$i?></b></p>
<?php
}
?>
<!-- Criar um array e fazer uma interação -->
<h2> exercicio Array o Loop</h2>
<p> Crie um array contendo os nomes dos 12 meses do ano.</p>
<p> Usando um loop, faça o nome dos meses aparecer em uma lista ordenada.</p>

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>
<<<<<<< HEAD
    <ul>
        <li> <b><?=($i+1)?></b> - O mês <b><?=($i+1)?></b> é <b><?=$meses[$i]?>. </b></p> </li>
    </ul>
 <?php
=======

<!-- Estratégia de resposta
lista OL inicia e termina INDEPENDENTEMENTE DO PHP -->

<ol>
    <?php for ($i = 0; $i < count($meses); $i++) {
        ?>
        <li> <?=$meses[$i]?> </li>
    <?php

    }?>
</ol>

<h2> foreach (para cada) </h2>
<p> Loop exclusivo para Arrays</p>

</ol>
<!-- palavra chave "as" : como / para cada mês dentro de meses , $mes EVITA O LOOP INFINITO-->
    <?php foreach($meses as $mes){?>
    <li> <?=$mes?> </li>
    <?php } ?>
</ol>


<h2> Array Associativo (formados por pares de chaves => valor com a função "foreach" do PHP</h2>
<?php
    $curso = [

        // chave(key)  =>  valor (value)
        "nome" => "Progrmador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5,
    ];

    // foreach($curso as $key => $value){
        foreach($curso as $dados => $valor){
?>

<p>
    <?=$dados?> - <?$valor?> </p>
</p>

<?php
>>>>>>> 3ba702ec5985aff59ba1778f3feffd60644e7321
}
?>

</body>
</html>
    
