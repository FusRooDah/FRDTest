<?php

error_reporting(-1);             
ini_set('display_errors', 1);     
ini_set('output_buffering', 0);   

define('FRD_INSTALL_PATH', __DIR__ . '/..');
define('FRD_THEME_PATH', FRD_INSTALL_PATH . '/theme/render.php');

include(FRD_INSTALL_PATH . '/src/bootstrap.php');

session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();

$FRD = array();

$FRD['lang']         = 'sv';
$FRD['title_append'] = ' | FRD';

$FRD["menu"] = array(
  'me'  => array('text'=>'Me',  'url'=>'index.php'),
  "redovisning" => array('text'=>'Redovisning', "url"=>"redovisning.php"),
  "source" => array("text" => "Källkod", "url" => "source.php"),
);

$FRD['header'] = <<<EOD
<img class='sitelogo' src='img/FRD.png' alt='FRD Logo'/>
EOD;

$FRD['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Kevin Paulsson (kevinpaulsson95@gmail.com) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$FRD['stylesheets'] = array('css/style.css');
$FRD['favicon']    = 'favicon.ico';

$FRD['modernizr'] = 'js/modernizr.js';
$FRD['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$FRD['javascript_include'] = array();

$FRD['google_analytics'] = 'UA-22093351-1';
