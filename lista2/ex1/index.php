<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="resposta.php" method="post">
        <div class="row m-5">
            <div class="col">
                <h1>EX1. Somar dois números.</h1>
            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <label for="n1" class="form-label">Número 1</label>
                <input type="text" placeholder="Número 1" name="n1" class="form-control">
            </div>
            <div class="col">
                <label for="n2" class="form-label">Número 2</label>
                <input type="text" placeholder="Número 2" name="n2" class="form-control" >
            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <button type="submit" class="btn btn-success" >Calcular</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>