<?php

class Response {

    private function __construct() {
    }

    public static function render($view, $vars = []) {
        foreach ($vars as $key => $value) {
            $$key = $value;
        }

        require APP_PATH."views/".$view.".php";
    }

}
