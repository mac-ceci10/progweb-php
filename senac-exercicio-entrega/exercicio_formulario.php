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
            <legend> Informações sobre o produto </legend>
            <form method="POST" action="processa2.php">

            <p><label>Produto:</label>
            <input type="text" name="prod" id="prod" placeholder="Digite o nome do produto"></p>

            <p><label for="fabri">Selecione o fabricante:</label>
            <select id="fabri" name="fabri">
                    <option value="asus">Asus</option>
                    <option value="micro">Microsoft</option>
                    <option value="lg">LG</option>
                    <option value="brast">Brastemp</option>
            </select></p>
                <p> <label>Preço </label> R$:<input id="preco" type="number" min="100" max="1000" step=".01" name="preco" placeholder="Digite o preço" > reais. </p>
                <p> <label>Quantidade: </label>  <input id="quant" type="number" min="0" max="50"  name="quant" placeholder="Digite a quantidade" > </p>

                <p><label for="text">Descreva sua mensagem: </label></p>
                
                <p><textarea id="mensagem" name="msn" rows="5" cols="33" ></textarea></p>
    </fieldset>
    </section>
    <section>
    <fieldset>
            <legend> "Lista de fabricantes com Array" </legend>
                <br>
                <label for="fabrica">Selecione o fabricante:</label>
                 <p><select id="fabrica" nome="fabrica">
                    <?php
                        $fabricantes = [
                            "As" => "Asus",
                            "Mc" => "Microsofit",
                            "lg" => "LG",
                            "Btmp" => "Brastemp",
                            "Sang" => "Sangsung",
                            ];

                            //ciclo para percorrer os elementos de um array

                            foreach($fabricantes as $fabricante => $value) {
                                echo '<option value="'.$fabricante.'">'.$value.'</option>';
                            }
                    ?>   
                </select></p>

                <p><input class="submit" type="submit" name="envia" value="enviar"></p>

            </form>
        </fieldset> 
    </section>
</body>
</html>