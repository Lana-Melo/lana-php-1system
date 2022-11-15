<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema da Lana</title>
</head>
<body>
	<div>
		<div>
			<h4>LOGIN</h4>
		</div>
		<div>
			<form action="../controllers/LoginController.php" method="GET">
				<span>E-mail: <input type="text" name="email" placeholder="ex.: seuemail@email.com"/></span>
				<span>Senha: <input type="password" name="password"/></span> 
				<input type="submit" value="ENTRAR"/>
			</form>
		</div>
	</div>
</body>
</html>