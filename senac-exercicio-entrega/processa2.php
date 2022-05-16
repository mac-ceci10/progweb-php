<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio - Formulário para entrega</title>
 
</head>


<body> 
    <header>
        <h1>Cadastro de Produtos</h1>
            <hr>
    </header>
    <section>
    <fieldset>
            
    <?php 

    echo "Produto ",$_POST["prod"] , " cadastrado com SUCESSO!". "<br>",

     "Fabricante ",$_POST["fabri"] , " cadastrado com SUCESSO!". "<br>",

     "Preço R$ ",$_POST["preco"] , " cadastrado com SUCESSO!"."<br>",

     "Quantidade ",$_POST["quant"] , " cadastrado com SUCESSO!"."<br>",
     
    //  "Fabricante " , $_POST["fabrica"]??[], " cadastrado com SUCESSO!". "<br>",

    "A mensagem recebida é: ",$_POST["msn"] . "<br>";

    // $fabr = $_POST["fabrica"] ?? [],
    // "Nome:", $fabr,
    // $pro = $_POST["prod"];
    // $fa = $_POST["fabri"];
    // $pre = $_POST["preco"];
    // $fab = $_POST["fabrica"];

    ?>

    </fieldset>
    </section>
</body>
</html>