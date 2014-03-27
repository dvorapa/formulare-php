<?php
ini_set("session.cookie_httponly","1");
session_start();
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
<Link Type="Text/css" Rel="Stylesheet" Href="../styly.css">
<!--[if lt IE 10]><Script Src="/aplikace/html5shiv.js"></Script><![endif]-->
<Title>Stav</Title>
</Head>
<Body>
<Header>
<H1><I Class="icon-magnifying icon3x"></I><Br>Stav zpracování</H1>
</Header>

<Table>
<Tr><Th>Rok</Th><Th>Škola</Th><Th>Fakulta</Th><Th>Elektronicky</Th><Th>Písemně</Th><Th>Platba</Th><Th>Přijat</Th></Tr>
<Tr><Td><?php echo $_SESSION["AkadRok"]; ?></Td><Td><?php echo $_SESSION["VSkola"]; ?></Td><Td><?php echo $_SESSION["VFakulta"]; ?></Td><Td><?php echo $_SESSION["ElPrijat"]; ?></Td><Td><?php echo $_SESSION["PiPrijat"]; ?></Td><Td><?php echo $_SESSION["PlPrijat"]; ?></Td><Td><?php echo $_SESSION["Prijat"]; ?></Td></Tr>
</Table>

<Footer>
<Endora>
</Footer>
</Body>
</Html>