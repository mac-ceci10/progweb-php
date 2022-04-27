<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>

<body>
            <h1> Usando arrays no PHP </h1>
            <hr>
            <h2> Array com índice numérico  </h2>

<?php

//Sitaxe com colchetes
$alunos = ["Maria", "João", "Mônica"];

//Sintaxe usando a função array()
$cursos = array("HTML", "React", "Node.js", "PHP");

?>
<h3> Acessando os dados</h3>
    <ul>
        <li><?=$alunos[0]?></li>
        <li><?=$alunos[1]?></li> 
        <li><?=$alunos[2]?></li>

        <hr>
        
        <li><?=$cursos[0]?></li>   
        <li><?=$cursos[1]?></li> 
        <li><?=$cursos[2]?></li>
        <li><?=$cursos[3]?></li>  
    </ul>

    <hr>

<h2> Array Associativo</h2>
<?php
    $curso = [
        "nome" => "Progrmador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5,
    ];
?>

<p>
    O curso de <?=$curso["nome"]?> tem 
    <?=$curso["carga_horaria"]?> horas
</p>

<h2>
    Funções de debug/depuração
</h2>

<pre>
    <h2>
    Funções voltadas para array no PHP
    </h2>

    <?=print_r($curso)?>

</pre>
<pre>
    <?=var_dump($curso)?>

</pre>

</body>
</html>