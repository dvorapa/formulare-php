<?php
/* ___                                 */
/*  _/ _  _ _  _ _    _/ _  /  _| _ |_ */
/* /__|_)| (_|(_(_)\/(_|| )|  (_|(_||_ */
/*    |                                */
ini_set("session.cookie_httponly","1");
if((!empty($_POST["ID"]))&&(!empty($_POST["RCislo"]))){
session_id($_POST["ID"]);
session_start();
if(!isset($_COOKIE["Cookie"])){
$_SESSION["c"]="?".htmlspecialchars(SID);
}else{
$_SESSION["c"]="?Cookie";
}}else{
header("Location: /prihlaska/chyba.php?Kod=2");
}
/*                                         */
/* \  / / _ . _  _    _| _ |_ _ |_  _/_  _ */
/*  \/ \/|_)|_)  /_  (_|(_||_(_||_)(_|/_(- */
/*     / |                                 */
$Pole=array("AkadRok","VSkola","VFakulta","ElPrijat","PiPrijat","PlPrijat","Prijat");
$Databaze=mysqli_connect("localhost","czprihlaskanav93","heslododatabaze","czprihlaskanavs");
mysqli_set_charset($Databaze,"utf8");
foreach($Pole as $Promenna){
$Prikaz="select {$Promenna} from Prihlasky where PHPSESSID='{$_POST['ID']}' and RCislo='{$_POST['RCislo']}'";
$Rada=mysqli_fetch_assoc(mysqli_query($Databaze,$Prikaz));
$_SESSION[$Promenna]=$Rada[$Promenna];
}
mysqli_close($Databaze);
/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
header("Location: /prihlaska/uprava/stav.php".$_SESSION["c"]);
?>