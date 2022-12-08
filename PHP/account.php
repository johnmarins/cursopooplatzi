<?php

class Account {
    public $id = integer;
    public $name = string;
    public $docuemnt = string;
    public $email = string;
    public $password = string;

    public function __construct($name, $docuemnt) {
        $this->name = $name;
        $this->document = $document;
    }
}

?>