<?php 

include(__DIR__.'/config.php'); 



$FRD['title'] = "Hello World";

$FRD['header'] = <<<EOD
<img class='sitelogo' src='img/FRD.png' alt='FRD Logo'/>
EOD;


$FRD['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur FRD ser ut och fungerar.</p>
EOD;

$FRD['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Kevin Paulsson (kevinpaulsson95@gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



include(FRD_THEME_PATH);
