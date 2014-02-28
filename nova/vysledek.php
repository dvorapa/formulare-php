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
<Meta Name="Viewport" Content="width=device-width">
<Link Type="Image/x-icon" Rel="Shortcut icon" Href="/favicon.ico">
<Link Rel="Stylesheet" Href="/aplikace/mfglabs_iconset.css">
<Link Type="Text/css" Rel="Stylesheet" Href="http://fonts.googleapis.com/css?family=Ubuntu|Open+Sans&subset=latin,latin-ext">
<Style Type="Text/css">
Body{Background-color:#FFBF00;Color:#242424;Font-family:Ubuntu,"Open Sans",sans-serif;Margin:0}
A{Color:#242424;Text-decoration:none}
Button{Background-color:#242424;Border:0;Border-radius:0.25em;Color:#FFBF00;Cursor:pointer;Font-size:1em;Margin:1em 0;Padding:0.5em 2em;Text-transform:uppercase}
A:hover,A:active,Button:hover,Button:active{Text-shadow:0 0 0.5em}
Button:hover,Button:active{Box-shadow:0 0 0.5em #242424}
Form{Margin:auto;Position:absolute;Left:10%;Right:10%}
Header H1{Margin:0.5em 0}
Header I{Font-size:3em}
Section{Border:1px dashed;Margin-bottom:1em;Padding:1em}

@media (orientation:landscape){
Form{Left:18%;Right:18%}
Section{Float:left;Margin-right:3em;Text-align:center;Width:40%}
Footer{Margin:auto;Position:absolute;Z-index:-1;Left:0;Bottom:0;Right:0}
}
</Style>
<!--[if lt IE 10]><Script Src="/aplikace/html5shiv.js"></Script><![endif]-->
<Title>Přihláška</Title>
</Head>
<Body>
<Form Action="zpracovani.php<?php echo $_SESSION["c"]; ?>" Method="Post">
<Header>
<H1><I Class="icon-check"></I><Br>Hotovo</H1>
Budete-li v budoucnu potřebovat tuto přihlášku znovu použít, zapište si prosím následující kód:
<Br>
<H2><?php echo session_id(); ?></H2>
</Header>



<Section>
Vyberte prosím, jakým způsobem chcete přihlášku získat:
<Br>
<Button Name="Stahnout[Kam]" Type="Submit" Value="/export/<?php echo session_id(); ?>.php?Tisk">Tisk</Button>
<Br>
<Button Name="Stahnout[Kam]" Type="Submit" Value="/export/<?php echo session_id(); ?>.php?Pdf">Pdf</Button>
<Br>
<Button Name="Stahnout[Kam]" Type="Submit" Value="/export/<?php echo session_id(); ?>.php?Docx">Docx</Button>
<Br>
<Button Name="Stahnout[Kam]" Type="Submit" Value="/export/<?php echo session_id(); ?>.php?Html">Html</Button>
<Br>
<A Href="/export/<?php echo session_id(); ?>.php?Dalsi">Další</A>
</Section>



<Section>
Nebudete-li se k této přihlášce již vracet nebo chcete smazat uložené údaje, klikněte sem:
<Br>
<Button Name="Smazat[Kam]" Type="Submit" Value="/"><I Class="icon-trash_can"></I></Button>
<Br>
Potřebujete-li upravit starší přihlášku nebo vytvořit novou, klikněte sem:
<Br>
<Button Name="Prejit[Kam]" Type="Submit" Value="/"><I Class="icon-home"></I></Button>
<Br>
Není-li žádná z předchozích možností vhodná nebo si nejste jist(a), klikněte sem:
<Br>
<Button Name="Odejit[Kam]" Type="Submit" Value="/"><I Class="icon-cross_mark"></I></Button>
</Section>
</Form>



<Footer>
<Endora>
</Footer>
</Body>
</Html>