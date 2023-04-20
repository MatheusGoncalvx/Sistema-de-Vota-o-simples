<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Sistema de Votação</title>
</head>
<body class="bg-body-secondary">
	<div class="container text-center bg-white">
	<div class="row">   
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
				<div class="mb-3" align="center">
                        <a class="navbar-brand ">SISTEMA DE VOTAÇÃO</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
                     </button>
                        </div>
                    </div>
                  </div>
                </nav>
            </div> 

		<h5>Escolha o melhor curso da Etec da Zona Leste</h5>
	<?php

	// Inicializa as variáveis de votação
	$opcao1 = 0;
	$opcao2 = 0;
	$opcao3 = 0;

	// Verifica se o formulário foi enviado
	if (isset($_POST['voto'])) {

		// Obtém a opção selecionada
		$voto = $_POST['opcao'];
		
		//Teste das condições
		if ($voto == 1) {
			$opcao1++;
		} elseif ($voto == 2) {
			$opcao2++;
		} elseif ($voto == 3) {
			$opcao3++;
		}

		// Exibe uma mensagem de confirmação
		echo "<p style='color: green'>Obrigado pelo seu voto!</p>";
	}

	?>

	<form method="post">
		<input type="radio" name="opcao" value="1">  Desenvolvimento de Sistemas<br>
		<input type="radio" name="opcao" value="2">  Recursos Humanos<br>
		<input type="radio" name="opcao" value="3">  Administração<br>
		<input type="submit" name="voto" class="btn btn-primary">
		<br></br>
	</form>

	<?php
	// Exibe os resultados da votação
	echo "<h4>Resultados da Votação</h4>";
	echo "<p>DS: " . $opcao1 . "</p>";
	echo "<p>RH: " . $opcao2 . "</p>";
	echo "<p>ADM: " . $opcao3 . "</p>";
	?>
</body>
</html>
