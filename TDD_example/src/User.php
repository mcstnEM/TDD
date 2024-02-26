<?php
namespace App;

class User {
    public function __construct(private string $name, private string $surname) {}

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function hello(string $name): string
    {
        return "Hello $name, I am ".$this->name;
    }
}
