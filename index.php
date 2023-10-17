<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-size: 50px;
		}
	</style>
</head>
<body>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nom</th>
		<th>Prix</th>
	</tr>
	<tbody id="tbody"></tbody>
</table>
<form onsubmit="envoyer(event)">
	<div>
		<label>Nom</label>
		<input type="text" name="nom" id="nom" />
	</div>
	<div>
		<label>Prix</label>
		<input type="number" name="prix" id="prix" />
	</div>
	<input type="submit" value="Ajouter">
</form>
<script src="jquery-3.6.0.min.js"></script>
<script>
	// --------- La récupération des données via Ajax ---------
	// Appel Ajax avec jQuery
	setInterval(function(){

		$.ajax('getProduits.php', {
			type: "get",
			success: function(data) {
				$('#tbody').html(data);
			}
		});

	}, 500);

	// Appel Ajax avec JavaScript pure
	setInterval(function(){
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "getProduits.php");
		xhttp.send();

		xhttp.onreadystatechange = function(){
			var tbody = document.getElementById('tbody');
			tbody.innerHTML = this.responseText;
		};
	}, 500);

	// --------- L'envoie des données via Ajax ---------
	// Appel Ajax avec jQuery
	$('form').submit(function(event){
		event.preventDefault();

		$.ajax('getProduits.php', {
			type: 'post',
			data: { 'nom': $('#nom').val(), 'prix': $('#prix').val() }
		});

	});

	// Appel Ajax avec JavaScript pure
	function envoyer(event) 
	{
		event.preventDefault();

		nom = document.getElementById("nom");
		prix = document.getElementById("prix");

		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "getProduits.php");
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("nom=" + nom.value + "&prix=" + prix.value);
	}
</script>
</body>
</html>