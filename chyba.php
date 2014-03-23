<?php
session_start();
error_reporting(0);
if(!empty($_GET)){
$Text=array();
if($_GET["Kod"]==1){
$Text[]="HTTP 403/404";
$Text[]=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$Text[]=$_SERVER["HTTP_REFERER"];
}elseif($_GET["Kod"]==2){
$Text[]="HTTP 503";
$Text[]=$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$Text[]=$_SERVER["HTTP_REFERER"];
}elseif($_GET["Kod"]==3){
$Text[]="empty($_POST)";
$Text[]=print_r($_POST,true);
$Text[]=$_SERVER["REQUEST_METHOD"];
$Text[]=$_SERVER["HTTP_USER_AGENT"];
}elseif($_GET["Kod"]==4){
$Text[]="in_array($Kolekce[Kam],$_POST)";
$Text[]=print_r($_POST,true);
$Text[]=$_SERVER["REQUEST_METHOD"];
$Text[]=$_SERVER["HTTP_USER_AGENT"];
}else{
$Text[]="Jiná chyba";
$Text[]=print_r($GLOBALS,true);
$Text[]=print_r(get_headers($_SERVER["HTTP_REFERER"]),true);
}
$Soubor=fopen("chyby.log","a+");
fwrite($Soubor,implode(PHP_EOL,$Text).PHP_EOL.PHP_EOL);
fclose($Soubor);
}
?>
<!Doctype Html>
<Html Lang="Cs">
<Head>
<Meta Charset="Utf-8">
<Meta Name="Application-name" Content="Přihláška na VŠ">
<Meta Name="Author" Content="Pavel Dvořák, 8.O">
<Meta Name="Description" Content="Online přihláška ke studiu na vysoké škole vytvořená ke zjednodušení vyplňování, tisku a následném zasílání">
<Meta Name="Keywords" Content="přihláška,VŠ,formuláře,PHP,vysoké školy">
<Meta Name="Robots" Content="Follow,noindex">
<Meta Name="Viewport" Content="width=device-width">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="favicon.ico">
<Link Rel="Stylesheet" Href="aplikace/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Style Type="Text/css">
Body{Background-color:#FFBF00;Color:#242424;Font-family:Ubuntu,"Open Sans",sans-serif;Margin:0 auto;Position:absolute;Left:10%;Right:10%}
H1{Margin:0.5em 0}
A:not(:last-of-type){Background-color:#242424;Border-radius:0.25em;Color:#FFBF00;Display:inline-block;Margin:1em 0;Margin-right:1em;Padding:0.5em 2em;Text-decoration:none;Text-transform:uppercase}
A:hover,A:active{Box-shadow:0 0 0.5em #242424;Text-shadow:0 0 0.5em}

@media (orientation:landscape){
Body{Left:18%;Right:18%}
P,A{Font-size:1.2em}
Endora{Display:inline-block;Margin:auto;Position:absolute;Z-index:-1;Left:0;Bottom:0;Right:0}
}
</Style>
<Title>Chyba</Title>
</Head>
<Body>
<H1><I Class="icon-cross_mark icon3x"></I><Br>Chyba</H1>

<P>
Omlouváme se, ale stránku nelze správně načíst.<Br>
Chyba je na naší straně, někde jsme na něco určitě zapomněli.
</P>

<?php echo !empty($_SERVER["HTTP_REFERER"])?"<A Href='".$_SERVER["HTTP_REFERER"]."'>Zpět</A>":""; ?>
<A Href="/">Domů</A>

<Endora>
</Body>
</Html>