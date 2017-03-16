<?php

use app\common\components\validators\Unique;
use Phalcon\Mvc\Model\Validator\PresenceOf;
use Phalcon\Mvc\MongoCollection;

class Users extends MongoCollection {

    public $name;
    public $password;

    public function validation() {
        $this->validate(new PresenceOf([
            "field" => "name",
            "message" => "The name is required",
        ]));
        $this->validate(new PresenceOf([
            "field" => "password",
            "message" => "The pasword is required",
        ]));
        $this->validate(new Unique([
            "field" => "name",
            "message" => "Name must be unique",
        ]));

        return $this->validationHasFailed() !== true;
    }

}
