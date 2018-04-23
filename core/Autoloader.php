<?php

class Autoloader {

    public function __construct() {
        $this->loadVendor();
        $this->loadAppClasses();
        $this->loadDatabase();
    }

    private function loadAppClasses() {
        spl_autoload_register(function($className) {
            require_once preg_replace("/\\\\/", "/", $className).".php";
        });
    }

    private function loadVendor() {
        require_once "vendor/autoload.php";
    }

    private function loadDatabase() {
        require_once CORE_PATH."database.php";
    }
}

new Autoloader();
