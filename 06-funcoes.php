<!DOCTYPE html>
<html lang="pt-lp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Fumções em PHP</title>
</head>


<body>
    <h1>Funções PHP</h1>
    <hr>
    <h2>Funções básicas (sem retorno) </h2>

    <?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Tiago B. dos Santos</p>";
        echo date("d/m/y");
        echo "</div>";
    }
    ?>

    <section>
        <p>Projeto do site Back-End</p>
        <?=dadosAutor()?>
        </p>
    </section>


    <h2>
        Funções com retorno de dados
    </h2>


    <?php
    function dadosCurso() {
        return "Programador web - 300 horas";
    }
    ?>

    <p> Informações: <?=dadosCurso()?> </p>
    <p> O SENAC Penha tem o curso </p>
    <?=dadosCurso()?></p>

    <h2>Funções com argumentos ou parâmetros</h2>

    <?php
    function soma($valor1, $valor2){
    return $valor1 + $valor2;

    }
    ?>

    <p> <?=soma(150,200)?></p>
    <p> <?=soma(28,87)?></p>

    <?php
        $primeiro = 1257.45;
        $segundo = 10489; 
    ?>

   <p> <?=soma($primeiro, $segundo)?></p>

   <?php

   $preco = 1578.99;
   $desconto = 75.4789;
   $salarioMinimo = 1212;
   $novoSalario = 2500.47;

   ?>


   <ul>
        <li>Preço: <?=$preco?></li>
        <li>Desconto: <?=$desconto?></li>
        <li>Salário Mínimo: <?=$salarioMinimo?></li>
        <li>Novo Salário: <?=$novoSalario?></li>
   </ul>


   <?php
   function formataNumero(float $valor, int $casasDecimais): string {
      return  "US$".number_format($valor, $casasDecimais = 2,",", ".");
   }
   ?>

   <ul> 
       <li> Preço: <?=formataNumero($preco, 2)?> </p>
       <li> Desconto: <?=formataNumero($desconto, 4)?> </p>
       <li> Salário mínimo: <?=formataNumero($salarioMinimo, 2)?> </p>
       <li> Novo Salário <?=formataNumero($novoSalario, 1)?> </p>
    </ul>

    <h2>Indução de tipos de dados</h2>

    <?php 

    /* Tipos de dados primitivos:
    float -> números decimais
    int -> números inteiros
    string -> textos */

    function calculaMedia(float $nota1 , float $nota2): float{
        return ($nota1 + $nota2) /2;
    }

    ?>
    <p> <?=calculaMedia(10,5)?></p>
    <p> <?=calculaMedia(5.5,7.7)?></p>
    <p> <?=calculaMedia(9.84,3.41)?></p>

</body>
</html>