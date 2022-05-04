<?php include "recursos.php" ?>

<!DOCTYPE html>
<html lang="pt-lp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos - Include e require</title>
</head>
<body>

    <h2> <?=ESCOLA?></h2>
<p> Estamos no cruso de <?=$curso?> </p>

<ol>
    <?php foreach($tecnologia as $tec){?>
        <li> <?=$tec?> </li>
    <?php } ?>
</ol>

<p>Chapolin Colorado tem 20 anos e é <b> <?=verificaIdade(20)?> </b> de idade. </p>
<p>Chapolin Colorado tem 8 anos e é <b> <?=verificaIdade(8)?> </b> de idade. </p>

<hr>
<article>
<h2> Conteúdo qualquer</h2>

<?php include "textos.php" ?>
<!-- deste jeito é possível delegar tarefas para a confecção do site 
se houver um erro, apenas o intervalo referenciado não será exibido corretamente, este recurso é mais permissivo do que o "require"-->
</article>

<hr>
<h2>Qualquer outra coisa</h2>
<!-- include  - inclua - e require é requisitar quer dizer que é necessário, é essencial. -->


<?php require "textos.php" ?>
<!-- se houver um erro, haverá um alerta, e o conteúdo a partir deste ponto será interrompido -->
</body>
</html>