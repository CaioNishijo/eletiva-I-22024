<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function saudacao(string $nome = "Visitante"): void{
            echo"Olá $nome\n";
        }
        function soma(int $a, int $b): int {
            return $a + $b;
        }
        function subtracao(int $a, int $b): int {
            return $a - $b;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $valor1 = (int)$_POST["n1"];
                $valor2 = (int)$_POST["n2"];

                $soma = soma($valor1, $valor2);

                echo"Soma: $soma";

                saudacao();
                saudacao("Mete Bala");
            }catch(Exception $e){
                echo"Erro".$e->getMessage();
            }
        }
    ?>
</body>
</html>