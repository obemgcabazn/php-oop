<?php

namespace delegatemethod;

class Person {
    private $name;
    private $age;
    public  $writer;

    public function __construct(
        string $name,
        float $age,
        PersonWriter $w
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->writer = $w;
    }

    public function __call( string $method, array $arguments ) {

        // method_exists - проверяет существует ли метод в данном классе. Нужно передпть экземпляр объекта или класс
        if (method_exists( $this->writer, $method )) {
            return $this->writer->$method( $this );
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}