<?php
/* ___                                 */
/*  _/ _  _ _  _ _    _/ _  /  _| _ |_ */
/* /__|_)| (_|(_(_)\/(_|| )|  (_|(_||_ */
/*    |                                */
ini_set("session.cookie_httponly","1");
session_start();
/*  __                                    */
/* |__)_˅_ _ . _   _| _    _ _ _ _. _  _  */
/* |  | (-|_)|_)  (_|(_)  _)(-_)_)|(_)| ) */
/*        |                               */
$Pole=array(
/*Úvod*/"AkadRok","Program","Forma","Jazyk",
/*Vysoká škola*/"VSkola","VFakulta","VProgram","VOborA","VOborB","VOborC",
/*Osobní údaje*/"Jmeno","Prijmeni","Rodne","Tituly","Pohlavi","StatniPris",
/*Narození*/"DatumNar","MistoNar","OkresNar","CisloOP","RCislo","CisloP",
/*Adresa trvalého bydliště*/"TUlice","TCislo","TCast","TObec","TOkres","TPSC","TPosta","TStat",
/*Kontaktní adresa*/"KUlice","KCislo","KCast","KObec","KOkres","KPSC","KPosta","KStat",
/*Střední škola*/"SSkola","SAdresa","SObor","SKKOV","SIZO","SRokMat",
/*Uchazeč se hlásí*/"Odkud",
/*Zájmová činnost*/"Zajmy",
/*Průběh zaměstnání*/"Zamestnavatel","Zarazeni","ZOd","ZDo",
/*Předchozí vysoká škola*/"PSkola","PFakulta","PProgram","PObor","POd","PDo","PTitul",
/*Kontakt*/"Telefon","Email"
);
/*Prospěch*/
for($i=1;$i<=27;$i++){
$Pole[]="Predmet".$i;
$Pole[]="Maturita".$i;
for($j=1;$j<=5;$j++){
$Pole[]="Predmet".$i."Rocnik".$j;
}}
if(!empty($_POST)){
foreach($Pole as $Promenna){
if(!empty($_POST[$Promenna])){
$_SESSION[$Promenna]=$_POST[$Promenna];
}}}else{
header("Location: /prihlaska/chyba.php".$_SESSION["c"]."&Kod=3");
}
/*                               */
/* \  / /|_  _˅_  |  _ | _|  _ _ */
/*  \/ \/|_)(-|   |((_)|(-|((_(- */
/*     /                         */
foreach($_POST as $Kolekce){
if((is_array($Kolekce))&&(array_key_exists("Kam",$Kolekce))){
/* ___                                 */
/*  _/ _/ _ . _   _| _    _ _  _ | . _ */
/* /__(_||_)|_)  (_|(_)  (_(_)(_)|(|(- */
/*       |                             */
if(array_key_exists("Cookie",$Kolekce)){
$d=time()+60*60*24*$Kolekce["Cookie"];
foreach($Pole as $Promenna){
if(!empty($_POST[$Promenna])){
setcookie($Promenna,$_SESSION[$Promenna],$d);
}}}
/* ___                                         */
/*  _/ _/ _ . _   _| _    _| _ |_ _ |_  _/_  _ */
/* /__(_||_)|_)  (_|(_)  (_|(_||_(_||_)(_|/_(- */
/*       |                                     */
if(array_key_exists("Databaze",$Kolekce)){
$Databaze=mysqli_connect("localhost","dvorapa","heslododatabaze","databazeprihlasek");
mysqli_set_charset($Databaze,"utf8");
$Prikaz="insert into Prihlasky set ";
foreach($Pole as $Promenna){
if(!empty($_POST[$Promenna])){
$_SESSION[$Promenna]=mysqli_real_escape_string($Databaze,$_SESSION[$Promenna]);
$Prikaz.="$Promenna='{$_SESSION[$Promenna]}',";
}}
$Prikaz.="ElPrijat='ano',";
$Prikaz.="PiPrijat='&#8987;',";
$Prikaz.="PlPrijat='&#8987;',";
$Prikaz.="Prijat='&#8987;',";
$Prikaz.="PHPSESSID='".session_id()."'";
mysqli_query($Databaze,$Prikaz);
mysqli_close($Databaze);
}
/* ___                                       */
/*  _/ _/ _ . _   _| _    _ _    |_  _  _    */
/* /__(_||_)|_)  (_|(_)  _)(_)|_||_)(_)| |_| */
/*       |                                   */
if(array_key_exists("Soubor",$Kolekce)){
ob_start();
include "prihlaska.php";
$Prihlaska=ob_get_contents();
ob_end_clean();
$Cesta="../export/".session_id();
$Funkce=fopen($Cesta.".html","w+");
fwrite($Funkce,$Prihlaska);
fclose($Funkce);
/*                       _                 */
/* |_/ _  _    _ __  _  (_ _  _ _  _/|_    */
/* | \(_)| )\/(-| /_(-  | (_)| |||(_||_|_| */
/*                                         */

}
/*  __                                */
/* /  \ _| _ _| _/ _ /   _ _  _ .|    */
/* \__/(_|(-_)|(_|| )|  (-|||(_||||_| */
/*                                    */
if(array_key_exists("Email",$Kolekce)){
ob_start();
include "email.php";
$Email=ob_get_contents();
ob_end_clean();
$Hlavicka=array();
$Hlavicka[]="MIME-Version: 1.0";
$Hlavicka[]="Content-type: text/html; charset=utf-8";
$Hlavicka[]="From: info@prihlaskanavs.8u.cz";
mail($_SESSION["Email"],"Podrobnosti o přihlášce na VŠ",wordwrap($Email,70,"\r\n"),implode("\r\n",$Hlavicka));
}
/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
$_SESSION["Kam"]=$Kolekce["Kam"];
header("Location: /prihlaska/nova/".$Kolekce["Kam"]);
}}
?>