<?php
include("../cnx.php");
extract($_POST);
$req=mysqli_query($cnx, "INSERT INTO voiture (mat,nom,prix) VALUES ('$mat', '$nom', '$prix')");
header('location:index.html');
mysqli_close($cnx);

?>