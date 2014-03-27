<?php

ini_set("session.cookie_httponly","1");
if((!empty($_POST["ID"]))&&(!empty($_POST["RCislo"]))){
session_start($_POST["ID"]);
}else{
header("Location: /prihlaska/chyba.php?Kod=3")
}


$PoleHodnot=array(
"AkadRok","VSkola","VFakulta","ElPrijat","PiPrijat","PlPrijat","Prijat"
);


$Databaze=mysqli_connect("localhost","dvorapa","heslododatabaze","databazeprihlasek");
mysqli_set_charset($Databaze,"utf8");
foreach($PoleHodnot as $Promenna){
$Prikaz="select {$Promenna} from Prihlasky where PHPSESSID='{$_POST['ID']}' && RCislo='{$_POST['RCislo']}'";
$_SESSION[$Promenna]=mysqli_query($Databaze,$Prikaz);
}
mysqli_close($Databaze);
}
?>