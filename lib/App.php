<?php

class App {

    protected $controller = "HomeController";
    protected $method = "actionIndex";
    protected $params = [];


    public function __construct() {
        $url = $this->parseUrl();

        $controllerName = ucfirst(strtolower($url[0]))."Controller";
        if (file_exists(APP_PATH."controllers/".$controllerName.".php")) {
            $this->controller = $controllerName;
            unset($url[0]);
        }
        require APP_PATH."controllers/".$controllerName.".php";

        $this->controller = new $this->controller;

        if (isset($url[1])) {
            $methodName = "action".ucfirst(strtolower($url[1]));

            if (method_exists($this->controller, $methodName)) {
                $this->method = $methodName;
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : $this->params;

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
        }
    }

}
