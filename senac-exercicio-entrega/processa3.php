<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultdo do Cadastro</title>
</head>
<body>
<?php

$produt = filter_input(INPUT_POST,"prodt",FILTER_SANITIZE_SPECIAL_CHARS);
$fabricant = $_POST["fabri"];
$preco = $_POST["preco"];
$quant = $_POST["quant"];
$descric = filter_input(INPUT_POST,"descric", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<body>
    <header>
        <h1>Dados de cadastro:</h1>
</header>
    <main>
        <section>
            <fieldset>
                <p> O produto cadastrado é: <?=$produt?></p>

                <p> O fabricante cadastrado é: <?=$fabricant?></p>

                <p> O preço cadastrado é: <?=$preco?></p>

                <p> A quantidade de produto(s) cadastrado(a) é: <?=$quant?></p>

                <p> Mensagem: <?=$descric?></p>
            </fieldset>
        </section>
</main>
</body>
</html>