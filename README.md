Dalek, a PHP-based, MVC-inspired CMF
====================================

Detta ramverk är skapat av Erika Gidlund, jennelie.1981@gmail.com, och är slutprojektet i kursen "Databasdrivna webbapplikationer med PHP och MVC" vid Blekinge Tekniska Högskola. Dalek är baserat på Lydia av Mikael Roos, lärare vid BTH.

Installation
------------

För att installera Dalek kan du göra enligt följande:


* Ladda ner ramverket från git hub: <a href="https://github.com/jennohjenn/dalek" target="_blank">https://github.com/jennohjenn/dalek</a>. Eller klona med kommandot: <b>git clone git://github.com/jennohjenn/dalek.git</b> i Git Bash.

* Ladda upp ramverket där du vill ha det på studentservern. Använder du FTP-program för att ladda upp filer, så högerklickar du på mappen <b>site/data</b> och skriver in <b>777</b> på filrättigheter, för att den ska vara skrivbar. I Git Bash skriver du: <b>cd dalek; chmod 777 site/data</b> för att uppnå samma sak.

* För att använda ramverket på studentservern behöver du i filen <b>.htaccess</b> ändra raden <b>RewriteBase /~ergi13/phpmvc/dalek</b> till din användare och valda mapp för att det skall fungera. 

När du laddat upp ramverket på studentservern öppnar du den i din browser och klickar på <b>module/install</b>. Då initieras databasen och användarna <b>root</b> och <b>doe</b> skapas.

Ramverket är nu installerat.


Ändra logo, webbplatsens titel, footer och navigeringsmeny
----------------------------------------------------------

Skapa sida/blogg
----------------

När du är inloggad ser startsidan annorlunda ut och till höger under <b>Controllers and methods</b> finner du <b>content</b>. Om du klickar på den kommer du till översikten av sidans, i databasen, redan skapat innehåll. Här kan du ändra/uppdatera innehåll och skapa nytt. 

Du kan skapa en <b>sida</b> eller en <b>bloggpost</b>. Detta fyller du i under <b>Type:</b> <b>Key:</b> fyller dy i vad som kommer bli del av sökvägen.

Bloggposten hamnar av sig själv under länken My Blog i navigeringen, men om du skapar en ny sida så behöver du öppna <b>site/config.php</b> och under <b>my-navbar</b> lägger till namnet på nya sidan. T ex, <pre>'newpage' => array('label'=>'NewPage', 'url'=>'my/newpage'),</p>.


