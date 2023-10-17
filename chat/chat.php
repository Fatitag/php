<?php 

$con = new PDO("mysql:host=localhost;dbname=chat", 'root', '');

if ( isset($_POST['username']) )
{
	$con->query("INSERT INTO users (username) VALUES ('" . $_POST['username'] . "')");
}

$res2 = $con->query("SELECT * FROM users");
$users = $res2->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.msg { 
			overflow: hidden; 
			margin-bottom: 10px;
		}

		.msg span { float: left; }
		.msg p { 
			float: left; 
			border: 2px blue solid;
			border-radius: 3px;
			padding: 5px;
			margin: 0;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<div id="messages"></div>
	<form method="post">
		<input type="text" name="idSender" id="idSender" required />
		<div>
			<label>Message</label>
			<textarea name="message" id="message"></textarea>
		</div>
		<div>
			<label>Utilisateur</label>
			<select name="utilisateur" id="utilisateur">
				<option></option>
				<?php foreach ($users as $user): ?>
					<option value="<?php echo $user['id'] ?>"><?php echo $user['username'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<input type="submit" value="Envoyer">
	</form>
	<script src="../jquery-3.6.0.min.js"></script>
	<script>
		setInterval(function(){

			$.ajax('getMessages.php', {
				type: 'get',
				success: function(data) {
					$('#messages').html(data);
				}
			});

		}, 500);

		$('form').submit(function(event){

			event.preventDefault();

			$.ajax('getMessages.php', {
				type: 'post',
				data: { 'message': $('#message').val(), 'idSender': $('#idSender').val(), 'utilisateur': $('#utilisateur').val() }
			});

		});
	</script>
</body>
</html>