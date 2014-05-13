<?php session_start(); ?>
<!Doctype Html>
<Html>
<Head>
<Meta Charset="Utf-8">
<Style Type="Text/css">
@page{Margin:0;Size:A4}
*{Margin:0}
Div{Padding:20mm;Page-break-after:always}
Table{Border-collapse:collapse;Border-color:black;Border-spacing:0;Min-height:237mm;Width:100%}
</Style>
<Title>Přihláška</Title>
</Head>
<Body>
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