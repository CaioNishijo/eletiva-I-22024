<?php declare(strict_types=1)?>
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
				function verificar(string $palavra1, string $palavra2):int {
					return strpos($palavra1, $palavra2);
				}
				$palavra = (string)$_POST["palavra"];
				$palavra2 = (string)$_POST["palavra2"];
				
				$ocorrencia = (int) verificar($palavra, $palavra2);

				if($ocorrencia){
					echo"A segunda string está contida na primeira";
				}else{
					echo"A segunda string não está contida na primeira";
				}
			}catch(Exception $e){
				echo"Erro".$e->getMessage();
			}
		}
		
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
