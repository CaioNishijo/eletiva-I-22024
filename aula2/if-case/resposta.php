<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $valor = (int) $_POST["valor"];
                if($valor > 0){
                    echo"
                    <div class='row m-5'>
                        <div class='col'>
                            <h1 class='text-center'>O valor é positivo</h1>
                        </div>
                    </div>
                    ";
                }else if($valor < 0){
                    echo
                    "<div class='row m-5'>
                        <div class='col'>
                            <h1 class='text-center' >O valor é negativo</h1>
                        </div>
                    </div>
                    ";
                }else{
                    echo
                    "<div class='row m-5'>
                        <div class='col'>
                            <h1 class='text-center' >O valor é 0</h1>
                        </div>
                    </div>
                    ";
                }
            } catch(Exception $e){
                echo "Erro!".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>