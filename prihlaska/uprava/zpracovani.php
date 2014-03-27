<?php
/* ___                                 */
/*  _/ _  _ _  _ _    _/ _  /  _| _ |_ */
/* /__|_)| (_|(_(_)\/(_|| )|  (_|(_||_ */
/*    |                                */
ini_set("session.cookie_httponly","1");
if(!empty($_POST["ID"])){
session_start($_POST["ID"]);
}else{
header("Location: /prihlaska/chyba.php".$_SESSION["c"]."&Kod=3");
}
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
/*Stav*/"ElPrijat",
/*Kontakt*/"Telefon","Email"
);
/*Prospěch*/
for($i=1;$i<=27;$i++){
$Pole[]="Predmet".$i;
$Pole[]="Maturita".$i;
for($j=1;$j<=5;$j++){
$Pole[]="Predmet".$i."Rocnik".$j;
}}
if(!empty($_COOKIE)){
foreach($PoleHodnot as $Promenna){
if(!empty($_COOKIE[$Promenna])){
$_SESSION[$Promenna]=$_COOKIE[$Promenna];
}}}else{
header("Location: /prihlaska/chyba.php".$_SESSION["c"]."&Kod=4");
}
/*  __                          */
/* |__)_˅_ _ _  _˅_ _    _/ _ / */
/* |  | (-_)|||(-| (_)\/(_|| )| */
/*                              */
header("Location: /prihlaska/nova/".$_SESSION["c"]);
?>