<?php 

$con = new PDO("mysql:host=localhost;dbname=chat", 'root', '');

if ( isset($_POST['message']) )
{
	$con->query("INSERT INTO messages (msg, idSender, idReceiver) VALUES ('" . $_POST['message'] . "', " . $_POST['idSender'] . ", " . $_POST['utilisateur'] . ")");
}

$res1 = $con->query("SELECT * FROM messages");
$messages = $res1->fetchAll();

$html = '';

foreach ($messages as $msg)
{
	$html .= '<div class="msg">';
	$html .= '<span>' . $msg['idSender'] . '</span>';
	$html .= '<p>' . $msg['msg'] . '</p>';
	$html .= '</div>';
}

echo $html;

?>