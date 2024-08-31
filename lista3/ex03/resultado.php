<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			try{
				$n1 = (int)$_POST["n1"];	
				$n2 = (int)$_POST["n2"];

				if($n1 == $n2){
					echo"	<div class='row m-5'>
						<div class='col'>
							<h1 class='text-center'>$n1. Os valores são iguais</h1>
						</div>
					</div>";
				}else if($n1 > $n2){
					echo"	<div class='row m-5'>
						<div class='col'>
							<h1 class='text-center'>$n2 $n1</h1>
						</div>
					</div>";
				}else{
					echo"	<div class='row m-5'>
						<div class='col'>
							<h1 class='text-center'>$n1 $n2</h1>
						</div>
					</div>";
				}
						

				
			}catch(Exception $e){
				echo"Erro".$e->getMessage();
			}
		}
		
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

