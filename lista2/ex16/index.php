<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="resultado.php" method="post">
        <div class="row m-5">
            <div class="col">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" name="preco" id="preco" placeholder="Insira o preço" class="form-control">
            </div>
            <div class="col">
                <label for="desconto" class="form-label">Digite o percentual de desconto</label>
                <input type="text" name="desconto" id="desconto" placeholder="Insira o percentual de desconto"  class="form-control">
            </div>
        </div>
        <div class="row m-5">
            <div class="col">
                <button type="submit" class="btn btn-success">Calcular</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>