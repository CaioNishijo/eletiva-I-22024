<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex05</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="resultado.php">
		<div class="row m-5">
			<div class="col">
				<label for="n1" class="form-label">Nota 1</label>
				<input class="form-control" name="n1" id="n1" placeholder="Insira a primeira nota">
			</div>
			<div class="col">
				<label for="n2" class="form-label">Nota 2</label>
				<input class="form-control" name="n1" id="n1" placeholder="Insira a segunda nota">
			</div>
			<div class="col">
				<label for="n3" class="form-label">Nota 3</label>
				<input class="form-control" name="n1" id="n1" placeholder="Insira a terceira nota">
			</div>
		</div>
		<div class="row m-5">
			<div class="col">
				<button class="btn btn-success">Calcular média</button>
			</div>
		</div>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

