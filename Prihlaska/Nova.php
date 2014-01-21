<?php
if(!empty($_POST)){
/**************************************/
/*          Zpracování POST           */
/**************************************/
/*Úvod*/
$AkadRok=$_POST["AkadRok"];
$Program=$_POST["Program"];
$Forma=$_POST["Forma"];
$Jazyk=$_POST["Jazyk"];

/*Vysoká škola*/
$VSkola=$_POST["VSkola"];
$VFakulta=$_POST["VFakulta"];
$VProgram=$_POST["VProgram"];
$VOborA=$_POST["VOborA"];
$VOborB=$_POST["VOborB"];
$VOborC=$_POST["VOborC"];

/*Osobní údaje*/
$Jmeno=$_POST["Jmeno"];
$Prijmeni=$_POST["Prijmeni"];
$Rodne=$_POST["Rodne"];
$Tituly=$_POST["Tituly"];
$Pohlavi=$_POST["Pohlavi"];
$StatniPris=$_POST["StatPris"];

/*Narození*/
$DenNar=$_POST["DenNar"];
$MesicNar=$_POST["MesicNar"];
$RokNar=$_POST["RokNar"];
$MistoNar=$_POST["MistoNar"];
$OkresNar=$_POST["OkresNar"];
$CisloOP=$_POST["CisloOP"];
$RCislo=$_POST["RCislo"];
$CisloP=$_POST["CisloP"];

/*Adresa trvalého bydliště*/
$TUlice=$_POST["TUlice"];
$TCislo=$_POST["TCislo"];
$TCast=$_POST["TCast"];
$TObec=$_POST["TObec"];
$TOkres=$_POST["TOkres"];
$TPSC=$_POST["TPSC"];
$TTel=$_POST["TTel"];
$TPosta=$_POST["TPosta"];
$TStat=$_POST["TStat"];

/*Kontaktní adresa*/
$KUlice=$_POST["KUlice"];
$KCislo=$_POST["KCislo"];
$KCast=$_POST["KCast"];
$KObec=$_POST["KObec"];
$KOkres=$_POST["KOkres"];
$KPSC=$_POST["KPSC"];
$KTel=$_POST["KTel"];
$KPosta=$_POST["KPosta"];
$KStat=$_POST["KStat"];

/*Střední škola*/
$SNazev=$_POST["SNazev"];
$SAdresa=$_POST["SAdresa"];
$SObor=$_POST["SJObor"];
$SKOV=$_POST["SJKOV"];
$SObor=$_POST["SKObor"];
$SKOV=$_POST["SKKOV"];
$SIZO=$_POST["SIZO"];
$SRokMat=$_POST["SRokMat"];

/*Uchazeč se hlásí*/
$Odkud=$_POST["Odkud"];

/*Prospěch*/
for($i=1;$i<=27;$i++){
${"Predmet".$i}=$_POST["Predmet".$i];
for($j=1;$j<=6;$j++){
${"Predmet".$i."Rocnik".$j}=$_POST["Predmet".$i."Rocnik".$j];
}}

/*Zájmová činnost*/
$Zajmy=$_POST["Zajmy"];

/*Průběh zaměstnání*/
$Zamestnavatel=$_POST["Zamestnavatel"];
$Zarazeni=$_POST["Zarazeni"];
$ZOd=$_POST["ZOd"];
$ZDo=$_POST["ZDo"];

/*Předchozí vysoká škola*/
$PSkola=$_POST["PSkola"];
$PFakulta=$_POST["PFakulta"];
$PProgram=$_POST["PProgram"];
$PObor=$_POST["PObor"];
$POd=$_POST["POd"];
$PDo=$_POST["PDo"];
$PTitul=$_POST["PTitul"];

/**************************************/
/*          Nastavení COOKIE          */
/**************************************/
/*Úvod*/
setcookie("AkadRok",$AkadRok);
setcookie("Program",$Program);
setcookie("Forma",$Forma);
setcookie("Jazyk",$Jazyk);

/*Vysoká škola*/
setcookie("VSkola",$VSkola);
setcookie("VFakulta",$VFakulta);
setcookie("VProgram",$VProgram);
setcookie("VOborA",$VOborA);
setcookie("VOborB",$VOborB);
setcookie("VOborC",$VOborC);

/*Osobní údaje*/
setcookie("Jmeno",$Jmeno);
setcookie("Prijmeni",$Prijmeni);
setcookie("Rodne",$Rodne);
setcookie("Tituly",$Tituly);
setcookie("Pohlavi",$Pohlavi);
setcookie("StatPris",$StatniPris);

/*Narození*/
setcookie("DenNar",$DenNar);
setcookie("MesicNar",$MesicNar);
setcookie("RokNar",$RokNar);
setcookie("MistoNar",$MistoNar);
setcookie("OkresNar",$OkresNar);
setcookie("CisloOP",$CisloOP);
setcookie("RCislo",$RCislo);
setcookie("CisloP",$CisloP);

/*Adresa trvalého bydliště*/
setcookie("TUlice",$TUlice);
setcookie("TCislo",$TCislo);
setcookie("TCast",$TCast);
setcookie("TObec",$TObec);
setcookie("TOkres",$TOkres);
setcookie("TPSC",$TPSC);
setcookie("TTel",$TTel);
setcookie("TPosta",$TPosta);
setcookie("TStat",$TStat);

/*Kontaktní adresa*/
setcookie("KUlice",$KUlice);
setcookie("KCislo",$KCislo);
setcookie("KCast",$KCast);
setcookie("KObec",$KObec);
setcookie("KOkres",$KOkres);
setcookie("KPSC",$KPSC);
setcookie("KTel",$KTel);
setcookie("KPosta",$KPosta);
setcookie("KStat",$KStat);

/*Střední škola*/
setcookie("SNazev",$SNazev);
setcookie("SAdresa",$SAdresa);
setcookie("SJObor",$SObor);
setcookie("SJKOV",$SKOV);
setcookie("SKObor",$SObor);
setcookie("SKKOV",$SKOV);
setcookie("SIZO",$SIZO);
setcookie("SRokMat",$SRokMat);

/*Uchazeč se hlásí*/
setcookie("Odkud",$Odkud);

/*Prospěch*/
for($i=1;$i<=27;$i++){
setcookie("Predmet".$i,${"Predmet".$i});
for($j=1;$j<=6;$j++){
setcookie("Predmet".$i."Rocnik".$j,${"Predmet".$i."Rocnik".$j});
}}

/*Zájmová činnost*/
setcookie("Zajmy",$Zajmy);

/*Průběh zaměstnání*/
setcookie("Zamestnavatel",$Zamestnavatel);
setcookie("Zarazeni",$Zarazeni);
setcookie("ZOd",$ZOd);
setcookie("ZDo",$ZDo);

/*Předchozí vysoká škola*/
setcookie("PSkola",$PSkola);
setcookie("PFakulta",$PFakulta);
setcookie("PProgram",$PProgram);
setcookie("PObor",$PObor);
setcookie("POd",$POd);
setcookie("PDo",$PDo);
setcookie("PTitul",$PTitul);

/**************************************/
/*          Zápis do souboru          */
/**************************************/

}
?>