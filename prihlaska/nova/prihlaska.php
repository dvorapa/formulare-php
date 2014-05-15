<?php session_start(); ?>
<!Doctype Html>
<Html>
<Head>
<Meta Charset="Utf-8">
<Style Type="Text/css">
*{Margin:0}
Body{Font-family:serif}
Div{-moz-box-shadow:0 0 3mm rgba(0,0,0,0.5);-webkit-box-shadow:0 0 3mm rgba(0,0,0,0.5);Box-shadow:0 0 3mm rgba(0,0,0,0.5);Margin:10mm auto;Min-height:297mm;Padding:20mm;Width:210mm}
Table{Border:thin solid black;Border-collapse:collapse;Border-spacing:0;Min-height:237mm;Width:100%}
@page{Margin:0;Size:A4}
@media print{
Div{-moz-box-shadow:initial;-webkit-box-shadow:initial;Box-shadow:initial;Margin:0;Min-height:initial;Page-break-after:always;Width:initial}
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
<Table>
<Tr><Td><?php echo $_SESSION["RCislo"]; ?></Td></Tr>
</Table>
</Div>

<Div>
<Table>

</Table>
</Div>

<Div>
<Table>

</Table>
</Div>

<Div>
<Table>

</Table>
</Div>
</Body>
</Html>