<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario de Incrição</title>
</head>
<body>

	<h1>
		<div style="text-align:center">
			<p>Formulario de Incrição de Competidores</p>
		</div>
	</h1>

	<form action="script.php" method="post">
		<div style="text-align:center">
			<p>Seu name: <input type="text" name="nome" required></p>
			<p>Sua idade: <input type="number" name="idade" required></p>
			<p><input type="submit" name="enviar" ></p>
		</div>
	</form>

</body>
</html>