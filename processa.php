<!DOCTYPE html>
<html lang="pt-lp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados do PHP</title>
</head>
<body>
    <h1>Processamento de dados</h1>
    <hr>

    <?php 
    // Capturando os dados enviados a partir do formulario

// echo "<pre>";
// var_dump($_POST);
// echo "<pre>";

// este teste foi essencial para mostrar os arrays
// var_dump importante para testar formulários

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];

/* Se existir o $POST['interesses'],
o que foi selecionado fica na variável. Caso contrário, deixe um array vazio na variável.*/

/*?? Operador de coalescencia nula */

$interesses = $_POST["interesses"] ?? [];
$informativos = $_POST["informativos"];
$mensagem = $_POST["mensagem"];

?>

<h2>Dados:</h2>

<ul>
    <li>nome:<?=$nome?></li>
    <li>email:<?=$email?></li>
    <li>idade:<?=$idade?></li>

    <!--Aqui usamos o operador de navegação (!) para inverter a lógica da função empty.-->

    <!--Se interesses NÂO ESTIVER VAZIO -->
    <?php if(!empty($interesses)){?>


        <!-- então, faça tudo abaixo: -->
        <li>interesses: 

            <ul>
                <?php foreach($interesses as $interesse){ ?>
                    
                    <li> <?=$interesse?> </li>

     <?php } ?>

             </ul>

    </li>
    <?php } ?>
    <li>informativos:<?=$informativos?></li>
    <li>mensagem:<?=$mensagem?></li>
</ul>

</body>
</html>