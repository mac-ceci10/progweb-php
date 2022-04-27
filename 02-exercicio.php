<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="02-exercicio-style.css">
</head>
<body>
    <!-- 
       Exercício 02 - Arrays
        Crie um arquivo chamado exercicio02-arrays.php.

        Nele, crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome, idade, email e sexo.

        Em seguida, mostre os valores de nome, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).

        Desafio: destaque estes blocos de conteúdo usando CSS. -->

        <h1> Array Associativo - Exercício número 2</h1>

        <?php
            $pessoa1 = [
                "nome" => "Maria",
                "idade" => 30,
                "e-mail" => "mariadasilva01@gmail.com",
                "sexo" => "F",
            ];

            $pessoa1 = [                "nome" => "Maria",
                "idade" => 30,
                "e-mail" => "mariadasilva01@gmail.com",
                "sexo" => "F",
            ];

            $pessoa2 = [
                "nome1" => "João",
                "idade2" => 32,
                "e-mail2" => "joaodasilva01@gmail.com",
                "sexo2" => "M",
            ];

            //Sintaxe usando a função array()
            $pessoa01 = array("Maria", 30, "mariadasilva01@gmail.com", "F");
            $pessoa02 = array("João", 32, "joaodasilva01@gmail.com", "M");

      
        ?>
        <!-- array numérico PHP -->
        <h1> Array Associativo - Numérico</h1>

        <article>
                    <p><?=$pessoa01[0]?> tem <?=$pessoa01[1]?> anos e seu email pessoal é: <?=$pessoa01[2]?>.</p>
                    <p>Já o <?=$pessoa02[0]?> tem <?=$pessoa02[1]?> anos e seu email pessoal é: <?=$pessoa02[2]?>.</p>   
        </article>

        <section>
                    <p><?=$pessoa01[0]?> tem <?=$pessoa01[1]?> anos e seu email pessoal é: <?=$pessoa01[2]?>.</p>
                    <p>Já o <?=$pessoa02[0]?> tem <?=$pessoa02[1]?> anos e seu email pessoal é: <?=$pessoa02[2]?>.</p>   
        </section>

<!-- 
        <?
              $pessoaA = [
                "nomeA" => "Mariana",
                "idadeA" => "35",
                "emailA" => "marianadasilva@gmail.com",
                "sexo" => "F",
            ];

              $pessoaB = [
                "nomeB" => "Jonas",
                "idadeB" => "38",
                "emailB" => "Jonasdasilva@gmail.com",
                "sexoB" => "M",
            ];
        ?> -->

        <!-- Aarray associativo PHP
        <h2> Array Associativo - Associativo</h1>
        <article>
                    <p><?=$nomeA?> tem <?=$idadeA?> anos e seu email pessoal é: <?=$emailA?>.</p>
                    <p>Já o <?=$nomeB?> tem <?=$idadeB?> anos e seu email pessoal é: <?=$emailB?>.</p>   
        </article> --> -->

</body>
</html>