<?php
session_start();
if(!empty($_POST)){
/* ___                         __  __  _____ */
/*  _/ _  _ _  _ _    _/ _ /  |__)/  \(_  |  */
/* /__|_)| (_|(_(_)\/(_|| )|  |   \__/__) |  */
/*    |                                      */
/*Úvod*/
$_SESSION["AkadRok"]=$_POST["AkadRok"];
$_SESSION["Program"]=$_POST["Program"];
$_SESSION["Forma"]=$_POST["Forma"];
$_SESSION["Jazyk"]=$_POST["Jazyk"];

/*Vysoká škola*/
$_SESSION["VSkola"]=$_POST["VSkola"];
$_SESSION["VFakulta"]=$_POST["VFakulta"];
$_SESSION["VProgram"]=$_POST["VProgram"];
$_SESSION["VOborA"]=$_POST["VOborA"];
$_SESSION["VOborB"]=$_POST["VOborB"];
$_SESSION["VOborC"]=$_POST["VOborC"];

/*Osobní údaje*/
$_SESSION["Jmeno"]=$_POST["Jmeno"];
$_SESSION["Prijmeni"]=$_POST["Prijmeni"];
$_SESSION["Rodne"]=$_POST["Rodne"];
$_SESSION["Tituly"]=$_POST["Tituly"];
$_SESSION["Pohlavi"]=$_POST["Pohlavi"];
$_SESSION["StatniPris"]=$_POST["StatPris"];

/*Narození*/
$_SESSION["DenNar"]=$_POST["DenNar"];
$_SESSION["MesicNar"]=$_POST["MesicNar"];
$_SESSION["RokNar"]=$_POST["RokNar"];
$_SESSION["MistoNar"]=$_POST["MistoNar"];
$_SESSION["OkresNar"]=$_POST["OkresNar"];
$_SESSION["CisloOP"]=$_POST["CisloOP"];
$_SESSION["RCislo"]=$_POST["RCislo"];
$_SESSION["CisloP"]=$_POST["CisloP"];

/*Adresa trvalého bydliště*/
$_SESSION["TUlice"]=$_POST["TUlice"];
$_SESSION["TCislo"]=$_POST["TCislo"];
$_SESSION["TCast"]=$_POST["TCast"];
$_SESSION["TObec"]=$_POST["TObec"];
$_SESSION["TOkres"]=$_POST["TOkres"];
$_SESSION["TPSC"]=$_POST["TPSC"];
$_SESSION["TTel"]=$_POST["TTel"];
$_SESSION["TPosta"]=$_POST["TPosta"];
$_SESSION["TStat"]=$_POST["TStat"];

/*Kontaktní adresa*/
$_SESSION["KUlice"]=$_POST["KUlice"];
$_SESSION["KCislo"]=$_POST["KCislo"];
$_SESSION["KCast"]=$_POST["KCast"];
$_SESSION["KObec"]=$_POST["KObec"];
$_SESSION["KOkres"]=$_POST["KOkres"];
$_SESSION["KPSC"]=$_POST["KPSC"];
$_SESSION["KTel"]=$_POST["KTel"];
$_SESSION["KPosta"]=$_POST["KPosta"];
$_SESSION["KStat"]=$_POST["KStat"];

/*Střední škola*/
$_SESSION["SNazev"]=$_POST["SNazev"];
$_SESSION["SAdresa"]=$_POST["SAdresa"];
$_SESSION["SObor"]=$_POST["SJObor"];
$_SESSION["SKOV"]=$_POST["SJKOV"];
$_SESSION["SObor"]=$_POST["SKObor"];
$_SESSION["SKOV"]=$_POST["SKKOV"];
$_SESSION["SIZO"]=$_POST["SIZO"];
$_SESSION["SRokMat"]=$_POST["SRokMat"];

/*Uchazeč se hlásí*/
$_SESSION["Odkud"]=$_POST["Odkud"];

/*Prospěch*/
for($i=1;$i<=27;$i++){
$_SESSION["Predmet".$i]=$_POST["Predmet".$i];
for($j=1;$j<=6;$j++){
$_SESSION["Predmet".$i."Rocnik".$j]=$_POST["Predmet".$i."Rocnik".$j];
}}

/*Zájmová činnost*/
$_SESSION["Zajmy"]=$_POST["Zajmy"];

/*Průběh zaměstnání*/
$_SESSION["Zamestnavatel"]=$_POST["Zamestnavatel"];
$_SESSION["Zarazeni"]=$_POST["Zarazeni"];
$_SESSION["ZOd"]=$_POST["ZOd"];
$_SESSION["ZDo"]=$_POST["ZDo"];

/*Předchozí vysoká škola*/
$_SESSION["PSkola"]=$_POST["PSkola"];
$_SESSION["PFakulta"]=$_POST["PFakulta"];
$_SESSION["PProgram"]=$_POST["PProgram"];
$_SESSION["PObor"]=$_POST["PObor"];
$_SESSION["POd"]=$_POST["POd"];
$_SESSION["PDo"]=$_POST["PDo"];
$_SESSION["PTitul"]=$_POST["PTitul"];

/*  __                                   */
/* (_ |_ _ _\/_ _ /   _ _    |_  _  _    */
/* __)|_(_|/_(-| )|  _)(_)|_||_)(_)| |_| */
/*                                       */
$n=SID;
$Sklad="$_POST['kekel'].SID".SID;//file_get_contents("Nova.php");
$Funkce=fopen($n.".html","r+");
fwrite($Funkce,$Sklad);
fclose($Funkce);

/* ___            __ __  __      __ */
/*  _/ _/ _ . _  /  /  \/  \|_/||_  */
/* /__(_||_)|_)  \__\__/\__/| \||__ */
/*       |                          */
$d=time()+60*60*24*1;
/*Úvod*/
setcookie("AkadRok",$AkadRok,$d);
setcookie("Program",$Program,$d);
setcookie("Forma",$Forma,$d);
setcookie("Jazyk",$Jazyk,$d);

/*Vysoká škola*/
setcookie("VSkola",$VSkola,$d);
setcookie("VFakulta",$VFakulta,$d);
setcookie("VProgram",$VProgram,$d);
setcookie("VOborA",$VOborA,$d);
setcookie("VOborB",$VOborB,$d);
setcookie("VOborC",$VOborC,$d);

/*Osobní údaje*/
setcookie("Jmeno",$Jmeno,$d);
setcookie("Prijmeni",$Prijmeni,$d);
setcookie("Rodne",$Rodne,$d);
setcookie("Tituly",$Tituly,$d);
setcookie("Pohlavi",$Pohlavi,$d);
setcookie("StatPris",$StatniPris,$d);

/*Narození*/
setcookie("DenNar",$DenNar,$d);
setcookie("MesicNar",$MesicNar,$d);
setcookie("RokNar",$RokNar,$d);
setcookie("MistoNar",$MistoNar,$d);
setcookie("OkresNar",$OkresNar,$d);
setcookie("CisloOP",$CisloOP,$d);
setcookie("RCislo",$RCislo,$d);
setcookie("CisloP",$CisloP,$d);

/*Adresa trvalého bydliště*/
setcookie("TUlice",$TUlice,$d);
setcookie("TCislo",$TCislo,$d);
setcookie("TCast",$TCast,$d);
setcookie("TObec",$TObec,$d);
setcookie("TOkres",$TOkres,$d);
setcookie("TPSC",$TPSC,$d);
setcookie("TTel",$TTel,$d);
setcookie("TPosta",$TPosta,$d);
setcookie("TStat",$TStat,$d);

/*Kontaktní adresa*/
setcookie("KUlice",$KUlice,$d);
setcookie("KCislo",$KCislo,$d);
setcookie("KCast",$KCast,$d);
setcookie("KObec",$KObec,$d);
setcookie("KOkres",$KOkres,$d);
setcookie("KPSC",$KPSC,$d);
setcookie("KTel",$KTel,$d);
setcookie("KPosta",$KPosta,$d);
setcookie("KStat",$KStat,$d);

/*Střední škola*/
setcookie("SNazev",$SNazev,$d);
setcookie("SAdresa",$SAdresa,$d);
setcookie("SJObor",$SObor,$d);
setcookie("SJKOV",$SKOV,$d);
setcookie("SKObor",$SObor,$d);
setcookie("SKKOV",$SKOV,$d);
setcookie("SIZO",$SIZO,$d);
setcookie("SRokMat",$SRokMat,$d);

/*Uchazeč se hlásí*/
setcookie("Odkud",$Odkud,$d);

/*Prospěch*/
for($i=1;$i<=27;$i++){
setcookie("Predmet".$i,${"Predmet".$i},$d);
for($j=1;$j<=6;$j++){
setcookie("Predmet".$i."Rocnik".$j,${"Predmet".$i."Rocnik".$j},$d);
}}

/*Zájmová činnost*/
setcookie("Zajmy",$Zajmy,$d);

/*Průběh zaměstnání*/
setcookie("Zamestnavatel",$Zamestnavatel,$d);
setcookie("Zarazeni",$Zarazeni,$d);
setcookie("ZOd",$ZOd,$d);
setcookie("ZDo",$ZDo,$d);

/*Předchozí vysoká škola*/
setcookie("PSkola",$PSkola,$d);
setcookie("PFakulta",$PFakulta,$d);
setcookie("PProgram",$PProgram,$d);
setcookie("PObor",$PObor,$d);
setcookie("POd",$POd,$d);
setcookie("PDo",$PDo,$d);
setcookie("PTitul",$PTitul,$d);
setcookie("Kelek",$_POST["kekel"],$d)

/* ___                                 */
/*  _/ _/ _ . _   _| _ |_ _ |_  _/_  _ */
/* /__(_||_)|_)  (_|(_||_(_||_)(_|/_(- */
/*       |                             */

}
?>