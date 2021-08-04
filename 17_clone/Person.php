<?php


class Person {
    protected $name;
    private   $age;
    private   $id;
    public    $account;

    public function __construct( string $name, int $age, Account $account ) {
        $this->name = $name;
        $this->age = $age;
        $this->account = $account;
    }

    public function setId( int $id ) {
        $this->id = $id;
    }

    public function __clone() {
        $this->id = 0;
        $this->account = clone $this->account;
    }

    public function printPerson() {
        $str = "<p>Имя: " . $this->name . ",<br>";
        $str .= "Возраст: " . $this->age . ",<br>";
        $str .= "id: " . $this->id . ",<br>";
        $str .= "Баланс: " . $this->account->balance . "</p>";
        return $str;
    }
}