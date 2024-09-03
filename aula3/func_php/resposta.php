<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex01</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">	
</head>
<body>
	<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $n1 = $_POST["n1"];
                $qnt_caracteres = strlen($n1);
                $maiusculo = strtoupper($n1);
                $minusculo = strtolower($n1);

                echo"Quantidade de caracteres $qnt_caracteres";
                echo"Maiúsculo: $maiusculo";

                $dia = 30;
                $mes = 2;
                $ano = 2024;

                if(chechdate($mes, $dia, $ano)){
                    echo"<p>A data existe</p>";
                }else{
                    echo"<p>A data não existe</p>";
                }

                $menor = min(1, 2, 3, 4, 5);
                $maior = max(1, 2, 3, 4, 5);

                echo"Maior valor $maior";
                echo"menor valor $menor";

                $num = rand(1, 100);
                echo"Número randômico: $num";

                $qnt = 1234.12;
                $moeda = number_format($qnt, 2, ",", ".");

                
            }catch(Exception $e){
                echo"Erro".$e->getMessage();
            }
        }
    
    ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

