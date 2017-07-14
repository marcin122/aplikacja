<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "pl_PL.utf8");
date_default_timezone_set('Europe/Warsaw');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Witaj na stronie <? print $host; ?>! Hostinger - Darmowy hosting z PHP i MySQL.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="http://www.main-hosting.com/hostinger/welcome/css/site.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main">
    <div id="content">
        <div class="header">
            <a id="logo" href="http://www.hostinger.pl/"><img src="http://www.hostinger.pl/images/logo-pl.png" alt="Hosting" /></a>
        </div>
        <div class="content">
            <h1>Twoje konto zostało utworzone!</h1>
            <p>Strona <b><? print $host; ?></b> została pomyślnie zainstalowana na serwerze! Proszę usunąć plik <b>default.php</b> z folderu <b>public_html</b>, a następnie przesłać swoją stronę na serwera za pomocą FTP lub Menedżera Plików.</p>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
        <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="links">
            <a href="http://www.hostinger.pl/darmowy-hosting" target="_blank">Darmowy Hosting</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.pl/hosting-www" target="_blank">Hosting WWW</a>
            <span class="pipe">|</span>
            <a href="http://www.hostinger.pl/forum" target="_blank">Forum Pomocy</a>
            <span class="pipe">|</span>
            <a href="http://cpanel.hostinger.pl/" target="_blank">Logowanie Klienta</a>
        </div>
        <div class="copyright">Hostinger Polska &copy; <? print date('Y'); ?>. All rights reserved</div>
        <div class="social-icons">
            <a href="http://www.facebook.com/Hostinger.Polska"><img src="http://www.main-hosting.com/hostinger/welcome/images/fb.gif" /></a>
            <a href="https://twitter.com/HostingerCOM"><img src="http://www.main-hosting.com/hostinger/welcome/images/twitter.gif" /></a>
        </div>
    </div>
</div>
</body>
</html>