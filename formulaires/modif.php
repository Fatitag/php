<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $ID = $_GET['ID'];
    $con = mysqli_connect("localhost" , "root" , "" , "dataetud")
    or die ("ooo");
    $_GET['ID'];
    $query = "SELECT * FROM etudiant where id_etd=".$ID;

    $result = mysqli_query($con , $query);
    $row = mysqli_fetch_array($result);
    # $row['nom_etd'];
?>
</head>
<body>
<?php # echo $_GET['ID'] ?> 
 
<form action="modifupd.php" method="GET">
        <label for="">Id</label>
        <input  type="text" value="<?php echo $row['id_etd'] ?> "  name="idEtd" id="" readonly><br><br>
        <label for="">Nom</label>
        <input type="text" value="<?php echo $row['nom_etd'] ?>" name="nomEtd" id=""><br><br>
        <label for="">Prenom</label>
        <input type="text" value="<?php echo $row['prenom_etd'] ?>" name="prenomEtd" id=""><br><br>
        <label for="">Ville</label>
        <input type="text" value="<?php echo $row['ville_etd'] ?>" name="villEtd" id=""><br><br>
        <input type="submit" value="Modifier">
        <input type="reset" value="annuler">
    </form>
</body>
</html>