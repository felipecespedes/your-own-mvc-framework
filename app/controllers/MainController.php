<?php

class MainController {

    public function index() {
        Response::render("home", ["greeting" => "Welcome to Codigea!"]);
    }

    public function about() {
        echo "About this mvc project";
    }

}
