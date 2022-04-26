<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 02- variáveis e constantes-->
    <title>Variáveis e constantes</title>
</head>
<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
    
    <?php
    //variáveis 
    $curso = "Programador web";
    $ano = 2022;
    $preco = 2500.42;

    echo "<p>$curso;</p>";
    
    echo "<p>$ano;</p>";
    
    echo "<p>$preco;</p>"; 

    echo "<div>$ano;</div>";

    echo "<p><b><i>$preco;</b></i></p>";
    
    echo '<p>$ano;</p>';
    
    echo '<p>$preco;</p>'; 

    echo "<br>";

    echo "<hr>";

    ?>

    <h2> Saída de dados intercalando HTML e PHP </h2>

    <!--sintaxe abreviada de saída -->

    <p> Você escolheu fazer este curso,
        <?php echo $curso ?>
    </p>

    <p> Você escolheu fazer este curso,
        <?=$curso?>
    </p>

    <p> <i>Você escolheu fazer este curso,
        <?=$curso;?> no ano de <?=$ano?>
    </i></p>

    <!--sintaxe abreviada de saída -->
    <!--aceita qualquer tag -->


    <?php
    //Constantes 
    // Forma 1: dois parâtros, nome da constante e o segundo o valor da constante
    define("MEU_NOME", "Tiago");

    //Forma 2: parecida com o javascript 
    //recomendação em constante 

    const ESCOLA = "Senac Penha";

    //Obs.: precisa concatenar (ponto . )

    echo "<p>" .MEU_NOME. "</p>";
    echo "<p>" .ESCOLA. "</p>";
?>
    <p><?=MEU_NOME?></p>
    <p><?=ESCOLA?></p>
</body>
</html>