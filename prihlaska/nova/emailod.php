<?php session_start(); ?>
<!Doctype Html>
<Html>
<Head>
<Meta Charset="Utf-8">
<Title>Přihláška na VŠ</Title>
</Head>
<Body>
Vážený uchazeči,
<Br><Br>
Vámi podaná přihláška na vysokou školu byla úspěšně odeslána.
<Br>
Zobrazení stavu zpracování a přijetí této přihlášky je možné na webové adrese:
<Br>
<A Href="http://prihlaskanavs.8u.cz/stav/">http://prihlaskanavs.8u.cz/stav/</A>
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