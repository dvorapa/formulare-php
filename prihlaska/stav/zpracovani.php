<?php
/* ___                                 */
/*  _/ _  _ _  _ _    _/ _  /  _| _ |_ */
/* /__|_)| (_|(_(_)\/(_|| )|  (_|(_||_ */
/*    |                                */
ini_set("session.cookie_httponly","1");
if((!empty($_POST["ID"]))&&(!empty($_POST["RCislo"]))){
session_id($_POST["ID"]);
session_start();
}else{
header("Location: /prihlaska/chyba.php".$_SESSION["c"]."&Kod=3");
}
/*                                         */
/* \  / / _ . _  _    _| _ |_ _ |_  _/_  _ */
/*  \/ \/|_)|_)  /_  (_|(_||_(_||_)(_|/_(- */
/*     / |                                 */
$Pole=array("AkadRok","VSkola","VFakulta","ElPrijat","PiPrijat","PlPrijat","Prijat");
$Databaze=mysqli_connect("localhost","dvorapa","heslododatabaze","databazeprihlasek");
mysqli_set_charset($Databaze,"utf8");
foreach($Pole as $Promenna){
$Prikaz="select {$Promenna} from Prihlasky where PHPSESSID='{$_POST['ID']}' and RCislo='{$_POST['RCislo']}'";
$_SESSION[$Promenna]=mysqli_query($Databaze,$Prikaz);
print_r($_SESSION[$Promenna]);
}
mysqli_close($Databaze);
/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
#header("Location: /prihlaska/stav/stav.php".$_SESSION["c"]);
?>