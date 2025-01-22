<?php
include("../conx.php");
extract($_POST);
$dat_dep=date("yyyy-MM-dd", strtotime(now));

$res=mysqli_query($cnx,"INSERT INTO liste_vc VALUES ('mat','cc','nc','dur','$dat_dep','cch','NULL','NULL')");

?>