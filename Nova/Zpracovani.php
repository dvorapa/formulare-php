<?php
/* ___                          __      __  */
/*  _/ _  _ _  _ _    _/ _ /   |__)|__||__) */
/* /__|_)| (_|(_(_)\/(_|| )|.  |   |  ||    */
/*    |                                     */
session_start();
$_SESSION["Pole"]=array(
/*Úvod*/
"AkadRok","Program","Forma","Jazyk",

/*Vysoká škola*/
"VSkola","VFakulta","VProgram","VOborA","VOborB","VOborC",

/*Osobní údaje*/
"Jmeno","Prijmeni","Rodne","Tituly","Pohlavi","StatniPris",

/*Narození*/
"DatumNar","MistoNar","OkresNar","CisloOP","RCislo","CisloP",

/*Adresa trvalého bydliště*/
"TUlice","TCislo","TCast","TObec","TOkres","TPSC","TTel","TPosta","TStat",

/*Kontaktní adresa*/
"KUlice","KCislo","KCast","KObec","KOkres","KPSC","KTel","KPosta","KStat",

/*Střední škola*/
"SNazev","SAdresa","SJObor","SJKOV","SKObor","SKKOV","SIZO","SRokMat",

/*Uchazeč se hlásí*/
"Odkud",

/*Zájmová činnost*/
"Zajmy",

/*Průběh zaměstnání*/
"Zamestnavatel","Zarazeni","ZOdDo",

/*Předchozí vysoká škola*/
"PSkola","PFakulta","PProgram","PObor","POd","PDo","PTitul",

/*Závěr*/
"PHPSESSID","Email","Heslo"
);

/*Prospěch*/
for($i=1;$i<28;$i++){
$_SESSION["Pole"][]="Predmet".$i;
$_SESSION["Pole"][]="Maturita".$i;
for($j=1;$j<6;$j++){
$_SESSION["Pole"][]="Predmet".$i."Rocnik".$j;
}}

/* ___                                   */
/*  _/ _/ _ . _   _| _    _ _ _ _. _  _  */
/* /__(_||_)|_)  (_|(_)  _)(-_)_)|(_)| ) */
/*       |                               */
if(!empty($_POST)){
foreach($_SESSION["Pole"] as $Promenna){
if(!empty($_POST[$Promenna])){
$_SESSION[$Promenna]=$_POST[$Promenna];
}}}

/* ___                                 */
/*  _/ _/ _ . _   _| _    _ _  _ | . _ */
/* /__(_||_)|_)  (_|(_)  (_(_)(_)|(|(- */
/*       |                             */
if(!empty($_POST["Cookie"])){
$_SESSION["d"]=time()+60*60*24*$_POST["Cookie"];
foreach($_SESSION["Pole"] as $Promenna){
if(!empty($_POST[$Promenna])){
setcookie($Promenna,$_SESSION[$Promenna],$_SESSION["d"]);
}}}

/* ___                                         */
/*  _/ _/ _ . _   _| _    _| _ |_ _ |_  _/_  _ */
/* /__(_||_)|_)  (_|(_)  (_|(_||_(_||_)(_|/_(- */
/*       |                                     */
if(!empty($_POST["Databaze"])){
$Databaze=mysqli_connect("localhost","dvorapa","cepetauhacac","databazeprihlasek");
foreach($_SESSION["Pole"] as $Promenna){
if(!empty($_POST[$Promenna])){
$_SESSION[$Promenna]=mysqli_real_escape_string($Databaze,$_SESSION[$Promenna]);
mysqli_query($Databaze,"insert into Prihlasky (".$Promenna.") values (".$_SESSION[$Promenna].")");
}}
mysqli_close($Databaze);
}

/* ___                                       */
/*  _/ _/ _ . _   _| _    _ _    |_  _  _    */
/* /__(_||_)|_)  (_|(_)  _)(_)|_||_)(_)| |_| */
/*       |                                   */
if(!empty($_POST["Soubor"])){
$_SESSION["n"]=session_id();
$Sklad=file_get_contents("Nova.php");
$Funkce=fopen("../Export/".$_SESSION["n"].".php","w+");
fwrite($Funkce,$Sklad);
fclose($Funkce);
}

/*  __                                        */
/* /  \ _| _|_  _ _/ _ /   _ _    |_  _  _    */
/* \__/(_|(-|_)| (_|| )|  _)(_)|_||_)(_)| |_| */
/*                                            */
$Slozka="../Export/";
$Soubory=array_diff(scandir($Slozka),array(".",".."));
foreach($Soubory as $Soubor){
if(filemtime($Slozka.$Soubor)<(time()-60*60*24*31)){
unlink($Slozka.$Soubor);
}}

/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
if(!empty($_POST["Kam"])){
header("Location: ".$_POST["Kam"]);
}else{
header("Location: ./Chyba.php");
}
?>