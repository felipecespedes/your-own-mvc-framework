<?php

chdir(dirname(__DIR__));

define("SYS_PATH", "lib/");
define("APP_PATH", "app/");

require SYS_PATH."init.php";

$app = new App();
