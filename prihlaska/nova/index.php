<?php
/*                                       */
/* \  /   _  _    |_ _/   _ _  _ | . _ _ */
/*  \/ \/|_)| )|_||_(_|  (_(_)(_)|(|(-_) */
/*     / |                               */
ini_set("session.cookie_httponly","1");
session_start();
if(!isset($_COOKIE["Cookie"])){
if(!isset($_GET["Cookie"])){
setcookie("Cookie","1");
$_SESSION["c"]="?Cookie";
if(empty($_SESSION["Kam"])){
$_SESSION["Kam"]=$_SESSION['c'];
}
header("Location: /prihlaska/nova/{$_SESSION['Kam']}");
}else{
<<<<<<< HEAD
$_SESSION["c"]="?".session_id();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}}else{
setcookie("Co","To",time()+60*60);
header("Location: ./?Cookie=true{$_SESSION['Kam']}");
}

/*  __                         */
/* (_ |_ _ _/ _ |  _    _/ _ / */
/* __)|_| (_|| )|((_)\/(_|| )| */
/*                             */
$_SESSION["PoleStran"]=array(
array(1,"Uvod","Úvod"),
array(2,"VysokaSkola","Vysoká škola"),
array(3,"OsobniUdaje","Osobní údaje"),
array(4,"Narozeni","Narození"),
array(5,"AdresaTrvalehoBydliste","Adresa trvalého bydliště"),
array(6,"KontaktniAdresa","Kontaktní adresa"),
array(7,"StredniSkola","Střední škola"),
array(8,"UchazecSeHlasi","Uchazeč se hlásí"),
array(9,"ZajmovaCinnost","Zájmová činnost"),
array(10,"PrubehZamestnani","Průběh zaměstnání"),
array(11,"PredchoziVysokaSkola","Předchozí vysoká škola"),
array(12,"Prospech","Prospěch"),
array(13,"Kontrola","Kontrola")
);
=======
=======
}else{
$_SESSION["c"]="?Cookie";
>>>>>>> c809163... Oprava bugu
}}
>>>>>>> 2a4b6df... Navigace
=======
=======
$_SESSION["c"]="?".htmlspecialchars(SID);
>>>>>>> c9fb372... Oprava předávání SID
}}else{
$_SESSION["c"]="?Cookie";
}
>>>>>>> 903a586... Oprava bugu, výmaz kontroly (je v historii)
?>
<!Doctype Html>
<Html Lang="Cs">
<Head>
<Meta Charset="Utf-8">
<Meta Name="Application-name" Content="Přihláška na VŠ">
<Meta Name="Author" Content="Pavel Dvořák, 8.O">
<Meta Name="Description" Content="Online přihláška ke studiu na vysoké škole vytvořená ke zjednodušení vyplňování, tisku a následném zasílání">
<Meta Name="Keywords" Content="přihláška,VŠ,formuláře,PHP,vysoké školy">
<Meta Name="Robots" Content="Follow,index">
<Meta Name="Viewport" Content="width=device-width">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Rel="Stylesheet" Href="/aplikace/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Style Type="Text/css">
Body{Background-color:#FFBF00;Color:#242424;Font-family:Ubuntu,"Open Sans",sans-serif;Margin:0}
A{Color:#242424;Text-decoration:none}
Button{Border:0;Cursor:pointer;Font-size:1em;Margin:1em 0;Padding:0.5em 2em;Text-transform:uppercase}
A:hover,A:active,Button:hover,Button:active{Text-shadow:0 0 0.5em}
Input:not([Type="Radio"]),Textarea{Border:1px solid silver;Border-radius:0.25em;Box-shadow:inset 0 1px 1px rgba(0,0,0,0.1);Padding:0.5em}
Input:not([Type="Radio"]){Width:18em}
.Znamka{Width:1em !important}
.Kratky{Width:6em !important}
.Pulka{Width:9em !important}
Textarea{Width:95%}
Label:before,Label:after{Content:"\A";White-space:pre}
Input+Label:before{Content:""}

Header,Footer{Background-color:#FFBF00;Margin-bottom:100%;Z-index:1}
Header Button,Footer Button{Background-color:#242424;Border-radius:0.25em;Color:#FFBF00}
Nav Button,Form Button[Name="Zpet[Kam]"]{Background-color:white;Color:#242424}
Form Button[Name="Zpet[Kam]"]{Position:absolute;Right:100%}
Fieldset{Background-color:white;Border:0;Margin:0;Margin-top:100%;Padding:1em}
Fieldset:last-of-type{Margin-bottom:100%}
Form Button{Background-color:#242424;Border-radius:0.25em;Color:white}
Table{Text-align:center}
Th{Vertical-align:top}
Nav:last-of-type Button{Border-radius:8px;Height:8px;Margin:0 1em;Padding:0;Width:8px}

@media (orientation:landscape){
Header,Footer{Padding-left:18%;Padding-right:18%;Width:64%}
Nav{Position:fixed;Text-align:right;Width:18%}
Nav:first-of-type{Top:0;Left:0}
Form{Padding-left:18%;Padding-right:18%;Width:64%}
Nav:last-of-type{Height:13.5em;Margin:auto;Top:0;Bottom:0;Right:0}
}
</Style>
<!--[if lt IE 10]><Script Src="/aplikace/html5shiv.js"></Script><![endif]-->
<Title>Přihláška</Title>
</Head>
<Body>
<Header Id="Vchod">
<H1><I Class="icon-sheet icon3x"></I><Br>Přihláška</H1>
<Input Form="Formular" Name="Dale[Cookie]" Type="Hidden" Value="1">
<Button Form="Formular" Name="Dale[Kam]" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Uvod">Vyplnit</Button>
</Header>



<Nav>
<Input Form="Formular" Name="Ulozit[Cookie]" Type="Hidden" Value="30">
<Input Form="Formular" Name="Ulozit[Email]" Type="Hidden" Value="ulozeno">
<Button Form="Formular" Name="Ulozit[Kam]" Type="Submit" Value="ulozeno.php<?php echo $_SESSION["c"]; ?>">Uložit</Button><Br>
<Input Form="Formular" Name="ElPrijat" Type="Hidden" Value="ano">
<Input Form="Formular" Name="Odeslat[Databaze]" Type="Hidden" Value="true">
<Input Form="Formular" Name="Odeslat[Soubor]" Type="Hidden" Value="true">
<Input Form="Formular" Name="Odeslat[Email]" Type="Hidden" Value="odeslano">
<Button Form="Formular" Name="Odeslat[Kam]" Type="Submit" Value="odeslano.php<?php echo $_SESSION["c"]; ?>">Odeslat</Button>
</Nav>



<Form Action="zpracovani.php<?php echo $_SESSION["c"]; ?>" Id="Formular" Method="Post">
<Fieldset Id="Uvod">
<H1>Úvod</H1>
<Label For="AkadRok">Akademický rok</Label>
<Input Id="AkadRok" Name="AkadRok" Tabindex="1" Type="Text" Value="<?php echo !empty($_SESSION['AkadRok'])?$_SESSION['AkadRok']:idate("Y")."/".(idate("Y")+1); ?>">
<Br>
<Label>Studijní program</Label>
<Input Id="bakalářský" Name="Program" Tabindex="2" Type="Radio" Value="bakalářský"<?php echo (!empty($_SESSION['Program'])&&$_SESSION['Program']=='bakalářský')?' Checked':''; ?>>
<Label For="bakalářský">bakalářský</Label>
<Input Id="magisterský" Name="Program" Tabindex="3" Type="Radio" Value="magisterský"<?php echo (!empty($_SESSION['Program'])&&$_SESSION['Program']=='magisterský')?' Checked':''; ?>>
<Label For="magisterský">magisterský</Label>
<Label>Forma studia</Label>
<Input Id="prezenční" Name="Forma" Tabindex="4" Type="Radio" Value="prezenční"<?php echo (!empty($_SESSION['Forma'])&&$_SESSION['Forma']=='prezenční')?' Checked':''; ?>>
<Label For="prezenční">prezenční</Label>
<Input Id="kombinované" Name="Forma" Tabindex="5" Type="Radio" Value="kombinované"<?php echo (!empty($_SESSION['Forma'])&&$_SESSION['Forma']=='kombinované')?' Checked':''; ?>>
<Label For="kombinované">kombinovaná</Label>
<Input Id="distanční" Name="Forma" Tabindex="6" Type="Radio" Value="distanční"<?php echo (!empty($_SESSION['Forma'])&&$_SESSION['Forma']=='distanční')?' Checked':''; ?>>
<Label For="distanční">distanční</Label>
<Label For="Jazyk">Zvolený jazyk</Label>
<Input Id="Jazyk" Name="Jazyk" Tabindex="7" Type="Text" Value="<?php echo $_SESSION['Jazyk']; ?>">
<Br>
<<<<<<< HEAD:nova/index.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<Button Name="Prejit[Kam]" Tabindex="8" Type="Submit" Value="./#VysokaSkola">Dále</Button>
=======
<Button Name="Prejit[Kam]" Tabindex="8" Type="Submit" Value="nova/#VysokaSkola">Dále</Button>
>>>>>>> d43a8f2... Závěrečné opravy navigace
=======
<Button Name="Prejit[Kam]" Tabindex="8" Type="Submit" Value="nova/<?php echo $_SESSION["c"]; ?>#VysokaSkola">Dále</Button>
>>>>>>> 2a4b6df... Navigace
=======
<Button Name="Dale[Kam]" Tabindex="8" Type="Submit" Value="nova/<?php echo $_SESSION["c"]; ?>#VysokaSkola">Dále</Button>
>>>>>>> 6640e42... Tlačítko zpět IV
</Section>
=======
<Button Name="Zpet[Kam]" Tabindex="8" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="7" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#VysokaSkola">Dále</Button>
</Fieldset>
>>>>>>> 94d5719... Komplet přepracování celé struktury (fuj) 1/x:prihlaska/nova/index.php

<Fieldset Id="VysokaSkola">
<H1>Vysoká škola</H1>
<Label For="VSkola">Vysoká škola</Label>
<Input Id="VSkola" Name="VSkola" Tabindex="9" Type="Text" Value="<?php echo !empty($_SESSION['VSkola'])?$_SESSION['VSkola']:''; ?>">
<Br>
<Label For="VFakulta">Fakulta</Label>
<Input Id="VFakulta" Name="VFakulta" Tabindex="10" Type="Text" Value="<?php echo !empty($_SESSION['VFakulta'])?$_SESSION['VFakulta']:''; ?>">
<Br>
<Label For="VProgram">Studijní program</Label>
<Input Id="VProgram" Name="VProgram" Tabindex="11" Type="Text" Value="<?php echo !empty($_SESSION['VProgram'])?$_SESSION['VProgram']:''; ?>">
<Br>
<Label>Studijní obory</Label>
<Input Id="VOborA" Name="VOborA" Tabindex="12" Type="Text" Value="<?php echo !empty($_SESSION['VOborA'])?$_SESSION['VOborA']:''; ?>">
<Br>
<Input Id="VOborB" Name="VOborB" Tabindex="13" Type="Text" Value="<?php echo !empty($_SESSION['VOborB'])?$_SESSION['VOborB']:''; ?>">
<Br>
<Input Id="VOborC" Name="VOborC" Tabindex="14" Type="Text" Value="<?php echo !empty($_SESSION['VOborC'])?$_SESSION['VOborC']:''; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="16" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Uvod">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="15" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#OsobniUdaje">Dále</Button>
</Fieldset>

<Fieldset Id="OsobniUdaje">
<H1>Osobní údaje</H1>
<Label For="Jmeno">Jméno</Label>
<Input Id="Jmeno" Name="Jmeno" Tabindex="17" Type="Text" Value="<?php echo !empty($_SESSION['Jmeno'])?$_SESSION['Jmeno']:''; ?>">
<Br>
<Label For="Prijmeni">Příjmení</Label>
<Input Id="Prijmeni" Name="Prijmeni" Tabindex="18" Type="Text" Value="<?php echo !empty($_SESSION['Prijmeni'])?$_SESSION['Prijmeni']:''; ?>">
<Br>
<Label For="Rodne">Rodné</Label>
<Input Id="Rodne" Name="Rodne" Tabindex="19" Type="Text" Value="<?php echo !empty($_SESSION['Rodne'])?$_SESSION['Rodne']:''; ?>">
<Br>
<Label For="Tituly">Tituly</Label>
<Input Id="Tituly" Name="Tituly" Tabindex="20" Type="Text" Value="<?php echo !empty($_SESSION['Tituly'])?$_SESSION['Tituly']:''; ?>">
<Br>
<Label>Pohlaví</Label>
<Input Id="muz" Name="Pohlavi" Tabindex="21" Type="Radio" Value="muž"<?php echo (!empty($_SESSION['Pohlavi'])&&$_SESSION['Pohlavi']=='muž')?' Checked':''; ?>>
<Label For="muz">muž</Label>
<Input Id="zena" Name="Pohlavi" Tabindex="22" Type="Radio" Value="žena"<?php echo (!empty($_SESSION['Pohlavi'])&&$_SESSION['Pohlavi']=='žena')?' Checked':''; ?>>
<Label For="zena">žena</Label>
<Label For="StatniPris">Státní příslušnost</Label>
<Input Id="StatniPris" Name="StatniPris" Tabindex="23" Type="Text" Value="<?php echo !empty($_SESSION['StatniPris'])?$_SESSION['StatniPris']:'Česká republika'; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="25" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#VysokaSkola">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="24" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Narozeni">Dále</Button>
</Fieldset>

<Fieldset Id="Narozeni">
<H1>Narození</H1>
<Label For="DatumNar">Datum narození</Label>
<Input Id="DatumNar" Name="DatumNar" Tabindex="26" Type="Date" Value="<?php echo !empty($_SESSION['DatumNar'])?$_SESSION['DatumNar']:''; ?>">
<Br>
<Label For="MistoNar">Místo narození</Label>
<Input Id="MistoNar" Name="MistoNar" Tabindex="27" Type="Text" Value="<?php echo !empty($_SESSION['MistoNar'])?$_SESSION['MistoNar']:''; ?>">
<Br>
<Label For="OkresNar">Okres</Label>
<Input Id="OkresNar" Name="OkresNar" Tabindex="28" Type="Text" Value="<?php echo !empty($_SESSION['OkresNar'])?$_SESSION['OkresNar']:''; ?>">
<Br>
<Label For="CisloOP">Číslo občanského průkazu</Label>
<Input Id="CisloOP" Name="CisloOP" Tabindex="29" Type="Number" Value="<?php echo !empty($_SESSION['CisloOP'])?$_SESSION['CisloOP']:''; ?>">
<Br>
<Label For="RCislo">Rodné číslo</Label>
<Input Id="RCislo" Name="RCislo" Tabindex="30" Type="Number" Value="<?php echo !empty($_SESSION['RCislo'])?$_SESSION['RCislo']:''; ?>">
<Br>
<Label For="CisloP">Číslo pasu (u cizinců)</Label>
<Input Id="CisloP" Name="CisloP" Tabindex="31" Type="Number" Value="<?php echo !empty($_SESSION['CisloP'])?$_SESSION['CisloP']:''; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="33" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#OsobniUdaje">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="32" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#AdresaTrvalehoBydliste">Dále</Button>
</Fieldset>

<Fieldset Id="AdresaTrvalehoBydliste">
<H1>Adresa trvalého bydliště</H1>
<Label For="TUlice">Ulice a číslo domu</Label>
<Input Id="TUlice" Name="TUlice" Tabindex="34" Type="Text" Value="<?php echo !empty($_SESSION['TUlice'])?$_SESSION['TUlice']:''; ?>">
<Input Class="Kratky" Id="TCislo" Name="TCislo" Tabindex="35" Type="Number" Value="<?php echo !empty($_SESSION['TCislo'])?$_SESSION['TCislo']:''; ?>">
<Br>
<Label For="TCast">Část obce</Label>
<Input Id="TCast" Name="TCast" Tabindex="36" Type="Text" Value="<?php echo !empty($_SESSION['TCast'])?$_SESSION['TCast']:''; ?>">
<Br>
<Label For="TObec">Obec a PSČ</Label>
<Input Id="TObec" Name="TObec" Tabindex="37" Type="Text" Value="<?php echo !empty($_SESSION['TObec'])?$_SESSION['TObec']:''; ?>">
<Input Class="Kratky" Id="TPSC" Name="TPSC" Tabindex="38" Type="Number" Value="<?php echo !empty($_SESSION['TPSC'])?$_SESSION['TPSC']:''; ?>">
<Br>
<Label For="TPosta">Pošta</Label>
<Input Id="TPosta" Name="TPosta" Tabindex="39" Type="Text" Value="<?php echo !empty($_SESSION['TPosta'])?$_SESSION['TPosta']:''; ?>">
<Br>
<Label For="TOkres">Okres</Label>
<Input Id="TOkres" Name="TOkres" Tabindex="40" Type="Text" Value="<?php echo !empty($_SESSION['TOkres'])?$_SESSION['TOkres']:''; ?>">
<Br>
<Label For="TStat">Stát</Label>
<Input Id="TStat" Name="TStat" Tabindex="41" Type="Text" Value="<?php echo !empty($_SESSION['TStat'])?$_SESSION['TStat']:''; ?>">
<Br>
<Label For="TTel">Telefon</Label>
<Input Id="TTel" Name="TTel" Tabindex="42" Type="Tel" Value="<?php echo !empty($_SESSION['TTel'])?$_SESSION['TTel']:''; ?>">
<Br>
<Label For="TEmail">Email</Label>
<Input Id="TEmail" Name="TEmail" Tabindex="43" Type="Email" Value="<?php echo !empty($_SESSION['TEmail'])?$_SESSION['TEmail']:''; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="45" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Narozeni">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="44" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#KontaktniAdresa">Dále</Button>
</Fieldset>

<Fieldset Id="KontaktniAdresa">
<H1>Kontaktní adresa</H1>
<Label For="KUlice">Ulice a číslo domu</Label>
<Input Id="KUlice" Name="KUlice" Tabindex="46" Type="Text" Value="<?php echo !empty($_SESSION['KUlice'])?$_SESSION['KUlice']:''; ?>">
<Input Class="Kratky" Id="KCislo" Name="KCislo" Tabindex="47" Type="Number" Value="<?php echo !empty($_SESSION['KCislo'])?$_SESSION['KCislo']:''; ?>">
<Br>
<Label For="KCast">Část obce</Label>
<Input Id="KCast" Name="KCast" Tabindex="48" Type="Text" Value="<?php echo !empty($_SESSION['KCast'])?$_SESSION['KCast']:''; ?>">
<Br>
<Label For="KObec">Obec a PSČ</Label>
<Input Id="KObec" Name="KObec" Tabindex="49" Type="Text" Value="<?php echo !empty($_SESSION['KObec'])?$_SESSION['KObec']:''; ?>">
<Input Class="Kratky" Id="KPSC" Name="KPSC" Tabindex="50" Type="Number" Value="<?php echo !empty($_SESSION['KPSC'])?$_SESSION['KPSC']:''; ?>">
<Br>
<Label For="KPosta">Pošta</Label>
<Input Id="KPosta" Name="KPosta" Tabindex="51" Type="Text" Value="<?php echo !empty($_SESSION['KPosta'])?$_SESSION['KPosta']:''; ?>">
<Br>
<Label For="KOkres">Okres</Label>
<Input Id="KOkres" Name="KOkres" Tabindex="52" Type="Text" Value="<?php echo !empty($_SESSION['KOkres'])?$_SESSION['KOkres']:''; ?>">
<Br>
<Label For="KStat">Stát</Label>
<Input Id="KStat" Name="KStat" Tabindex="53" Type="Text" Value="<?php echo !empty($_SESSION['KStat'])?$_SESSION['KStat']:''; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="55" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#AdresaTrvalehoBydliste">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="54" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#StredniSkola">Dále</Button>
</Fieldset>

<Fieldset Id="StredniSkola">
<H1>Střední škola</H1>
<Label For="SSkola">Název</Label>
<Input Id="SSkola" Name="SSkola" Tabindex="56" Type="Text" Value="<?php echo !empty($_SESSION['SSkola'])?$_SESSION['SSkola']:''; ?>">
<Br>
<Label For="SAdresa">Adresa</Label>
<Input Id="SAdresa" Name="SAdresa" Tabindex="57" Type="Text" Value="<?php echo !empty($_SESSION['SAdresa'])?$_SESSION['SAdresa']:''; ?>">
<Br>
<Label For="SObor">Obor</Label>
<Input Id="SObor" Name="SObor" Tabindex="58" Type="Text" Value="<?php echo !empty($_SESSION['SObor'])?$_SESSION['SObor']:''; ?>">
<Br>
<Label For="SKKOV">KKOV</Label>
<Input Id="SKKOV" Name="SKKOV" Tabindex="59" Type="Text" Value="<?php echo !empty($_SESSION['SKKOV'])?$_SESSION['SKKOV']:''; ?>">
<Br>
<Label For="SIZO">IZO</Label>
<Input Id="SIZO" Name="SIZO" Tabindex="60" Type="Number" Value="<?php echo !empty($_SESSION['SIZO'])?$_SESSION['SIZO']:''; ?>">
<Br>
<Label For="SRokMat">Rok maturitní zkoušky</Label>
<Input Class="Kratky" Id="SRokMat" Name="SRokMat" Tabindex="61" Type="Number" Value="<?php echo !empty($_SESSION['SRokMat'])?$_SESSION['SRokMat']:idate("Y"); ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="63" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#KontaktniAdresa">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="62" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#UchazecSeHlasi">Dále</Button>
</Fieldset>

<Fieldset Id="UchazecSeHlasi">
<H1>Uchazeč se hlásí</H1>
<Input Id="ZS" Name="Odkud" Tabindex="64" Type="Radio" Value="ZŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='ZŠ')?' Checked':''; ?>>
<Label For="ZS">ze ZŠ</Label>
<Input Id="SS" Name="Odkud" Tabindex="65" Type="Radio" Value="SŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='SŠ')?' Checked':''; ?>>
<Label For="SS">ze SŠ</Label>
<Input Id="VOS" Name="Odkud" Tabindex="66" Type="Radio" Value="VOŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='VOŠ')?' Checked':''; ?>>
<Label For="VOS">z VOŠ</Label>
<Input Id="VS" Name="Odkud" Tabindex="67" Type="Radio" Value="VŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='VŠ')?' Checked':''; ?>>
<Label For="VS">z VŠ</Label>
<Input Id="DZS" Name="Odkud" Tabindex="68" Type="Radio" Value="DZS"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='DZS')?' Checked':''; ?>>
<Label For="DZS">přes DZS</Label>
<Input Id="Zam" Name="Odkud" Tabindex="69" Type="Radio" Value="zaměstnání"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='zaměstnání')?' Checked':''; ?>>
<Label For="Zam">ze zaměstnání</Label>
<Input Id="Dom" Name="Odkud" Tabindex="70" Type="Radio" Value="domácnost"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='domácnost')?' Checked':''; ?>>
<Label For="Dom">z domácnosti</Label>
<Input Id="Voj" Name="Odkud" Tabindex="71" Type="Radio" Value="vojenská služba"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='vojenská služba')?' Checked':''; ?>>
<Label For="Voj">z vojenské služby</Label>
<Input Id="Odj" Name="Odkud" Tabindex="72" Type="Radio" Value="jiné"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='jiné')?' Checked':''; ?>>
<Label For="Odj">odjinud</Label>
<Button Name="Zpet[Kam]" Tabindex="74" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#StredniSkola">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="73" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#ZajmovaCinnost">Dále</Button>
</Fieldset>

<Fieldset Id="ZajmovaCinnost">
<H1>Zájmová činnost</H1>
<Label For="Zajmy">Zájmy, úspěchy</Label>
<Textarea Id="Zajmy" Name="Zajmy" Tabindex="75">
<?php echo !empty($_SESSION['Zajmy'])?$_SESSION['Zajmy']:''; ?>
</Textarea>
<Br>
<Button Name="Zpet[Kam]" Tabindex="77" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#UchazecSeHlasi">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="76" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PrubehZamestnani">Dále</Button>
</Fieldset>

<Fieldset Id="PrubehZamestnani">
<H1>Průběh zaměstnání</H1>
<Label For="Zamestnavatel">Zaměstnavatel</Label>
<Input Id="Zamestnavatel" Name="Zamestnavatel" Tabindex="78" Type="Text" Value="<?php echo !empty($_SESSION['Zamestnavatel'])?$_SESSION['Zamestnavatel']:''; ?>">
<Br>
<Label For="Zarazeni">Pracovní zařazení</Label>
<Input Id="Zarazeni" Name="Zarazeni" Tabindex="79" Type="Text" Value="<?php echo !empty($_SESSION['Zarazeni'])?$_SESSION['Zarazeni']:''; ?>">
<Br>
<Label For="ZOd">Od - do</Label>
<Input Class="Pulka" Id="ZOd" Name="ZOd" Tabindex="80" Type="Date" Value="<?php echo !empty($_SESSION['ZOd'])?$_SESSION['ZOd']:''; ?>">
<Input Class="Pulka" Id="ZDo" Name="ZDo" Tabindex="81" Type="Date" Value="<?php echo !empty($_SESSION['ZDo'])?$_SESSION['ZDo']:''; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="83" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#ZajmovaCinnost">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="82" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PredchoziVysokaSkola">Dále</Button>
</Fieldset>

<Fieldset Id="PredchoziVysokaSkola">
<H1>Předchozí vysoká škola</H1>
<Label For="PSkola">Vysoká škola</Label>
<Input Id="PSkola" Name="PSkola" Tabindex="84" Type="Text" Value="<?php echo !empty($_SESSION['PSkola'])?$_SESSION['PSkola']:''; ?>">
<Br>
<Label For="PFakulta">Fakulta</Label>
<Input Id="PFakulta" Name="PFakulta" Tabindex="85" Type="Text" Value="<?php echo !empty($_SESSION['PFakulta'])?$_SESSION['PFakulta']:''; ?>">
<Br>
<Label For="PProgram">Studijní program</Label>
<Input Id="PProgram" Name="PProgram" Tabindex="86" Type="Text" Value="<?php echo !empty($_SESSION['PProgram'])?$_SESSION['PProgram']:''; ?>">
<Br>
<Label For="PObor">Studijní obor</Label>
<Input Id="PObor" Name="PObor" Tabindex="87" Type="Text" Value="<?php echo !empty($_SESSION['PObor'])?$_SESSION['PObor']:''; ?>">
<Br>
<Label For="POd">Od - do</Label>
<Input Class="Pulka" Id="POd" Name="POd" Tabindex="88" Type="Date" Value="<?php echo !empty($_SESSION['POd'])?$_SESSION['POd']:''; ?>">
<Input Class="Pulka" Id="PDo" Name="PDo" Tabindex="89" Type="Date" Value="<?php echo !empty($_SESSION['PDo'])?$_SESSION['PDo']:''; ?>">
<Br>
<Label For="PTitul">Udělený titul</Label>
<Input Id="PTitul" Name="PTitul" Tabindex="90" Type="Text" Value="<?php echo !empty($_SESSION['PTitul'])?$_SESSION['PTitul']:''; ?>">
<Br>
<Button Name="Zpet[Kam]" Tabindex="92" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PrubehZamestnani">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="91" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Prospech">Dále</Button>
</Fieldset>

<Fieldset Id="Prospech">
<H1>Prospěch</H1>
<Table>
<Tr><Th Rowspan="2">Předmět</Th><Th Colspan="5">Ročník</Th><Th Rowspan="2">Maturita</Th></Tr>
<Tr><Th>I</Th><Th>II</Th><Th>III</Th><Th>IV</Th><Th>V</Th></Tr>
<?php
$Pole=array(
"<Td><Input Class='",
"' Name='",
"' Tabindex='",
"' Type='Text' Value='",
"'></Td>"
);
if(!empty($_GET["j"])){
$j=$_GET["j"];
}else{
$j=5;
}
for($i=1;$i<=$j;$i++){
$t=92+(($i-1)*7);
echo "<Tr>"
.$Pole[0].$Pole[1]."Predmet".$i.$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Predmet{$i}"])?$_SESSION["Predmet{$i}"]:"").$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik1".$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Predmet{$i}Rocnik1"])?$_SESSION["Predmet{$i}Rocnik1"]:"").$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik2".$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Predmet{$i}Rocnik2"])?$_SESSION["Predmet{$i}Rocnik2"]:"").$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik3".$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Predmet{$i}Rocnik3"])?$_SESSION["Predmet{$i}Rocnik3"]:"").$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik4".$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Predmet{$i}Rocnik4"])?$_SESSION["Predmet{$i}Rocnik4"]:"").$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik5".$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Predmet{$i}Rocnik5"])?$_SESSION["Predmet{$i}Rocnik5"]:"").$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Maturita".$i.$Pole[2].(++$t).$Pole[3].(!empty($_SESSION["Maturita{$i}"])?$_SESSION["Maturita{$i}"]:"").$Pole[4]
."</Tr>"
.PHP_EOL;
}
?>
<Tr><Td Colspan="7"><A Href="./<?php echo $_SESSION["c"]; ?>&j=<?php echo ++$j; ?>#Prospech" Tabindex="282"><I Class="icon-plus"></I></A></Td></Tr>
</Table>
<Button Name="Zpet[Kam]" Tabindex="284" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PredchoziVysokaSkola">Zpět</Button>
<Br>
<Button Name="Dale[Kam]" Tabindex="283" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Kontrola">Dále</Button>
</Fieldset>
</Form>



<Nav>
<?php
<<<<<<< HEAD:nova/index.php
<<<<<<< HEAD
foreach($_SESSION["PoleStran"] as $Promenna){
=======
/*  __                         */
/* (_ |_ _ _/ _ |  _    _/ _ / */
/* __)|_| (_|| )|((_)\/(_|| )| */
/*                             */
=======
/*  __                                 */
/* |__)    _ |_/|  _    _/  _  _ _     */
/* |   |_|| )|_||((_)\/(-  |||(-| )|_| */
/*                                     */
>>>>>>> 94d5719... Komplet přepracování celé struktury (fuj) 1/x:prihlaska/nova/index.php
$PoleStran=array(
"Vchod",
"Uvod",
"VysokaSkola",
"OsobniUdaje",
"Narozeni",
"AdresaTrvalehoBydliste",
"KontaktniAdresa",
"StredniSkola",
"UchazecSeHlasi",
"ZajmovaCinnost",
"PrubehZamestnani",
"PredchoziVysokaSkola",
"Prospech",
"Kontrola"
);
<<<<<<< HEAD:nova/index.php
foreach($PoleStran as $Promenna){
>>>>>>> 6d35a35... Drobné opravy
echo "<Button Form='Formular' Name='Prejit[Kam]' Type='Submit' Value='nova/".$_SESSION["c"]."#{$Promenna[1]}'>&nbsp;</Button><Br>".PHP_EOL;
}
=======
foreach($PoleStran as $Promenna):
>>>>>>> 94d5719... Komplet přepracování celé struktury (fuj) 1/x:prihlaska/nova/index.php
?>
<Button Form="Formular" Name="Dale[Kam]" Type="Submit" Value="<?php echo $_SESSION["c"]."#".$Promenna; ?>">&nbsp;</Button><Br>
<?php endforeach; ?>
</Nav>



<Footer Id="Kontrola">
<H1><I Class="icon-sheet icon3x"></I><Br>Kontrola</H1>
<Button Form="Formular" Name="Zpet[Kam]" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Prospech">Zpět</Button>
<Br>
<Button Form="Formular" Name="Odeslat[Kam]" Type="Submit" Value="odeslano.php<?php echo $_SESSION["c"]; ?>">Odeslat</Button>
</Footer>
</Body>
</Html>
