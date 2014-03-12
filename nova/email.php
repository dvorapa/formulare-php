<?php session_start(); ?>
<!Doctype Html>
<Html>
<Head>
<Meta Charset="Utf-8">
<Title>Přihláška na VŠ</Title>
</Head>
<Body>
Vážený uchazeči,
<Br>
Vámi podaná přihláška na vysokou školu byla úspěšně uložena.
<Br><Br>
Vyplnění nové přihlášky nebo tisk, úprava, či odstranění této přihlášky je možné na webové adrese:
<Br>
<A Href="http://prihlaskanavs.8u.cz/uprava/">http://prihlaskanavs.8u.cz/</A>
<Br><Br>
K přihlášení budete potřebovat Vaše rodné číslo (<?php echo $_SESSION["RCislo"]; ?>) a tento kód:
<Br>
<H2><?php echo session_id(); ?></H2>
<Br><Br>
Tato zpráva byla vygenerována automaticky webovou aplikací Přihláška na VŠ.
<Br>
Na tuto zprávu prosím neodpovídejte.
</Body>
</Html>