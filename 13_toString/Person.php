<?php

namespace tostringmethod;

class Person {
  private $name;

  public function __construct( string $name){
    $this->name = $name;
  }

  public function __toString(){
    return "Person " . $this->name;
  }
}
