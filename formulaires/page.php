<!DOCTYPE html>
<html lang="en">
    <style>
        
        table{
            border-collapse:collapse;
            }

        td , th{
            width: 100px;
            text-align: center;
            font-size: large;
            border: 2px solid;
        }

        a{
            text-decoration: none;
            font-weight: bolder;
        }

        button{
            margin-top: 10px;
            background-color: blue;
        }

        button a{
            color: white;
        }
        
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    $con = mysqli_connect("localhost" , "root" , "" , "dataetud")
    or die ("<html>script language='javascript'>
    alert('impossible de e connecter a la nabases des donnees')");

    $query = "SELECT * FROM etudiant";
    $result = mysqli_query($con , $query);
    ?>
</head>

<body>

<table>
    <tr> <th>ID</th> <th>nom</th> <th>prenom</th> <th>ville</th> </tr>
    <?php
    if ($result){
        while($row = mysqli_fetch_array($result)){
            ?>
        <tr><td> <a href="modif.php?ID=<?php echo $row["id_etd"]; ?>"> <?php echo $row["id_etd"]; ?> </a> </td><td> <?php echo $row["nom_etd"]; ?> </td><td> <?php echo $row["prenom_etd"]; ?> </td><td> <?php echo $row["ville_etd"]; ?> </td></tr>
        <?php
        }
        ?>
        </table>
    <?php }
    ?>
    <button>
        <a target="_blank" href="pageform.php" >Nouveau etudiant</a>
    </button>
    
</body>
</html> 

<!-- <tr><td> <?php # echo $_GET["id_etd"]; ?> </td><td> <?php #  echo $_GET["nom_etd"]; ?> </td><td> <?php #echo $_GET["prenom_etd"]; ?> </td><td> <?php #echo $_GET["ville_etd"]; ?> </td></tr> -->
