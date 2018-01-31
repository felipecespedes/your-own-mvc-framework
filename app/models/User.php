<?php

namespace app\models;

use \Model;

class User extends Model {

    protected $table = "user";

    public $name;
    public $age;
    public $email;
}
