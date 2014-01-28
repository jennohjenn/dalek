Dalek, a PHP-based, MVC-inspired CMF
====================================

Detta ramverk är skapat av Erika Gidlund, jennelie.1981@gmail.com, och är slutprojektet i kursen "Databasdrivna webbapplikationer med PHP och MVC" vid Blekinge Tekniska Högskola. Dalek är baserat på Lydia av Mikael Roos, lärare vid BTH.

Installation
------------

För att installera Dalek kan du göra enligt följande:


Ladda ner ramverket från git hub: <a href="https://github.com/jennohjenn/dalek" target="_blank">https://github.com/jennohjenn/dalek</a>. Eller klona med kommandot: <pre>git clone git://github.com/jennohjenn/dalek.git</pre> from your terminal.

Ladda upp ramverket där du vill ha det på webservern. I ditt FTP-program på din webserver, högerklickar du på mappen <b>site/data</b> och skriver in <b>777</b> på filrättigheter, för att den ska vara skrivbar. I terminalen skriver du: <pre>cd dalek; chmod -R 777 site/data</pre> för att uppnå samma sak.

    Uncomment row #RewriteBase /Zelda/ to RewriteBase /Zelda/ in file .htaccess, if needed.

    <IfModule mod_rewrite.c>
     RewriteEngine on
     #RewriteBase /Zelda/
     RewriteCond %{REQUEST_FILENAME} !-f
     RewriteCond %{REQUEST_FILENAME} !-d
     RewriteRule (.*) index.php/$1 [NC,L]
    </IfModule>

    Open website in a browser, log in with root/root and install modules. Modules are setup with this link (from within Zelda): modules/install. Predefined user root/root is created.




Ändra logo, webbplatsens titel, footer och navigeringsmeny
----------------------------------------------------------

Skapa sida/blogg
----------------




