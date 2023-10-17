<?php 

$con = new PDO("mysql:host=localhost;dbname=test", "root", "");

if ( isset($_POST['nom']) && isset($_POST['prix']) )
{
	$con->query("INSERT INTO produit (nom, prix) VALUES ('" . $_POST['nom'] . "', " . $_POST['prix'] . ")");

	header("Location: index.php");
}

$res = $con->query("SELECT * FROM produit");
$produits = $res->fetchAll();

$html = "";

foreach($produits as $p)
{
	$html .= "<tr>";
	$html .= "<td>" . $p['id'] . "</td>";
	$html .= "<td>" . $p['nom'] . "</td>";
	$html .= "<td>" . $p['prix'] . "</td>";
	$html .= "</tr>";
}

echo $html;

?>