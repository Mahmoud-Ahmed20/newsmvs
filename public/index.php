<?php

//this locahoin folders
define("DS",DIRECTORY_SEPARATOR);
define ("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFING",APP.DS.'confing');
define("CONTROLLERS",APP.DS.'controllers');
define("CORE",APP.DS.'core');
define("MODELS",APP.DS.'models');
define("VIEWS",APP.DS.'views');

//config
define("SERVER","localhost");
define("PASSOWRD","");
define("USERNAME","root");
define("DATABASE","first_news_project");
define("DATABASE_TYPE","mysql");
define("PORT","3306");
define("CHARSET","utf8");
define("DOMAIN_NAME","http://news.test/");
define("DESIGN",DOMAIN_NAME.'');

//this file autoload.php

require_once ("../vendor/autoload.php");

// this objact class app 

$app = new news\core\app();






