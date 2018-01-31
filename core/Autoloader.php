<?php

class Autoloader {

    public function __construct() {
        $this->loadAppClasses();
    }

    private function loadAppClasses() {
        spl_autoload_register(function($className) {
            require_once preg_replace("/\\\\/", "/", $className).".php";
        });
    }
}

new Autoloader();
