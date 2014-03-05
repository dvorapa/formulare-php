<?php
/*                                    */
/* \  /   _  _    |_ _/  _ _  _ | . _ */
/*  \/ \/|_)| )|_||_(-  (_(_)(_)|(|(- */
/*     / |                            */
session_start();
if(!empty($_GET["Cookie"])){
if(!empty($_COOKIE["Co"])){
$_SESSION["c"]="";
}else{
$_SESSION["c"]="?".session_id();
}}else{
setcookie("Co","To",time()+60*60);
header("Location: {$_SERVER['PHP_SELF']}?Cookie=true");
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
<Meta Name="Viewport" Content="width=device-width">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Rel="Stylesheet" Href="/aplikace/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="styly.css">
<!--[if lt IE 10]><Script Src="/aplikace/html5shiv.js"></Script><![endif]-->
<Title>Přihláška</Title>
</Head>
<Body>
<Nav>
<H1></H1>
<Input Form="Formular" Name="Ulozit[Cookie]" Type="Hidden" Value="1">
<Input Form="Formular" Name="Ulozit[Databaze]" Type="Hidden" Value="true">
<Button Form="Formular" Name="Ulozit[Kam]" Type="Submit" Value="./">Uložit</Button>
</Nav>



<Form Action="zpracovani.php<?php echo $_SESSION["c"]; ?>" Id="Formular" Method="Post">

<Section Id="Uvod">
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
<Input Id="Jazyk" Name="Jazyk" Tabindex="7" Type="Text" Value="<?php echo !empty($_SESSION['Jazyk'])?$_SESSION['Jazyk']:''; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="8" Type="Submit" Value="./#VysokaSkola">Dále</Button>
</Section>

<Section Id="VysokaSkola">
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
<Button Name="Prejit[Kam]" Tabindex="15" Type="Submit" Value="./#OsobniUdaje">Dále</Button>
</Section>

<Section Id="OsobniUdaje">
<H1>Osobní údaje</H1>
<Label For="Jmeno">Jméno</Label>
<Input Id="Jmeno" Name="Jmeno" Tabindex="16" Type="Text" Value="<?php echo !empty($_SESSION['Jmeno'])?$_SESSION['Jmeno']:''; ?>">
<Br>
<Label For="Prijmeni">Příjmení</Label>
<Input Id="Prijmeni" Name="Prijmeni" Tabindex="17" Type="Text" Value="<?php echo !empty($_SESSION['Prijmeni'])?$_SESSION['Prijmeni']:''; ?>">
<Br>
<Label For="Rodne">Rodné</Label>
<Input Id="Rodne" Name="Rodne" Tabindex="18" Type="Text" Value="<?php echo !empty($_SESSION['Rodne'])?$_SESSION['Rodne']:''; ?>">
<Br>
<Label For="Tituly">Tituly</Label>
<Input Id="Tituly" Name="Tituly" Tabindex="19" Type="Text" Value="<?php echo !empty($_SESSION['Tituly'])?$_SESSION['Tituly']:''; ?>">
<Br>
<Label>Pohlaví</Label>
<Input Id="muz" Name="Pohlavi" Tabindex="20" Type="Radio" Value="muž"<?php echo (!empty($_SESSION['Pohlavi'])&&$_SESSION['Pohlavi']=='muž')?' Checked':''; ?>>
<Label For="muz">muž</Label>
<Input Id="zena" Name="Pohlavi" Tabindex="21" Type="Radio" Value="žena"<?php echo (!empty($_SESSION['Pohlavi'])&&$_SESSION['Pohlavi']=='žena')?' Checked':''; ?>>
<Label For="zena">žena</Label>
<Label For="StatniPris">Státní příslušnost</Label>
<Input Id="StatniPris" Name="StatniPris" Tabindex="22" Type="Text" Value="<?php echo !empty($_SESSION['StatniPris'])?$_SESSION['StatniPris']:'Česká republika'; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="23" Type="Submit" Value="./#Narozeni">Dále</Button>
</Section>

<Section Id="Narozeni">
<H1>Narození</H1>
<Label For="DatumNar">Datum narození</Label>
<Input Id="DatumNar" Name="DatumNar" Tabindex="24" Type="Date" Value="<?php echo !empty($_SESSION['DatumNar'])?$_SESSION['DatumNar']:''; ?>">
<Br>
<Label For="MistoNar">Místo narození</Label>
<Input Id="MistoNar" Name="MistoNar" Tabindex="25" Type="Text" Value="<?php echo !empty($_SESSION['MistoNar'])?$_SESSION['MistoNar']:''; ?>">
<Br>
<Label For="OkresNar">Okres</Label>
<Input Id="OkresNar" Name="OkresNar" Tabindex="26" Type="Text" Value="<?php echo !empty($_SESSION['OkresNar'])?$_SESSION['OkresNar']:''; ?>">
<Br>
<Label For="CisloOP">Číslo občanského průkazu</Label>
<Input Id="CisloOP" Name="CisloOP" Tabindex="27" Type="Number" Value="<?php echo !empty($_SESSION['CisloOP'])?$_SESSION['CisloOP']:''; ?>">
<Br>
<Label For="RCislo">Rodné číslo</Label>
<Input Id="RCislo" Name="RCislo" Tabindex="28" Type="Number" Value="<?php echo !empty($_SESSION['RCislo'])?$_SESSION['RCislo']:''; ?>">
<Br>
<Label For="CisloP">Číslo pasu</Label>
<Input Id="CisloP" Name="CisloP" Tabindex="29" Type="Number" Value="<?php echo !empty($_SESSION['CisloP'])?$_SESSION['CisloP']:''; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="30" Type="Submit" Value="./#AdresaTrvalehoBydliste">Dále</Button>
</Section>

<Section Id="AdresaTrvalehoBydliste">
<H1>Adresa trvalého bydliště</H1>
<Label For="TUlice">Ulice a číslo domu</Label>
<Input Id="TUlice" Name="TUlice" Tabindex="31" Type="Text" Value="<?php echo !empty($_SESSION['TUlice'])?$_SESSION['TUlice']:''; ?>">
<Input Id="TCislo" Name="TCislo" Tabindex="32" Type="Text" Value="<?php echo !empty($_SESSION['TCislo'])?$_SESSION['TCislo']:''; ?>">
<Br>
<Label For="TCast">Část obce</Label>
<Input Id="TCast" Name="TCast" Tabindex="33" Type="Text" Value="<?php echo !empty($_SESSION['TCast'])?$_SESSION['TCast']:''; ?>">
<Br>
<Label For="TObec">Obec a PSČ</Label>
<Input Id="TObec" Name="TObec" Tabindex="34" Type="Text" Value="<?php echo !empty($_SESSION['TObec'])?$_SESSION['TObec']:''; ?>">
<Input Id="TPSC" Max="99999" Name="TPSC" Tabindex="35" Type="Number" Value="<?php echo !empty($_SESSION['TPSC'])?$_SESSION['TPSC']:''; ?>">
<Br>
<Label For="TPosta">Pošta</Label>
<Input Id="TPosta" Name="TPosta" Tabindex="36" Type="Text" Value="<?php echo !empty($_SESSION['TPosta'])?$_SESSION['TPosta']:''; ?>">
<Br>
<Label For="TOkres">Okres a stát</Label>
<Input Id="TOkres" Name="TOkres" Tabindex="37" Type="Text" Value="<?php echo !empty($_SESSION['TOkres'])?$_SESSION['TOkres']:''; ?>">
<Input Id="TStat" Name="TStat" Tabindex="38" Type="Text" Value="<?php echo !empty($_SESSION['TStat'])?$_SESSION['TStat']:''; ?>">
<Br>
<Label For="TTel">Telefon</Label>
<Input Id="TTel" Name="TTel" Tabindex="39" Type="Tel" Value="<?php echo !empty($_SESSION['TTel'])?$_SESSION['TTel']:''; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="40" Type="Submit" Value="./#KontaktniAdresa">Dále</Button>
</Section>

<Section Id="KontaktniAdresa">
<H1>Kontaktní adresa</H1>
<Label For="KUlice">Ulice a číslo domu</Label>
<Input Id="KUlice" Name="KUlice" Tabindex="41" Type="Text" Value="<?php echo !empty($_SESSION['KUlice'])?$_SESSION['KUlice']:''; ?>">
<Input Id="KCislo" Name="KCislo" Tabindex="42" Type="Text" Value="<?php echo !empty($_SESSION['KCislo'])?$_SESSION['KCislo']:''; ?>">
<Br>
<Label For="KCast">Část obce</Label>
<Input Id="KCast" Name="KCast" Tabindex="43" Type="Text" Value="<?php echo !empty($_SESSION['KCast'])?$_SESSION['KCast']:''; ?>">
<Br>
<Label For="KObec">Obec a PSČ</Label>
<Input Id="KObec" Name="KObec" Tabindex="44" Type="Text" Value="<?php echo !empty($_SESSION['KObec'])?$_SESSION['KObec']:''; ?>">
<Input Id="KPSC" Max="99999" Name="KPSC" Tabindex="45" Type="Number" Value="<?php echo !empty($_SESSION['KPSC'])?$_SESSION['KPSC']:''; ?>">
<Br>
<Label For="KPosta">Pošta</Label>
<Input Id="KPosta" Name="KPosta" Tabindex="46" Type="Text" Value="<?php echo !empty($_SESSION['KPosta'])?$_SESSION['KPosta']:''; ?>">
<Br>
<Label For="KOkres">Okres a stát</Label>
<Input Id="KOkres" Name="KOkres" Tabindex="47" Type="Text" Value="<?php echo !empty($_SESSION['KOkres'])?$_SESSION['KOkres']:''; ?>">
<Input Id="KStat" Name="KStat" Tabindex="48" Type="Text" Value="<?php echo !empty($_SESSION['KStat'])?$_SESSION['KStat']:''; ?>">
<Br>
<Label For="KTel">Telefon</Label>
<Input Id="KTel" Name="KTel" Tabindex="49" Type="Tel" Value="<?php echo !empty($_SESSION['KTel'])?$_SESSION['KTel']:''; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="50" Type="Submit" Value="./#StredniSkola">Dále</Button>
</Section>

<Section Id="StredniSkola">
<H1>Střední škola</H1>
<Label For="SSkola">Název</Label>
<Input Id="SSkola" Name="SSkola" Tabindex="51" Type="Text" Value="<?php echo !empty($_SESSION['SSkola'])?$_SESSION['SSkola']:''; ?>">
<Br>
<Label For="SAdresa">Adresa</Label>
<Input Id="SAdresa" Name="SAdresa" Tabindex="52" Type="Text" Value="<?php echo !empty($_SESSION['SAdresa'])?$_SESSION['SAdresa']:''; ?>">
<Br>
<Label For="SJObor">Obor a JKOV</Label>
<Input Id="SJObor" Name="SJObor" Tabindex="53" Type="Text" Value="<?php echo !empty($_SESSION['SJObor'])?$_SESSION['SJObor']:''; ?>">
<Input Id="SJKOV" Name="SJKOV" Tabindex="54" Type="Number" Value="<?php echo !empty($_SESSION['SJKOV'])?$_SESSION['SJKOV']:''; ?>">
<Br>
<Label For="SKObor">Obor a KKOV</Label>
<Input Id="SKObor" Name="SKObor" Tabindex="55" Type="Text" Value="<?php echo !empty($_SESSION['SKObor'])?$_SESSION['SKObor']:''; ?>">
<Input Id="SKKOV" Name="SKKOV" Tabindex="56" Type="Text" Value="<?php echo !empty($_SESSION['SKKOV'])?$_SESSION['SKKOV']:''; ?>">
<Br>
<Label For="SIZO">IZO</Label>
<Input Id="SIZO" Name="SIZO" Tabindex="57" Type="Number" Value="<?php echo !empty($_SESSION['SIZO'])?$_SESSION['SIZO']:''; ?>">
<Br>
<Label For="SRokMat">Rok maturitní zkoušky</Label>
<Input Id="SRokMat" Name="SRokMat" Tabindex="58" Type="Number" Value="<?php echo !empty($_SESSION['SRokMat'])?$_SESSION['SRokMat']:idate("Y"); ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="59" Type="Submit" Value="./#UchazecSeHlasi">Dále</Button>
</Section>

<Section Id="UchazecSeHlasi">
<H1>Uchazeč se hlásí</H1>
<Input Id="ZS" Name="Odkud" Tabindex="60" Type="Radio" Value="ZŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='ZŠ')?' Checked':''; ?>>
<Label For="ZS">ze ZŠ</Label>
<Input Id="SS" Name="Odkud" Tabindex="61" Type="Radio" Value="SŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='SŠ')?' Checked':''; ?>>
<Label For="SS">ze SŠ</Label>
<Input Id="VOS" Name="Odkud" Tabindex="62" Type="Radio" Value="VOŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='VOŠ')?' Checked':''; ?>>
<Label For="VOS">z VOŠ</Label>
<Input Id="VS" Name="Odkud" Tabindex="63" Type="Radio" Value="VŠ"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='VŠ')?' Checked':''; ?>>
<Label For="VS">z VŠ</Label>
<Input Id="DZS" Name="Odkud" Tabindex="64" Type="Radio" Value="DZS"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='DZS')?' Checked':''; ?>>
<Label For="DZS">přes DZS</Label>
<Input Id="Zam" Name="Odkud" Tabindex="65" Type="Radio" Value="zaměstnání"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='zaměstnání')?' Checked':''; ?>>
<Label For="Zam">ze zaměstnání</Label>
<Input Id="Dom" Name="Odkud" Tabindex="66" Type="Radio" Value="domácnost"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='domácnost')?' Checked':''; ?>>
<Label For="Dom">z domácnosti</Label>
<Input Id="Voj" Name="Odkud" Tabindex="67" Type="Radio" Value="vojenská služba"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='vojenská služba')?' Checked':''; ?>>
<Label For="Voj">z vojenské služby</Label>
<Input Id="Odj" Name="Odkud" Tabindex="68" Type="Radio" Value="jiné"<?php echo (!empty($_SESSION['Odkud'])&&$_SESSION['Odkud']=='jiné')?' Checked':''; ?>>
<Label For="Odj">odjinud</Label>
<Button Name="Prejit[Kam]" Tabindex="69" Type="Submit" Value="./#ZajmovaCinnost">Dále</Button>
</Section>

<Section Id="ZajmovaCinnost">
<H1>Zájmová činnost</H1>
<Label For="Zajmy">Zájmy, úspěchy</Label>
<Textarea Id="Zajmy" Name="Zajmy" Tabindex="70">
<?php echo !empty($_SESSION['Zajmy'])?$_SESSION['Zajmy']:''; ?>
</Textarea>
<Br>
<Button Name="Prejit[Kam]" Tabindex="71" Type="Submit" Value="./#PrubehZamestnani">Dále</Button>
</Section>

<Section Id="PrubehZamestnani">
<H1>Průběh zaměstnání</H1>
<Label For="Zamestnavatel">Zaměstnavatel</Label>
<Input Id="Zamestnavatel" Name="Zamestnavatel" Tabindex="72" Type="Text" Value="<?php echo !empty($_SESSION['Zamestnavatel'])?$_SESSION['Zamestnavatel']:''; ?>">
<Br>
<Label For="Zarazeni">Pracovní zařazení</Label>
<Input Id="Zarazeni" Name="Zarazeni" Tabindex="73" Type="Text" Value="<?php echo !empty($_SESSION['Zarazeni'])?$_SESSION['Zarazeni']:''; ?>">
<Br>
<Label For="ZOd">Od - do</Label>
<Input Id="ZOd" Name="ZOd" Tabindex="74" Type="Date" Value="<?php echo !empty($_SESSION['ZOd'])?$_SESSION['ZOd']:''; ?>">
<Input Id="ZDo" Name="ZOdDo" Tabindex="74" Type="Date" Value="<?php echo !empty($_SESSION['ZDo'])?$_SESSION['ZDo']:''; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="75" Type="Submit" Value="./#PredchoziVysokaSkola">Dále</Button>
</Section>

<Section Id="PredchoziVysokaSkola">
<H1>Předchozí vysoká škola</H1>
<Label For="PSkola">Vysoká škola</Label>
<Input Id="PSkola" Name="PSkola" Tabindex="76" Type="Text" Value="<?php echo !empty($_SESSION['PSkola'])?$_SESSION['PSkola']:''; ?>">
<Br>
<Label For="PFakulta">Fakulta</Label>
<Input Id="PFakulta" Name="PFakulta" Tabindex="77" Type="Text" Value="<?php echo !empty($_SESSION['PFakulta'])?$_SESSION['PFakulta']:''; ?>">
<Br>
<Label For="PProgram">Studijní program</Label>
<Input Id="PProgram" Name="PProgram" Tabindex="78" Type="Text" Value="<?php echo !empty($_SESSION['PProgram'])?$_SESSION['PProgram']:''; ?>">
<Br>
<Label For="PObor">Studijní obor</Label>
<Input Id="PObor" Name="PObor" Tabindex="79" Type="Text" Value="<?php echo !empty($_SESSION['PObor'])?$_SESSION['PObor']:''; ?>">
<Br>
<Label For="POd">Od - do</Label>
<Input Id="POd" Name="POd" Tabindex="80" Type="Date" Value="<?php echo !empty($_SESSION['POd'])?$_SESSION['POd']:''; ?>">
<Input Id="PDo" Name="PDo" Tabindex="81" Type="Date" Value="<?php echo !empty($_SESSION['PDo'])?$_SESSION['PDo']:''; ?>">
<Br>
<Label For="PTitul">Udělený titul</Label>
<Input Id="PTitul" Name="PTitul" Tabindex="82" Type="Text" Value="<?php echo !empty($_SESSION['PTitul'])?$_SESSION['PTitul']:''; ?>">
<Br>
<Button Name="Prejit[Kam]" Tabindex="83" Type="Submit" Value="./#Prospech">Dále</Button>
</Section>

<Section Id="Prospech">
<H1>Prospěch</H1>
<Table>
<Tr><Th Rowspan="2">Předmět</Th><Th Colspan="5">Ročník</Th><Th Rowspan="2">Maturita</Th></Tr>
<Tr><Th>I</Th><Th>II</Th><Th>III</Th><Th>IV</Th><Th>V</Th></Tr>
<Tr><Td>
<Input Id="" Name="" Tabindex="84" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td><Td>
<Input Class="Znamka" Id="" Name="" Tabindex="85" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td><Td>
<Input Class="Znamka" Id="" Name="" Tabindex="86" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td><Td>
<Input Class="Znamka" Id="" Name="" Tabindex="87" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td><Td>
<Input Class="Znamka" Id="" Name="" Tabindex="88" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td><Td>
<Input Class="Znamka" Id="" Name="" Tabindex="89" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td><Td>
<Input Class="Znamka" Id="" Name="" Tabindex="90" Type="Text" Value="<?php echo !empty($_SESSION[''])?$_SESSION['']:''; ?>">
</Td></Tr>
</Table>
<A Onclick=""><I Class="icon-plus"></I></A>
<Br>
<Button Name="Prejit[Kam]" Type="Submit" Value="./#Kontrola">Dále</Button>
</Section>

<Section Id="Kontrola">
<H1>Kontrola</H1>
<!--
<A Href="#Uvod"><I Class="icon-pen"></I></A>
<P>Akademický rok:
<?php echo !empty($_SESSION["AkadRok"])?$_SESSION["AkadRok"]:"<B>Chybí</B>"; ?>
<Br>Program:
<?php echo !empty($_SESSION["Program"])?$_SESSION["Program"]:"<B>Chybí</B>"; ?>
<Br>Forma:
<?php echo !empty($_SESSION["Forma"])?$_SESSION["Forma"]:"<B>Chybí</B>"; ?>
<Br>Jazyk:
<?php echo !empty($_SESSION["Jazyk"])?$_SESSION["Jazyk"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#VysokaSkola">
<I Class="icon-pen"></I></A>
<P>Vysoká škola:
<?php echo !empty($_SESSION["VSkola"])?$_SESSION["VSkola"]:"<B>Chybí</B>"; ?>
<Br>Fakulta:
<?php echo !empty($_SESSION["VFakulta"])?$_SESSION["VFakulta"]:"<B>Chybí</B>"; ?>
<Br>Studijní program:
<?php echo !empty($_SESSION["VProgram"])?$_SESSION["VProgram"]:"<B>Chybí</B>"; ?>
<Br>Studijní obory:
<?php echo !empty($_SESSION["VOborA"])?$_SESSION["VOborA"]:"<B>Chybí</B>"; ?>
<?php echo !empty($_SESSION["VOborB"])?", ".$_SESSION["VOborB"]:""; ?>
<?php echo !empty($_SESSION["VOborC"])?", ".$_SESSION["VOborC"]:""; ?>
<Br>
</P>
<A Href="#OsobniUdaje">
<I Class="icon-pen"></I></A>
<P>Jméno:
<?php echo !empty($_SESSION["Jmeno"])?$_SESSION["Jmeno"]:"<B>Chybí</B>"; ?>
<Br>Příjmení:
<?php echo !empty($_SESSION["Prijmeni"])?$_SESSION["Prijmeni"]:"<B>Chybí</B>"; ?>
<Br>Rodné:
<?php echo !empty($_SESSION["Rodne"])?$_SESSION["Rodne"]:"<B>Chybí</B>"; ?>
<Br>Tituly:
<?php echo !empty($_SESSION["Tituly"])?$_SESSION["Tituly"]:"<B>Chybí</B>"; ?>
<Br>Pohlaví:
<?php echo !empty($_SESSION["Pohlavi"])?$_SESSION["Pohlavi"]:"<B>Chybí</B>"; ?>
<Br>Státní příslušnost:
<?php echo !empty($_SESSION["StatniPris"])?$_SESSION["StatniPris"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#Narozeni">
<I Class="icon-pen"></I></A>
<P>Datum narození:
<?php echo !empty($_SESSION["DatumNar"])?$_SESSION["DatumNar"]:"<B>Chybí</B>"; ?>
<Br>Místo narození:
<?php echo !empty($_SESSION["MistoNar"])?$_SESSION["MistoNar"]:"<B>Chybí</B>"; ?>
<Br>Okres narození:
<?php echo !empty($_SESSION["OkresNar"])?$_SESSION["OkresNar"]:"<B>Chybí</B>"; ?>
<Br>Číslo občanského průkazu:
<?php echo !empty($_SESSION["CisloOP"])?$_SESSION["CisloOP"]:"<B>Chybí</B>"; ?>
<Br>Rodné číslo:
<?php echo !empty($_SESSION["RCislo"])?$_SESSION["RCislo"]:"<B>Chybí</B>"; ?>
<Br>Číslo pasu:
<?php echo !empty($_SESSION["CisloP"])?$_SESSION["CisloP"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#AdresaTrvalehoBydliste">
<I Class="icon-pen"></I></A>
<P>Ulice:
<?php echo !empty($_SESSION["TUlice"])?$_SESSION["TUlice"]:"<B>Chybí</B>"; ?>
<Br>Číslo:
<?php echo !empty($_SESSION["TCislo"])?$_SESSION["TCislo"]:"<B>Chybí</B>"; ?>
<Br>Část obce:
<?php echo !empty($_SESSION["TCast"])?$_SESSION["TCast"]:"<B>Chybí</B>"; ?>
<Br>Obec:
<?php echo !empty($_SESSION["TObec"])?$_SESSION["TObec"]:"<B>Chybí</B>"; ?>
<Br>Okres:
<?php echo !empty($_SESSION["TOkres"])?$_SESSION["TOkres"]:"<B>Chybí</B>"; ?>
<Br>PSČ:
<?php echo !empty($_SESSION["TPSC"])?$_SESSION["TPSC"]:"<B>Chybí</B>"; ?>
<Br>Telefon:
<?php echo !empty($_SESSION["TTel"])?$_SESSION["TTel"]:"<B>Chybí</B>"; ?>
<Br>Pošta:
<?php echo !empty($_SESSION["TPosta"])?$_SESSION["TPosta"]:"<B>Chybí</B>"; ?>
<Br>Stát:
<?php echo !empty($_SESSION["TStat"])?$_SESSION["TStat"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#KontaktniAdresa">
<I Class="icon-pen"></I></A>
<P>Ulice:
<?php echo !empty($_SESSION["KUlice"])?$_SESSION["KUlice"]:"<B>Chybí</B>"; ?>
<Br>Číslo:
<?php echo !empty($_SESSION["KCislo"])?$_SESSION["KCislo"]:"<B>Chybí</B>"; ?>
<Br>Část obce:
<?php echo !empty($_SESSION["KCast"])?$_SESSION["KCast"]:"<B>Chybí</B>"; ?>
<Br>Obec:
<?php echo !empty($_SESSION["KObec"])?$_SESSION["KObec"]:"<B>Chybí</B>"; ?>
<Br>Okres:
<?php echo !empty($_SESSION["KOkres"])?$_SESSION["KOkres"]:"<B>Chybí</B>"; ?>
<Br>PSČ:
<?php echo !empty($_SESSION["KPSC"])?$_SESSION["KPSC"]:"<B>Chybí</B>"; ?>
<Br>Telefon:
<?php echo !empty($_SESSION["KTel"])?$_SESSION["KTel"]:"<B>Chybí</B>"; ?>
<Br>Pošta:
<?php echo !empty($_SESSION["KPosta"])?$_SESSION["KPosta"]:"<B>Chybí</B>"; ?>
<Br>Stát:
<?php echo !empty($_SESSION["KStat"])?$_SESSION["KStat"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#StredniSkola">
<I Class="icon-pen"></I></A>
<P>Název:
<?php echo !empty($_SESSION["SSkola"])?$_SESSION["SSkola"]:"<B>Chybí</B>"; ?>
<Br>Adresa:
<?php echo !empty($_SESSION["SAdresa"])?$_SESSION["SAdresa"]:"<B>Chybí</B>"; ?>
<Br>Obor:
<?php echo !empty($_SESSION["SJObor"])?$_SESSION["SJObor"]:"<B>Chybí</B>"; ?>
<Br>JKOV:
<?php echo !empty($_SESSION["SJKOV"])?$_SESSION["SJKOV"]:"<B>Chybí</B>"; ?>
<Br>Obor:
<?php echo !empty($_SESSION["SKObor"])?$_SESSION["SKObor"]:"<B>Chybí</B>"; ?>
<Br>KKOV:
<?php echo !empty($_SESSION["SKKOV"])?$_SESSION["SKKOV"]:"<B>Chybí</B>"; ?>
<Br>IZO:
<?php echo !empty($_SESSION["SIZO"])?$_SESSION["SIZO"]:"<B>Chybí</B>"; ?>
<Br>Rok maturitní zkoušky:
<?php echo !empty($_SESSION["SRokMat"])?$_SESSION["SRokMat"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#UchazecSeHlasi">
<I Class="icon-pen"></I></A>
<P>Uchazeč se hlásí (z/ze/přes):
<?php echo !empty($_SESSION["Odkud"])?$_SESSION["Odkud"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#ZajmovaCinnost">
<I Class="icon-pen"></I></A>
<P>Zájmová činnost, úspěchy:
<?php echo !empty($_SESSION["Zajmy"])?$_SESSION["Zajmy"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#PrubehZamestnani">
<I Class="icon-pen"></I></A>
<P>Zaměstnavatel:
<?php echo !empty($_SESSION["Zamestnavatel"])?$_SESSION["Zamestnavatel"]:"<B>Chybí</B>"; ?>
<Br>Pracovní zařazení:
<?php echo !empty($_SESSION["Zarazeni"])?$_SESSION["Zarazeni"]:"<B>Chybí</B>"; ?>
<Br>Od:
<?php echo !empty($_SESSION["ZOd"])?$_SESSION["ZOd"]:"<B>Chybí</B>"; ?>
<Br>Do:
<?php echo !empty($_SESSION["ZDo"])?$_SESSION["ZDo"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#PredchoziVysokaSkola">
<I Class="icon-pen"></I></A>
<P>Vysoká škola:
<?php echo !empty($_SESSION["PSkola"])?$_SESSION["PSkola"]:"<B>Chybí</B>"; ?>
<Br>Fakulta:
<?php echo !empty($_SESSION["PFakulta"])?$_SESSION["PFakulta"]:"<B>Chybí</B>"; ?>
<Br>Program:
<?php echo !empty($_SESSION["PProgram"])?$_SESSION["PProgram"]:"<B>Chybí</B>"; ?>
<Br>Obor:
<?php echo !empty($_SESSION["PObor"])?$_SESSION["PObor"]:"<B>Chybí</B>"; ?>
<Br>Od:
<?php echo !empty($_SESSION["POd"])?$_SESSION["POd"]:"<B>Chybí</B>"; ?>
<Br>Do:
<?php echo !empty($_SESSION["PDo"])?$_SESSION["PDo"]:"<B>Chybí</B>"; ?>
<Br>Udělený titul:
<?php echo !empty($_SESSION["PTitul"])?$_SESSION["PTitul"]:"<B>Chybí</B>"; ?>
<Br>
</P>
<A Href="#Prospech">
<I Class="icon-pen"></I></A>
<P>
<?php
for($i=1;$i<=27;$i++){
echo !empty($_SESSION["Predmet$i"])?($_SESSION["Predmet$i"].(!empty($_SESSION["Predmet$i"."Rocnik1"])?$_SESSION["Predmet$i"."Rocnik1"]:"<B>Chybí</B>").(!empty($_SESSION["Predmet$i"."Rocnik2"])?$_SESSION["Predmet$i"."Rocnik2"]:"<B>Chybí</B>").(!empty($_SESSION["Predmet$i"."Rocnik3"])?$_SESSION["Predmet$i"."Rocnik3"]:"<B>Chybí</B>").(!empty($_SESSION["Predmet$i"."Rocnik4"])?$_SESSION["Predmet$i"."Rocnik4"]:"<B>Chybí</B>").(!empty($_SESSION["Predmet$i"."Rocnik5"])?$_SESSION["Predmet$i"."Rocnik5"]:"<B>Chybí</B>").(!empty($_SESSION["Maturita$i"])?$_SESSION["Maturita$i"]:"<B>Chybí</B>")."<Br>"):"<B>Chybí</B><Br>";
}
?>
</P>
-->
<Input Name="Odeslat[Databaze]" Type="Hidden" Value="true">
<Input Name="Odeslat[Soubor]" Type="Hidden" Value="true">
<Button Name="Odeslat[Kam]" Type="Submit" Value="vysledek.php">Odeslat</Button>
</Section>
</Form>



<Nav>
<?php
foreach($_SESSION["PoleStran"] as $Promenna){
echo "<A Href='#{$Promenna[1]}'>&middot;</A>";
}
?>
<H1></H1>
</Nav>



<Footer>
<Endora>
</Footer>
</Body>
</Html>