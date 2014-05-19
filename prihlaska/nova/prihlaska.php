<?php session_start(); ?>
<!Doctype Html>
<Html>
<Head>
<Meta Http-equiv="Content-type" Content="Text/html; charset=utf-8">
<Style Type="Text/css">
*{Margin:0}
Body{Font-family:serif}
Div{-moz-box-shadow:0 0 3mm rgba(0,0,0,0.5);-webkit-box-shadow:0 0 3mm rgba(0,0,0,0.5);Box-shadow:0 0 3mm rgba(0,0,0,0.5);Margin:10mm auto;Height:297mm;Padding:20mm;Width:210mm}
Table{Border-collapse:collapse;Border-spacing:0;Height:297mm;Width:100%}
Table *{Border:thin solid black}
@page{Margin:0;Size:A4}
@media print{
Div{-moz-box-shadow:initial;-webkit-box-shadow:initial;Box-shadow:initial;Margin:0;Height:initial;Page-break-after:always;Width:initial}
Table{Height:237mm}
}
</Style>
<Script Type="Text/javascript">
function Vyjet(Co){
if(Co=='#Tisk'){
window.print();
}}
</Script>
<Title>Přihláška</Title>
</Head>
<Body Onload="Vyjet(location.hash);">
<Div>
<table>
  <tr>
    <th colspan="8">Přihláška</th>
  </tr>
  <tr>
    <td colspan="8">ke studiu na vysoké škole<br>pro akademický rok</td>
  </tr>
  <tr>
    <td colspan="8"><?php echo $_SESSION["AkadRok"]; ?></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td colspan="2">Typ studijního programu</td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td colspan="2"><?php echo $_SESSION["Program"]; ?></td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td colspan="2">Forma studia</td>
    <td></td>
    <td colspan="2">Datum doručení přihlášky</td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td colspan="2"><?php echo $_SESSION["Forma"]; ?></td>
    <td></td>
    <td colspan="2"><?php echo date("j.n.Y G:i"); ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td colspan="2">Zvolený jazyk</td>
    <td></td>
    <td colspan="2">Číslo uchazeče</td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td colspan="2"><?php echo $_SESSION["Jazyk"]; ?></td>
    <td></td>
    <td colspan="2"><?php echo session_id(); ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td>Vysoká škola</td>
    <td colspan="7"><?php echo $_SESSION["VSkola"]; ?></td>
  </tr>
  <tr>
    <td>Fakulta</td>
    <td colspan="7"><?php echo $_SESSION["VFakulta"]; ?></td>
  </tr>
  <tr>
    <td>Studijní program</td>
    <td colspan="7"><?php echo $_SESSION["VProgram"]; ?></td>
  </tr>
  <tr>
    <td rowspan="3">Studijní obor</td>
    <td colspan="7">a) <?php echo $_SESSION["VOborA"]; ?></td>
  </tr>
  <tr>
    <td colspan="7">b) <?php echo $_SESSION["VOborB"]; ?></td>
  </tr>
  <tr>
    <td colspan="7">c) <?php echo $_SESSION["VOborC"]; ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td colspan="2">Jméno</td>
    <td colspan="2"><?php echo $_SESSION["Jmeno"]; ?></td>
    <td colspan="2">Tituly</td>
    <td colspan="2"><?php echo $_SESSION["Tituly"]; ?></td>
  </tr>
  <tr>
    <td colspan="2">Příjmení</td>
    <td colspan="2"><?php echo $_SESSION["Prijmeni"]; ?></td>
    <td colspan="2">Pohlaví</td>
    <td colspan="2"><?php echo $_SESSION["Pohlavi"]; ?></td>
  </tr>
  <tr>
    <td colspan="2">Rodné</td>
    <td colspan="2"><?php echo $_SESSION["Rodne"]; ?></td>
    <td colspan="2">Státní příslušnost</td>
    <td colspan="2"><?php echo $_SESSION["StatniPris"]; ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td rowspan="3">Narození</td>
    <td>Datum</td>
    <td colspan="2"><?php echo date("j.n.Y",strtotime($_SESSION["DatumNar"])); ?></td>
    <td>Číslo občanského průkazu</td>
    <td colspan="3"><?php echo $_SESSION["CisloOP"]; ?></td>
  </tr>
  <tr>
    <td>Místo</td>
    <td colspan="2"><?php echo $_SESSION["MistoNar"]; ?></td>
    <td>Rodné číslo</td>
    <td colspan="3"><?php echo $_SESSION["RCislo"]; ?></td>
  </tr>
  <tr>
    <td>Okres</td>
    <td colspan="2"><?php echo $_SESSION["OkresNar"]; ?></td>
    <td>Číslo pasu (pouze u cizinců)</td>
    <td colspan="3"><?php echo $_SESSION["CisloP"]; ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td rowspan="4">Adresa trvalého bydliště</td>
    <td>Ulice a číslo</td>
    <td colspan="6"><?php echo $_SESSION["TUlice"]; ?> <?php echo $_SESSION["TCislo"]; ?></td>
  </tr>
  <tr>
    <td>PSČ</td>
    <td colspan="2"><?php echo $_SESSION["TPSC"]; ?></td>
    <td>Část obce</td>
    <td colspan="3"><?php echo $_SESSION["TCast"]; ?></td>
  </tr>
  <tr>
    <td>Obec</td>
    <td colspan="3"><?php echo $_SESSION["TObec"]; ?></td>
    <td rowspan="2">Stát</td>
    <td colspan="2" rowspan="2"><?php echo $_SESSION["TStat"]; ?></td>
  </tr>
  <tr>
    <td>Okres</td>
    <td colspan="3"><?php echo $_SESSION["TOkres"]; ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td rowspan="4">Kontaktní adresa</td>
    <td>Ulice a číslo</td>
    <td colspan="6"><?php echo $_SESSION["KUlice"]; ?> <?php echo $_SESSION["KCislo"]; ?></td>
  </tr>
  <tr>
    <td>PSČ</td>
    <td colspan="2"><?php echo $_SESSION["KPSC"]; ?></td>
    <td>Část obce</td>
    <td colspan="3"><?php echo $_SESSION["KCast"]; ?></td>
  </tr>
  <tr>
    <td>Obec</td>
    <td colspan="3"><?php echo $_SESSION["KObec"]; ?></td>
    <td rowspan="2">Stát</td>
    <td colspan="2" rowspan="2"><?php echo $_SESSION["KStat"]; ?></td>
  </tr>
  <tr>
    <td>Okres</td>
    <td colspan="3"><?php echo $_SESSION["KOkres"]; ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td rowspan="4">Střední škola</td>
    <td>Název</td>
    <td colspan="6"><?php echo $_SESSION["SSKola"]; ?></td>
  </tr>
  <tr>
    <td>Adresa</td>
    <td colspan="6"><?php echo $_SESSION["SAdresa"]; ?></td>
  </tr>
  <tr>
    <td>Obor</td>
    <td colspan="3"><?php echo $_SESSION["SObor"]; ?></td>
    <td>KKOV</td>
    <td colspan="2"><?php echo $_SESSION["SKKOV"]; ?></td>
  </tr>
  <tr>
    <td>IZO</td>
    <td colspan="3"><?php echo $_SESSION["SIZO"]; ?></td>
    <td>Rok maturitní zkoušky</td>
    <td colspan="2"><?php echo $_SESSION["SRokMat"]; ?></td>
  </tr>
  <tr>
    <td colspan="8"></td>
  </tr>
  <tr>
    <td colspan="2">Datum doručení přihlášky: <?php echo date("j.n.Y G:i"); ?></td>
    <td colspan="4">Číslo uchazeče: <?php echo session_id(); ?></td>
    <td colspan="2">Strana 1/4</td>
  </tr>
</table>
</Div>

<Div>

</Div>

<Div>

</Div>

<Div>

</Div>
</Body>
</Html>