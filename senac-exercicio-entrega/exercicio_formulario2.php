<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício formulário PHP</title>
</head>


<body>
<header>
<h1>Cadastro de Produtos</h1> 
</header>    
    <section>
            <fieldset>
                <form action="processa2.php" method="POST">

                <p><label for="produto">Produto:</label></p>
                <p><input type="text" name="prodt" id="prodt"></p>
                <p><label for="fabri">Fabricante:</label></p>

                <p><select id="fabri" name="fabri">
                    <?php
                    $fabricantes = ["", "Asus", "Microsofit", "LG", "Brastemp", "Sangsung"];
                    foreach ($fabricantes as $fabricante){ ?>
                    <option> <?=$fabricante?></option>
                    <?php
                    } ?>
                  </select>
                </p>

                <p><label for="preco">Preço:</label></p>
                <p><input type="number" step="0.01" name="preco" id="preco" min="100" max="1000"></p>
                <br>
                <p><label for="quant"> Quantidade:</label></p>
                <p><input type="number" name="quant" id="quant" min="0" max="50"></p>
                <br>
                <p><label for="descric">Descrição:</label></p>
                <p><textarea name="descric" id="descric" cols="25" rows="8"></textarea></p>
                <br>   
                <p><button class="submit" type="submit" name="cadastrar">Cadastrar</button></p>
            </fieldset>
        </section>

        
        
        
        
        
    </form>
</main>


</body>
</html>