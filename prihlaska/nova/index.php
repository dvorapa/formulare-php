<?php
/*                                       */
/* \  /   _  _    |_ _/   _ _  _ | . _ _ */
/*  \/ \/|_)| )|_||_(_|  (_(_)(_)|(|(-_) */
/*     / |                               */
session_start();
if(!isset($_COOKIE["Cookie"])){
if(!isset($_GET["Cookie"])){
setcookie("Cookie","1");
$_SESSION["c"]="?Cookie";
if(empty($_SESSION["Kam"])){
$_SESSION["Kam"]=$_SESSION["c"];
}
header("Location: /prihlaska/nova/{$_SESSION['Kam']}");
}else{
$_SESSION["c"]="?".htmlspecialchars(SID)."&Cookie";
}}else{
$_SESSION["c"]="?Cookie";
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
<Meta Name="Viewport" Content="width=device-width,user-scalable=no">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Rel="Stylesheet" Href="/aplikace/mfglabs_iconset/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="styly.css">
<!--[if lt IE 10]><Script Src="/aplikace/html5shiv/html5shiv.js"></Script><![endif]-->
<Title>Přihláška</Title>
</Head>
<Body>
<Header Id="Vchod">
<H1><I Class="icon-sheet icon3x"></I><Br>Přihláška</H1>
<Input Form="Formular" Name="Dale[Cookie]" Type="Hidden" Value="1">
<Button Class="Tmavooranzovy" Form="Formular" Name="Dale[Kam]" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Uvod">Vyplnit</Button>
</Header>



<Nav>
<Input Form="Formular" Name="Ulozit[Cookie]" Type="Hidden" Value="30">
<Input Form="Formular" Name="Ulozit[Email]" Type="Hidden" Value="ul">
<Button Class="Belotmavy" Form="Formular" Name="Ulozit[Kam]" Type="Submit" Value="ulozeno.php<?php echo $_SESSION["c"]; ?>">Uložit</Button><Br>
<Input Form="Formular" Name="Odeslat[Databaze]" Type="Hidden" Value="true">
<Input Form="Formular" Name="Odeslat[Soubor]" Type="Hidden" Value="true">
<Input Form="Formular" Name="Odeslat[Email]" Type="Hidden" Value="od">
<Button Class="Belotmavy" Form="Formular" Name="Odeslat[Kam]" Type="Submit" Value="odeslano.php<?php echo $_SESSION["c"]; ?>">Odeslat</Button>
</Nav>



<Form Action="zpracovani.php<?php echo $_SESSION["c"]; ?>" Id="Formular" Method="Post">
<Fieldset Id="Uvod">
<H1>Úvod</H1>
<Label For="AkadRok">Akademický rok (vyžadováno)</Label>
<Input Id="AkadRok" Name="AkadRok" Tabindex="1" Type="Text" Value="<?php echo !empty($_SESSION['AkadRok'])?$_SESSION['AkadRok']:idate("Y")."/".(idate("Y")+1); ?>">
<Br>
<Label>Studijní program (vyžadováno)</Label>
<Input Id="bakalářský" Name="Program" Tabindex="2" Type="Radio" Value="bakalářský"<?php echo ($_SESSION['Program']=='bakalářský')?' Checked':''; ?>>
<Label For="bakalářský">bakalářský</Label>
<Input Id="magisterský" Name="Program" Tabindex="3" Type="Radio" Value="magisterský"<?php echo ($_SESSION['Program']=='magisterský')?' Checked':''; ?>>
<Label For="magisterský">magisterský</Label>
<Label>Forma studia (vyžadováno)</Label>
<Input Id="prezenční" Name="Forma" Tabindex="4" Type="Radio" Value="prezenční"<?php echo ($_SESSION['Forma']=='prezenční')?' Checked':''; ?>>
<Label For="prezenční">prezenční</Label>
<Input Id="kombinované" Name="Forma" Tabindex="5" Type="Radio" Value="kombinované"<?php echo ($_SESSION['Forma']=='kombinované')?' Checked':''; ?>>
<Label For="kombinované">kombinovaná</Label>
<Input Id="distanční" Name="Forma" Tabindex="6" Type="Radio" Value="distanční"<?php echo ($_SESSION['Forma']=='distanční')?' Checked':''; ?>>
<Label For="distanční">distanční</Label>
<Label For="Jazyk">Zvolený jazyk</Label>
<Input Id="Jazyk" Name="Jazyk" Tabindex="7" Type="Text" Value="<?php echo $_SESSION['Jazyk']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="9" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Vchod">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="8" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#VysokaSkola">Dále</Button>
</Fieldset>

<Fieldset Id="VysokaSkola">
<H1>Vysoká škola</H1>
<Label For="VSkola">Vysoká škola (vyžadováno)</Label>
<Input Id="VSkola" Name="VSkola" Tabindex="10" Type="Text" Value="<?php echo $_SESSION['VSkola']; ?>">
<Br>
<Label For="VFakulta">Fakulta (vyžadováno)</Label>
<Input Id="VFakulta" Name="VFakulta" Tabindex="11" Type="Text" Value="<?php echo $_SESSION['VFakulta']; ?>">
<Br>
<Label For="VProgram">Studijní program (vyžadováno)</Label>
<Input Id="VProgram" Name="VProgram" Tabindex="12" Type="Text" Value="<?php echo $_SESSION['VProgram']; ?>">
<Br>
<Label>Studijní obory</Label>
<Input Id="VOborA" Name="VOborA" Tabindex="13" Type="Text" Value="<?php echo $_SESSION['VOborA']; ?>">
<Br>
<Input Id="VOborB" Name="VOborB" Tabindex="14" Type="Text" Value="<?php echo $_SESSION['VOborB']; ?>">
<Br>
<Input Id="VOborC" Name="VOborC" Tabindex="15" Type="Text" Value="<?php echo $_SESSION['VOborC']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="17" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Uvod">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="16" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#OsobniUdaje">Dále</Button>
</Fieldset>

<Fieldset Id="OsobniUdaje">
<H1>Osobní údaje</H1>
<Label For="Jmeno">Jméno (vyžadováno)</Label>
<Input Id="Jmeno" Name="Jmeno" Tabindex="18" Type="Text" Value="<?php echo $_SESSION['Jmeno']; ?>">
<Br>
<Label For="Prijmeni">Příjmení (vyžadováno)</Label>
<Input Id="Prijmeni" Name="Prijmeni" Tabindex="19" Type="Text" Value="<?php echo $_SESSION['Prijmeni']; ?>">
<Br>
<Label For="Rodne">Rodné</Label>
<Input Id="Rodne" Name="Rodne" Tabindex="20" Type="Text" Value="<?php echo $_SESSION['Rodne']; ?>">
<Br>
<Label For="Tituly">Tituly</Label>
<Input Id="Tituly" Name="Tituly" Tabindex="21" Type="Text" Value="<?php echo $_SESSION['Tituly']; ?>">
<Br>
<Label>Pohlaví (vyžadováno)</Label>
<Input Id="muz" Name="Pohlavi" Tabindex="22" Type="Radio" Value="muž"<?php echo ($_SESSION['Pohlavi']=='muž')?' Checked':''; ?>>
<Label For="muz">muž</Label>
<Input Id="zena" Name="Pohlavi" Tabindex="23" Type="Radio" Value="žena"<?php echo ($_SESSION['Pohlavi']=='žena')?' Checked':''; ?>>
<Label For="zena">žena</Label>
<Label For="StatniPris">Státní příslušnost (vyžadováno)</Label>
<Input Id="StatniPris" Name="StatniPris" Tabindex="24" Type="Text" Value="<?php echo $_SESSION['StatniPris']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="26" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#VysokaSkola">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="25" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Narozeni">Dále</Button>
</Fieldset>

<Fieldset Id="Narozeni">
<H1>Narození</H1>
<Label For="DatumNar">Datum narození (vyžadováno)</Label>
<Input Id="DatumNar" Name="DatumNar" Tabindex="27" Type="Date" Value="<?php echo $_SESSION['DatumNar']; ?>">
<Br>
<Label For="MistoNar">Místo narození (vyžadováno)</Label>
<Input Id="MistoNar" Name="MistoNar" Tabindex="28" Type="Text" Value="<?php echo $_SESSION['MistoNar']; ?>">
<Br>
<Label For="OkresNar">Okres (vyžadováno)</Label>
<Input Id="OkresNar" Name="OkresNar" Tabindex="29" Type="Text" Value="<?php echo $_SESSION['OkresNar']; ?>">
<Br>
<Label For="CisloOP">Číslo občanského průkazu (vyžadováno)</Label>
<Input Id="CisloOP" Name="CisloOP" Tabindex="30" Type="Number" Value="<?php echo $_SESSION['CisloOP']; ?>">
<Br>
<Label For="RCislo">Rodné číslo (vyžadováno)</Label>
<Input Id="RCislo" Name="RCislo" Tabindex="31" Type="Number" Value="<?php echo $_SESSION['RCislo']; ?>">
<Br>
<Label For="CisloP">Číslo pasu (u cizinců)</Label>
<Input Id="CisloP" Name="CisloP" Tabindex="32" Type="Number" Value="<?php echo $_SESSION['CisloP']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="34" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#OsobniUdaje">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="33" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#AdresaTrvalehoBydliste">Dále</Button>
</Fieldset>

<Fieldset Id="AdresaTrvalehoBydliste">
<H1>Adresa trvalého bydliště</H1>
<Label For="TUlice">Ulice a číslo domu (vyžadováno)</Label>
<Input Id="TUlice" Name="TUlice" Tabindex="35" Type="Text" Value="<?php echo $_SESSION['TUlice']; ?>">
<Input Class="Kratky" Id="TCislo" Name="TCislo" Tabindex="36" Type="Text" Value="<?php echo $_SESSION['TCislo']; ?>">
<Br>
<Label For="TCast">Část obce</Label>
<Input Id="TCast" Name="TCast" Tabindex="37" Type="Text" Value="<?php echo $_SESSION['TCast']; ?>">
<Br>
<Label For="TObec">Obec a PSČ (vyžadováno)</Label>
<Input Id="TObec" Name="TObec" Tabindex="38" Type="Text" Value="<?php echo $_SESSION['TObec']; ?>">
<Input Class="Kratky" Id="TPSC" Name="TPSC" Tabindex="39" Type="Number" Value="<?php echo $_SESSION['TPSC']; ?>">
<Br>
<Label For="TOkres">Okres (vyžadováno)</Label>
<Input Id="TOkres" Name="TOkres" Tabindex="41" Type="Text" Value="<?php echo $_SESSION['TOkres']; ?>">
<Br>
<Label For="TStat">Stát (vyžadováno)</Label>
<Input Id="TStat" Name="TStat" Tabindex="42" Type="Text" Value="<?php echo $_SESSION['TStat']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="44" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Narozeni">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="43" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#KontaktniAdresa">Dále</Button>
</Fieldset>

<Fieldset Id="KontaktniAdresa">
<H1>Kontaktní adresa</H1>
<Label For="KUlice">Ulice a číslo domu</Label>
<Input Id="KUlice" Name="KUlice" Tabindex="45" Type="Text" Value="<?php echo $_SESSION['KUlice']; ?>">
<Input Class="Kratky" Id="KCislo" Name="KCislo" Tabindex="46" Type="Text" Value="<?php echo $_SESSION['KCislo']; ?>">
<Br>
<Label For="KCast">Část obce</Label>
<Input Id="KCast" Name="KCast" Tabindex="47" Type="Text" Value="<?php echo $_SESSION['KCast']; ?>">
<Br>
<Label For="KObec">Obec a PSČ</Label>
<Input Id="KObec" Name="KObec" Tabindex="48" Type="Text" Value="<?php echo $_SESSION['KObec']; ?>">
<Input Class="Kratky" Id="KPSC" Name="KPSC" Tabindex="49" Type="Number" Value="<?php echo $_SESSION['KPSC']; ?>">
<Br>
<Label For="KOkres">Okres</Label>
<Input Id="KOkres" Name="KOkres" Tabindex="51" Type="Text" Value="<?php echo $_SESSION['KOkres']; ?>">
<Br>
<Label For="KStat">Stát</Label>
<Input Id="KStat" Name="KStat" Tabindex="52" Type="Text" Value="<?php echo $_SESSION['KStat']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="54" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#AdresaTrvalehoBydliste">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="53" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#StredniSkola">Dále</Button>
</Fieldset>

<Fieldset Id="StredniSkola">
<H1>Střední škola</H1>
<Label For="SSkola">Název (vyžadováno)</Label>
<Input Id="SSkola" Name="SSkola" Tabindex="55" Type="Text" Value="<?php echo $_SESSION['SSkola']; ?>">
<Br>
<Label For="SAdresa">Adresa (vyžadováno)</Label>
<Input Id="SAdresa" Name="SAdresa" Tabindex="56" Type="Text" Value="<?php echo $_SESSION['SAdresa']; ?>">
<Br>
<Label For="SObor">Obor (vyžadováno)</Label>
<Input Id="SObor" Name="SObor" Tabindex="57" Type="Text" Value="<?php echo $_SESSION['SObor']; ?>">
<Br>
<Label For="SKKOV">KKOV (vyžadováno)</Label>
<Input Id="SKKOV" Name="SKKOV" Tabindex="58" Type="Text" Value="<?php echo $_SESSION['SKKOV']; ?>">
<Br>
<Label For="SIZO">IZO (vyžadováno)</Label>
<Input Id="SIZO" Name="SIZO" Tabindex="59" Type="Text" Value="<?php echo $_SESSION['SIZO']; ?>">
<Br>
<Label For="SRokMat">Rok maturitní zkoušky (vyžadováno)</Label>
<Input Class="Kratky" Id="SRokMat" Name="SRokMat" Tabindex="60" Type="Number" Value="<?php echo !empty($_SESSION['SRokMat'])?$_SESSION['SRokMat']:idate("Y"); ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="62" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#KontaktniAdresa">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="61" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#UchazecSeHlasi">Dále</Button>
</Fieldset>

<Fieldset Id="UchazecSeHlasi">
<H1>Uchazeč se hlásí (vyžadováno)</H1>
<Input Id="ZS" Name="Odkud" Tabindex="63" Type="Radio" Value="ZŠ"<?php echo ($_SESSION['Odkud']=='ZŠ')?' Checked':''; ?>>
<Label For="ZS">ze ZŠ</Label>
<Input Id="SS" Name="Odkud" Tabindex="64" Type="Radio" Value="SŠ"<?php echo ($_SESSION['Odkud']=='SŠ')?' Checked':''; ?>>
<Label For="SS">ze SŠ</Label>
<Input Id="VOS" Name="Odkud" Tabindex="65" Type="Radio" Value="VOŠ"<?php echo ($_SESSION['Odkud']=='VOŠ')?' Checked':''; ?>>
<Label For="VOS">z VOŠ</Label>
<Input Id="VS" Name="Odkud" Tabindex="66" Type="Radio" Value="VŠ"<?php echo ($_SESSION['Odkud']=='VŠ')?' Checked':''; ?>>
<Label For="VS">z VŠ</Label>
<Input Id="DZS" Name="Odkud" Tabindex="67" Type="Radio" Value="DZS"<?php echo ($_SESSION['Odkud']=='DZS')?' Checked':''; ?>>
<Label For="DZS">přes DZS</Label>
<Input Id="Zam" Name="Odkud" Tabindex="68" Type="Radio" Value="zaměstnání"<?php echo ($_SESSION['Odkud']=='zaměstnání')?' Checked':''; ?>>
<Label For="Zam">ze zaměstnání</Label>
<Input Id="Dom" Name="Odkud" Tabindex="69" Type="Radio" Value="domácnost"<?php echo ($_SESSION['Odkud']=='domácnost')?' Checked':''; ?>>
<Label For="Dom">z domácnosti</Label>
<Input Id="Voj" Name="Odkud" Tabindex="70" Type="Radio" Value="vojenská služba"<?php echo ($_SESSION['Odkud']=='vojenská služba')?' Checked':''; ?>>
<Label For="Voj">z vojenské služby</Label>
<Input Id="Odj" Name="Odkud" Tabindex="71" Type="Radio" Value="jiné"<?php echo ($_SESSION['Odkud']=='jiné')?' Checked':''; ?>>
<Label For="Odj">odjinud</Label>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="73" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#StredniSkola">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="72" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#ZajmovaCinnost">Dále</Button>
</Fieldset>

<Fieldset Id="ZajmovaCinnost">
<H1>Zájmová činnost</H1>
<Label For="Zajmy">Zájmy, úspěchy</Label>
<Textarea Id="Zajmy" Name="Zajmy" Tabindex="74">
<?php echo $_SESSION['Zajmy']; ?>
</Textarea>
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="76" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#UchazecSeHlasi">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="75" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PrubehZamestnani">Dále</Button>
</Fieldset>

<Fieldset Id="PrubehZamestnani">
<H1>Průběh zaměstnání</H1>
<Label For="Zamestnavatel">Zaměstnavatel</Label>
<Input Id="Zamestnavatel" Name="Zamestnavatel" Tabindex="77" Type="Text" Value="<?php echo $_SESSION['Zamestnavatel']; ?>">
<Br>
<Label For="Zarazeni">Pracovní zařazení</Label>
<Input Id="Zarazeni" Name="Zarazeni" Tabindex="78" Type="Text" Value="<?php echo $_SESSION['Zarazeni']; ?>">
<Br>
<Label For="ZOd">Od - do</Label>
<Input Class="Pulka" Id="ZOd" Name="ZOd" Tabindex="79" Type="Date" Value="<?php echo $_SESSION['ZOd']; ?>">
<Input Class="Pulka" Id="ZDo" Name="ZDo" Tabindex="80" Type="Date" Value="<?php echo $_SESSION['ZDo']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="82" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#ZajmovaCinnost">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="81" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PredchoziVysokaSkola">Dále</Button>
</Fieldset>

<Fieldset Id="PredchoziVysokaSkola">
<H1>Předchozí vysoká škola</H1>
<Label For="PSkola">Vysoká škola</Label>
<Input Id="PSkola" Name="PSkola" Tabindex="83" Type="Text" Value="<?php echo $_SESSION['PSkola']; ?>">
<Br>
<Label For="PFakulta">Fakulta</Label>
<Input Id="PFakulta" Name="PFakulta" Tabindex="84" Type="Text" Value="<?php echo $_SESSION['PFakulta']; ?>">
<Br>
<Label For="PProgram">Studijní program</Label>
<Input Id="PProgram" Name="PProgram" Tabindex="85" Type="Text" Value="<?php echo $_SESSION['PProgram']; ?>">
<Br>
<Label For="PObor">Studijní obor</Label>
<Input Id="PObor" Name="PObor" Tabindex="86" Type="Text" Value="<?php echo $_SESSION['PObor']; ?>">
<Br>
<Label For="POd">Od - do</Label>
<Input Class="Pulka" Id="POd" Name="POd" Tabindex="87" Type="Date" Value="<?php echo $_SESSION['POd']; ?>">
<Input Class="Pulka" Id="PDo" Name="PDo" Tabindex="88" Type="Date" Value="<?php echo $_SESSION['PDo']; ?>">
<Br>
<Label For="PTitul">Udělený titul</Label>
<Input Id="PTitul" Name="PTitul" Tabindex="89" Type="Text" Value="<?php echo $_SESSION['PTitul']; ?>">
<Br>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="91" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PrubehZamestnani">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="90" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Prospech">Dále</Button>
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
$t=91+(($i-1)*7);
echo "<Tr>"
.$Pole[0].$Pole[1]."Predmet".$i.$Pole[2].(++$t).$Pole[3].$_SESSION["Predmet{$i}"].$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik1".$Pole[2].(++$t).$Pole[3].$_SESSION["Predmet{$i}Rocnik1"].$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik2".$Pole[2].(++$t).$Pole[3].$_SESSION["Predmet{$i}Rocnik2"].$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik3".$Pole[2].(++$t).$Pole[3].$_SESSION["Predmet{$i}Rocnik3"].$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik4".$Pole[2].(++$t).$Pole[3].$_SESSION["Predmet{$i}Rocnik4"].$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Predmet".$i."Rocnik5".$Pole[2].(++$t).$Pole[3].$_SESSION["Predmet{$i}Rocnik5"].$Pole[4]
.$Pole[0]."Znamka".$Pole[1]."Maturita".$i.$Pole[2].(++$t).$Pole[3].$_SESSION["Maturita{$i}"].$Pole[4]
."</Tr>"
.PHP_EOL;
}
?>
<Tr><Td Colspan="7"><A Href="./<?php echo $_SESSION["c"]; ?>&j=<?php echo ++$j; ?>#Prospech" Tabindex="281"><I Class="icon-plus"></I></A></Td></Tr>
</Table>
<Button Class="Belotmavy" Name="Zpet[Kam]" Tabindex="283" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#PredchoziVysokaSkola">Zpět</Button>
<Br>
<Button Class="Tmavobily" Name="Dale[Kam]" Tabindex="282" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Kontrola">Dále</Button>
</Fieldset>
</Form>



<Nav>
<?php
/*  __                                 */
/* |__)    _ |_/|  _    _/  _  _ _     */
/* |   |_|| )|_||((_)\/(-  |||(-| )|_| */
/*                                     */
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
foreach($PoleStran as $Promenna):
?>
<Button Class="Belokulaty" Form="Formular" Name="Dale[Kam]" Type="Submit" Value="<?php echo $_SESSION["c"]."#".$Promenna; ?>">&nbsp;</Button><Br>
<?php endforeach; ?>
</Nav>



<Footer Id="Kontrola">
<H1><I Class="icon-sheet icon3x"></I><Br>Kontrola</H1>
<Label For="Telefon">Telefon</Label>
<Input Form="Formular" Id="Telefon" Name="Telefon" Type="Tel" Value="<?php echo $_SESSION['Telefon']; ?>">
<Br>
<Label For="Email">Email</Label>
<Input Form="Formular" Id="Email" Name="Email" Type="Email" Value="<?php echo $_SESSION['Email']; ?>">
<Br>
<Button Class="Tmavooranzovy" Form="Formular" Name="Zpet[Kam]" Type="Submit" Value="<?php echo $_SESSION["c"]; ?>#Prospech">Zpět</Button>
<Br>
<Button Class="Tmavooranzovy" Form="Formular" Name="Odeslat[Kam]" Type="Submit" Value="odeslano.php<?php echo $_SESSION["c"]; ?>">Odeslat</Button>
</Footer>
</Body>
</Html>
