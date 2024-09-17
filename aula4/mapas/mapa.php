<?php declare(strict_types=1)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = array("Morango", "Uva");

        echo $frutas[0];

        $frutas[0] = "Laranja";

        $frutas["Fruta"] = 15;

        $cores[0] = "Azul";
        $cores["Cor"] = "Amarelo";

        $mapa = [
            "valor1" => 1,
            "valor2" => 2,
            "valor3" => 3
        ];

        var_dump($cores);
        print_r($mapa);

        //foreach($frutas as $fruta)
        foreach($frutas as $chave => $valor){
            echo"$chave => $valor";
        }

        echo"Quantidade de elementos".count($frutas);

        asort($frutas); //ordenar pelo valor
        ksort($frutas); //ordenar pelo chave
    ?>
</body>
</html>