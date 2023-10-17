<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $con = mysqli_connect("localhost" , "root" , "" , "dataetud")
    or die ("ghalat"    );
    
    $SQL ="UPDATE etudiant
    SET nom_etd='".$_GET["nomEtd"]."'
    , prenom_etd='".$_GET["prenomEtd"]."' 
    , ville_etd='".$_GET["villEtd"]."'
    where id_etd =".$_GET["idEtd"];

    mysqli_query($con,$SQL);
    header('location:page.php')

?>
</head>
<body>
    
</body>
</html>