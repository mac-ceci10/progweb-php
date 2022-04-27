<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03- Exercício</title>
    <link rel="stylesheet" href="02-exercicio-style.css">
</head>
<body>
    <!-- 
        Exercício 03 - Condicionais
Crie o arquivo exercicio03.php e programe nele recursos que permitam avaliar o valor de um salário e calcular um novo valor de salário baseado nos seguintes critérios:

Se salário menor que 500, calcule um aumento de 15%
Senão, se salário menor ou igual a 1000, calcule um aumento de 10%
Senão calcule um aumento de 5%
Mostre no HTML uma mensagem informando o valor do salário antigo (antes do reajuste) e do novo salário (após o reajuste).

DESAFIO: existe uma função nativa do PHP que permite mudar a forma como números são exibidos na tela. Descubra qual é esta função e a utilize para exibir os salários com o sinal de "." para separador de milhar e "," para separador de casa decimal com duas casas decimais.

     -->


     <h1>Cálculo do salário antigo com o novo aumento</h1>

     <?php 

        $salario_inic = 1000;


        if ($salario_inic <500){
            $aument_sal = ($salario_inic * 1.15);

        }elseif ($salario_inic <= 1000){
            $aument_sal = ($salario_inic * 1.10);

        }else{
            $aument_sal = ($salario_inic * 1.05);
        };  

    $salario_final = $aument_sal

    number_format($salario_final, 2, ',', '.');

    echo "<p> Seu salário antigo era $salario_inic e o seu novo salário será R$ $aument_sal reais </p>"; 
     ?>

</body>
</html>