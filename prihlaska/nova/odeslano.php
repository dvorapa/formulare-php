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
<Title>Odesláno</Title>
</Head>
<Body>
<Header>
<H1><I Class="icon-check icon3x"></I><Br>Odesláno</H1>
K budoucímu zobrazení stavu zpracování přihlášky si prosím uložte následující kód:<Br>
<H2><?php echo session_id(); ?></H2>
a také svoje rodné číslo:<Br>
<H2><?php echo $_SESSION["RCislo"]; ?></H2>
</Header>

<Nav>
Vyberte prosím, jakým způsobem chcete přihlášku získat:<Br>
<A Class="Tlacitko" Href="../export/<?php echo session_id(); ?>.html?Tisk" Title="Vytisknout přihlášku">Tisk</A><Br>
<A Class="Tlacitko" Href="../export/<?php echo session_id(); ?>.pdf" Title="Stáhnout přihlášku">Pdf</A><Br>
<A Class="Tlacitko" Href="../export/<?php echo session_id(); ?>.docx" Title="Stáhnout přihlášku">Docx</A><Br>
<A Class="Tlacitko" Href="../export/<?php echo session_id(); ?>.html" Title="Zobrazit přihlášku">Html</A><Br>
</Nav>

<Nav>
<A Class="Tlacitko" Href="/" Title="Zpět na domovskou stránku"><I Class="icon-home"></I></A>
<A Class="Tlacitko" Href="javascript:window.close();" Title="Odejít pryč z aplikace"><I Class="icon-cross_mark"></I></A>
<?php if(!empty($_SERVER["HTTP_REFERER"])): ?>
<A Class="Tlacitko" Href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" Title="Zpět na předcházející stránku"><I Class="icon-arrow_left"></I></A>
<?php endif; ?>
</Nav>

<Footer>
<Endora>
</Footer>
</Body>
</Html>