<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">	
</head>
<body>
    <form action="" method="post">
        <div class="row m-5">
                <?php for($i=0; $i < 10; $i++): ?>
                    <div class="col">
                        <input type="text" name="nomes[]" placeholder="Valor<?=$i + 1?>" class="form-control">
                    </div>
                <?php endfor;?>
        </div>
        <div class="row m-5">
            <div class="col">
                <button type="submit" class="btn btn-success">
                    Enviar
                </button>
            </div>
        </div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $valores = $_POST["nomes"];
                print_r($valores);
            }catch(Exception $e){
                echo"erro".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>