<?php

class App {

    public function __construct() {
        $url = $this->parseUrl();
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
    }

    public function parseUrl() {
        if (isset($_GET["url"])) {
            return $_GET["url"];
        }
    }

}
