<?php
include("../cnx.php");
extract($_POST);
$res1=mysqli_query($cnx,"SELECT * from voiture WHERE mat='$mat';");
$nb=mysqli_num_rows($res1);
if ($nb==0){
    $req=mysqli_query($cnx, "INSERT INTO voiture (mat,nom,prix) VALUES ('$mat', '$nom', '$prix')");
    header('location:index.html');
}else{
    echo '<script>alert("mawjouda y bhiiiim!");</script>';
    header('location:index.html');
}
mysqli_close($cnx);

?>