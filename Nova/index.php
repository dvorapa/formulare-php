<?php session_start(); ?>
<!Doctype Html>
<Html Lang="Cs">
<Head>
<Meta Charset="Utf-8">
<Meta Name="Application-name" Content="Přihláška na VŠ">
<Meta Name="Author" Content="Pavel Dvořák, 8.O">
<Meta Name="Description" Content="Online přihláška ke studiu na vysoké škole vytvořená ke zjednodušení vyplňování, tisku a následném zasílání">
<Meta Name="Keywords" Content="přihláška,VŠ,formuláře,PHP,vysoké školy">
<Meta Name="Robots" Content="Follow,index">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Type="Text/css" Rel="Stylesheet" Href="/Aplikace/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="/Styly.css">
<Style Type="Text/css">
@media{
Body{Background-color:#FFBF00;Color:#242424}
A{Color:#737373}
Form{Background-color:white;Text-align:left}
Input{Border:1px solid silver;Border-radius:0.25em;Box-shadow:inset 0 1px 1px rgba(0,0,0,0.1);Padding:0.5em;Width:20em}
Label:after{Content:"\A";White-space:pre}
Label:before{Content:"\A\A";White-space:pre}
}
</Style>
<!--[if lt IE 9]>
<Script Type="Application/javascript" Src="Aplikace/html5shiv.js"></Script>
<![endif]-->
<Title>Přihláška</Title>
</Head>
<Body>
<Nav>
<H1></H1>
<A Href="#" Title=""><I Class="icon-"></I></A>
</Nav>



<Form Action="<?php echo "Zpracovani.php?".SID ?>" Method="Post">
<Section>
<H1></H1>
<Label For=""></Label>
<Input Id="" Name="" Tabindex="1" Type="">
<Label For=""> (required)</Label>
<Input Id="" Name="" Required Tabindex="2" Type="">
<A Href="#" Tabindex="3"></A>
<A Href="#" Tabindex="4"></A>
</Section>
<Section>
<H1></H1>
<Label For=""></Label>
<Input Id="" Name="" Tabindex="5" Type="">
<Button Formmethod="get" name="kekel" value="<?php echo SID ?>" Tabindex="6" Type="Submit"></Button>
</Section>
</Form>



<Nav>
<H1></H1>
<A Href="" Title=""><I Class="icon-"></I></A>
</Nav>
</Body>
</Html>