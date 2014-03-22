<?php
/* ___                            ______ __  */
/*  _/ _  _ _  _ _    _/ _ /  |__| |  | |__) */
/* /__|_)| (_|(_(_)\/(_|| )|  |  | |  | |    */
/*    |                                      */
session_start();
$PoleHodnot=array(
/*Úvod*/
"AkadRok","Program","Forma","Jazyk",
/*Vysoká škola*/
"VSkola","VFakulta","VProgram","VOborA","VOborB","VOborC",
/*Osobní údaje*/
"Jmeno","Prijmeni","Rodne","Tituly","Pohlavi","StatniPris",
/*Narození*/
"DatumNar","MistoNar","OkresNar","CisloOP","RCislo","CisloP",
/*Adresa trvalého bydliště*/
"TUlice","TCislo","TCast","TObec","TOkres","TPSC","TTel","TEmail","TPosta","TStat",
/*Kontaktní adresa*/
"KUlice","KCislo","KCast","KObec","KOkres","KPSC","KPosta","KStat",
/*Střední škola*/
"SSkola","SAdresa","SObor","SKKOV","SIZO","SRokMat",
/*Uchazeč se hlásí*/
"Odkud",
/*Zájmová činnost*/
"Zajmy",
/*Průběh zaměstnání*/
"Zamestnavatel","Zarazeni","ZOd","ZDo",
/*Předchozí vysoká škola*/
"PSkola","PFakulta","PProgram","PObor","POd","PDo","PTitul"
);
/*Prospěch*/
for($i=1;$i<=27;$i++){
$PoleHodnot[]="Predmet".$i;
$PoleHodnot[]="Maturita".$i;
for($j=1;$j<=5;$j++){
$PoleHodnot[]="Predmet".$i."Rocnik".$j;
}}

/*  __                                    */
/* |__)_˅_ _ . _   _| _    _ _ _ _. _  _  */
/* |  | (-|_)|_)  (_|(_)  _)(-_)_)|(_)| ) */
/*        |                               */
if(!empty($_POST)){
foreach($PoleHodnot as $Promenna){
if(!empty($_POST[$Promenna])){
$_SESSION[$Promenna]=$_POST[$Promenna];
}}}

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
foreach($PoleHodnot as $Promenna){
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
$Sklad="insert into Prihlasky set ";
foreach($PoleHodnot as $Promenna){
if(!empty($_POST[$Promenna])){
$_SESSION[$Promenna]=mysqli_real_escape_string($Databaze,$_SESSION[$Promenna]);
$Sklad.="$Promenna='{$_SESSION[$Promenna]}',";
}}
$Sklad.="PHPSESSID='".session_id()."'";
mysqli_query($Databaze,$Sklad);
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
$Funkce=fopen("../export/".session_id().".html","w+");
fwrite($Funkce,$Prihlaska);
fclose($Funkce);
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
$Hlavicka[]="From: Přihláška na VŠ <info@prihlaskanavs.8u.cz>";
mail($_SESSION["TEmail"],"Podrobnosti o přihlášce na VŠ",wordwrap($Email,70,"\r\n"),implode("\r\n",$Hlavicka));
}

/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
$_SESSION["Kam"]=$Kolekce["Kam"];
header("Location: /".$Kolekce["Kam"]);
}}
?>