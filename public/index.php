<?php

chdir(dirname(__DIR__));

define("SYS_PATH", "lib/");
define("APP_PATH", "app/");

require SYS_PATH."Router.php";
require APP_PATH."http/routes.php";
require SYS_PATH."Response.php";

$url = $_GET["url"];

try {
    $action = Router::getAction($url);

    $controllerName = $action["controller"];
    $method = $action["method"];

    require APP_PATH."controllers/".$controllerName.".php";

    $controller = new $controllerName();
    $controller->$method();

} catch (Exception $e) {
    echo $e->getMessage();
}
