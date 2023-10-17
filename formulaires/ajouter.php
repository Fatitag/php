<?php 
#connection avec la base des donnee
$con = mysqli_connect("localhost" , "root" , "" , "dataetud")
or die ("ghalat");
$query = "insert into etudiant(id_etd,nom_etd,prenom_etd,ville_etd) 
values(".$_GET["idEtd"].",'".$_GET["nomEtd"]."','".$_GET["prenomEtd"]."','".$_GET["villEtd"]."')";
mysqli_query($con , $query);
echo $query;
header('location:page.php')
?> 



