<?php  
include(__DIR__.'/config.php');  


$FRD['title'] = "Redovisning"; 

$FRD['main'] = <<<EOD
<article class="show">
<h1>Redovisnings Sidan</h1> 
<h2>Kmom01: Kom igång med programmering i PHP</h2>
<p>
	Jag använder mig av Windows 7 på min statinära och Windows 8.1 på min laptop, texteditorn
	som jag använder mig av är Sublimetext.
</p>
<p>
	PHP20 guiden, jag testade en del av exemplen som gicks genom där va lite nya saker
	men det mesta var saker jag redan kunde. Dock en bra guide för de som inte använt sig av php tidigare.	
</p>
<p>
	Min webbmall döpte jag till FRD vilket står för F i Fus, R i Ro och D i Dah. Det blev dettta namnet 
	pga mitt smeknamn som jag fick under nollningen som är Fus Ro Dah.
</p>
<p>
	Jag ändrade runt lite här och där, flyttade vart menyn skulle vara placerad samt la in lite roligare
	fonts och andra saker i min css. Strukturen på Anax eller i mitt fall FRD gillar jag, det är lätt att 
	hitta vad man letar efter och det är tydligt vilka filer som gör vad. Jag kommer antagligen att hitta 
	saker som jag vill ändra senare men det är saker man får fixa med då.
</p>
<p>
	Att få rätt på source.php tog inte specielt lång tid, det jag gjorde va att jag använde mig av 
	CSource filen som jag sedan inkluderade som en modul i min FRD.
</p>
<p>

</p>
</article>
EOD;

include(FRD_THEME_PATH); 
