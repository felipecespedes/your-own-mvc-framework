<?php

class MainController {

    public function index() {
        $user = User::find(1);
        Response::render("home", ["name" => $user->name, "age" => $user->age, "email" => $user->email]);
    }

    public function about() {
        echo "About this mvc project";
    }

}
