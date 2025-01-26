<?php
include("../cnx.php");
extract($_POST);
$d = date("Y-m-d");
$resmt= mysqli_query($cnx , "SELECT prix from voiture where mat = '$mat'");
$p = mysqli_fetch_array($resmt)[0];
$mt = $p * $dur;
$reset =mysqli_query($cnx , "SELECT * from liste_vc where mat = '$mat'");
$etat = "";
if(mysqli_num_rows($reset) === 1){
    $etat = "mosh mawjouda tw !";
}else{
    $etat = "mawjouda!";
}
$res = mysqli_query($cnx ,"INSERT into liste_vc (mat,cc,nc,nb_j,date_dep,c_ch,m_t,etat) values('$mat','$cc','$nc','$dur','$d','$cch','$mt','$etat')");
mysqli_close($cnx);
?>