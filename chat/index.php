<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form {
			width: 300px;
			margin: 0 auto;
			text-align: center;
			border: 2px black solid;
			padding: 20px;
			margin-top: 50px;
		}

		form div { margin-bottom: 10px; }
	</style>
</head>
<body>
	<form action="chat.php" method="post">
		<h2>Se connecter au chat</h2>
		<div>
			<label>Username</label>
			<input type="text" name="username" required />
		</div>
		<input type="submit" value="Se connecter">
	</form>
</body>
</html>