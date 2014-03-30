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

<Form Action="zpracovani.php" Method="Post">
<Label For="ID">Ke zobrazení průběhu zpracování přihlášky zadejte prosím její kód:</Label><Br>
<Input Autofocus Id="ID" Name="ID" Required Tabindex="1" Type="Text" Value="<?php echo $_COOKIE["PHPSESSID"]; ?>"><Br>
<Label For="RCislo">a svoje rodné číslo:</Label><Br>
<Input Id="RCislo" Name="RCislo" Required Tabindex="2" Type="Text" Value="<?php echo $_COOKIE["RCislo"]; ?>"><Br>
<Button Tabindex="3" Type="Submit">Otevřít</Button>
</Form>

<Footer>
<Endora>
</Footer>
</Body>
</Html>