<?php  

include(__DIR__.'/config.php');  

$FRD['title'] = "Me-sida"; 

$FRD['main'] = <<<EOD
<article>
<img class="meBild right" src="img/me.jpg" alt="meBild">
<p>
<h1>Välkommen till min me-sida</h1>
<p>
Välkommen till min sida jag heter Kevin Paulsson och det är jag som skapat denna sida.
</p>
<p>
Jag är 19 år och går på BTH i Kalrskrona, på fritiden gillar jag att spela eller att 
umgås med vänner. Det händer även att jag sitter o bara flum kodar saker. Annars 
brukar jag bygga och koppla ihop saker med datorer vilket är ett av mina största
intressen.
</p>
<p>
Jag har sedan jag var liten växt upp med datorer, fick min första när jag fyllde 5 
och har bara byggt nya sen den dagen.
</p>
</article>
EOD;

include(FRD_THEME_PATH); 
