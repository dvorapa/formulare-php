<?php session_start(); ?>
<!Doctype Html>
<Html>
<Head>
<Meta Http-equiv="Content-type" Content="Text/html; charset=utf-8">
<Title>Přihláška na VŠ</Title>
</Head>
<Body>
Vážený uchazeči,
<Br><Br>
Vámi podaná přihláška na vysokou školu byla úspěšně uložena do paměti Vašeho prohlížeče.
<Br>
Dokončení úprav této přihlášky je možné na webové adrese:
<Br>
<A Href="http://prihlaskanavs.8u.cz/uprava/">http://prihlaskanavs.8u.cz/uprava/</A>
<Br><Br>
K přihlášení budete potřebovat tento kód:
<Br>
<H2><?php echo session_id(); ?></H2>
<Br><Br>
Tato zpráva byla vygenerována automaticky webovou aplikací Přihláška na VŠ.
<Br>
Na tuto zprávu prosím neodpovídejte.
</Body>
</Html>