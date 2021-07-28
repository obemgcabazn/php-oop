<?php
define("CLASS_EMPLOYES", 1);

class Employes{
  private $name;
  private $age;

  public function __construct (
    string $name,
    string $age
  ) {
    $this->name = $name;
    $this->age = $age;
  }

  public function getAge(){
    return require 'methods/class.employes.getAge.php';
  }
}
