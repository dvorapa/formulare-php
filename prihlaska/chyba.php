<?php
error_reporting(0);
ini_set("session.cookie_httponly","1");
session_start();
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
$Text[]="empty POST";
$Text[]=print_r($_POST,true);
$Text[]=$_SERVER["REQUEST_METHOD"];
$Text[]=$_SERVER["HTTP_USER_AGENT"];
}elseif($_GET["Kod"]==4){
$Text[]="empty COOKIE";
$Text[]=print_r($_COOKIE,true);
$Text[]=$_SERVER["REQUEST_METHOD"];
$Text[]=$_SERVER["HTTP_USER_AGENT"];
}else{
$Text[]="Jiná chyba";
$Text[]=print_r($GLOBALS,true);
$Text[]=print_r(get_headers($_SERVER["HTTP_REFERER"]),true);
}
$Soubor=fopen("/prihlaska/export/chyby.log","a+");
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
<Meta Name="Robots" Content="Nofollow,noindex">
<Meta Name="Viewport" Content="width=device-width">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Rel="Stylesheet" Href="/aplikace/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Link Type="Text/css" Rel="Stylesheet" Href="/prihlaska/styly.css">
<Title>Chyba</Title>
</Head>
<Body>
<H1><I Class="icon-cross_mark icon3x"></I><Br>Chyba</H1>

<P>
Omlouváme se, ale stránku nelze správně načíst.<Br>
Chyba je na naší straně, někde jsme na něco určitě zapomněli.
</P>

<A Class="Tlacitko" Href="/" Title="Zpět na domovskou stránku"><I Class="icon-home"></I></A>
<A Class="Tlacitko" Href="javascript:window.close();" Title="Odejít pryč z aplikace"><I Class="icon-cross_mark"></I></A>
<?php if(!empty($_SERVER["HTTP_REFERER"])): ?>
<A Class="Tlacitko" Href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" Title="Zpět na předcházející stránku"><I Class="icon-arrow_left"></I></A>
<?php endif; ?>

<Endora>
</Body>
</Html>