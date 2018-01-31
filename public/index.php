<?php

chdir(dirname(__DIR__));

define("CORE_PATH", "core/");
define("APP_PATH", "app/");

require_once CORE_PATH."Autoloader.php";

$app = new App();
