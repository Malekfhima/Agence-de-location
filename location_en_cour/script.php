<?php
include ("cnx.php");
extract($_POST);
$res=mysqli_query($cnx,"SELECT * FROM liste_vc WHERE (mat='$mat');");
$nb=mysqli_num_rows($res);
if ($nb>0){
    die("karhba mwjoda !!!!");
}else{
    $res=mysqli_query($cnx,"INSERT Into (mat,cc,nc,nb_j,c_ch,) voiture VALUES ('$mat','$nom','$prix)");
    $nb=mysqli_num_rows($res);

}

?>
