<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex06</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<form action="resultado.php" method="post">
		<div class="row m-5">
			<div class="col">
				<h1 class="text-center">Converter graus celsius para fahrenheit</h1>
			</div>
		</div>
		<div class="row m-5">
			<div class="col">
				<label for="temp" class="form-label">Temperatura (°C)</label>
				<input type="number" class="form-control" name="temp" id="temp" placeholder="Insira a temperatura em graus celsius">
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

