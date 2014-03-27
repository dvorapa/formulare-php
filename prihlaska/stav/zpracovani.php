<?php
/* ___                                 */
/*  _/ _  _ _  _ _    _/ _  /  _| _ |_ */
/* /__|_)| (_|(_(_)\/(_|| )|  (_|(_||_ */
/*    |                                */
ini_set("session.cookie_httponly","1");
if((!empty($_POST["ID"]))&&(!empty($_POST["RCislo"]))){
session_start($_POST["ID"]);
}else{
header("Location: /prihlaska/chyba.php?Kod=3");
}
/*                                       */
/* \  /   _  _    |_ _/   _ _  _ | . _ _ */
/*  \/ \/|_)| )|_||_(_|  (_(_)(_)|(|(-_) */
/*     / |                               */
if(!isset($_COOKIE["Cookie"])){
if(!isset($_GET["Cookie"])){
setcookie("Cookie","1");
$_SESSION["c"]="?Cookie";
header("Location: /prihlaska/stav/{$_SESSION['c']}");
}else{
$_SESSION["c"]="?".htmlspecialchars(SID);
}}else{
$_SESSION["c"]="?Cookie";
}
/*                                         */
/* \  / / _ . _  _    _| _ |_ _ |_  _/_  _ */
/*  \/ \/|_)|_)  /_  (_|(_||_(_||_)(_|/_(- */
/*     / |                                 */
$Pole=array("AkadRok","VSkola","VFakulta","ElPrijat","PiPrijat","PlPrijat","Prijat");
$Databaze=mysqli_connect("localhost","dvorapa","heslododatabaze","databazeprihlasek");
mysqli_set_charset($Databaze,"utf8");
foreach($Pole as $Promenna){
$Prikaz="select {$Promenna} from Prihlasky where PHPSESSID='{$_POST['ID']}' && RCislo='{$_POST['RCislo']}'";
$_SESSION[$Promenna]=mysqli_query($Databaze,$Prikaz);
}
mysqli_close($Databaze);
/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
header("Location: /prihlaska/stav/stav.php".$_SESSION["c"]);
?>