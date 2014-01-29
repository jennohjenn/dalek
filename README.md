Dalek, a PHP-based, MVC-inspired CMF
====================================

Detta ramverk är skapat av Erika Gidlund, jennelie.1981@gmail.com, och är slutprojektet i kursen "Databasdrivna webbapplikationer med PHP och MVC" vid Blekinge Tekniska Högskola. Dalek är baserat på Lydia av Mikael Roos, lärare vid BTH.

Installation
------------

För att installera Dalek kan du göra enligt följande:


* Ladda ner ramverket från git hub: <a href="https://github.com/jennohjenn/dalek" target="_blank">https://github.com/jennohjenn/dalek</a>. Eller klona med kommandot: <pre>git clone git://github.com/jennohjenn/dalek.git</pre> i Git Bash.

* Ladda upp ramverket där du vill ha det på studentservern. Använder du FTP-program för att ladda upp filer, så högerklickar du på mappen <b>site/data</b> och skriver in <b>777</b> på filrättigheter, för att den ska vara skrivbar. I terminalen skriver du: <pre>cd dalek; chmod -R 777 site/data</pre> för att uppnå samma sak.

* För att använda ramverket på studentservern behöver du i filen <b>.htaccess</b> ändra raden <pre>RewriteBase /~ergi13/phpmvc/dalek</pre> till din användare och valda mapp för att det skall fungera. 

När du laddat upp ramverket på studentservern öppnar du den i din browser och klickar på <pre>module/install</pre>. Då initieras databasen och användarna <pre>admin</pre> och <pre>doe</pre> skapas.

Ramverket är nu installerat.


Ändra logo, webbplatsens titel, footer och navigeringsmeny
----------------------------------------------------------

Skapa sida/blogg
----------------




