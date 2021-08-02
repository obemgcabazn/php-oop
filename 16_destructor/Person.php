<?php


class Person {
    protected $name;
    private $age;
    private $id;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function __destruct() {
        if(! empty($this->id)){
            echo "Сохранение персональных данных." . "<br>";
        }
    }
}