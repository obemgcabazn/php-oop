<?php

/*
 * Метод перехватывает обращение к свойству
 */

class Person {
  // __get срабатывает при попытке прочитать значение несуществующего или скрытого (private, protected) свойства

  private $name;

  public function __construct( $name ){
    $this->name = $name;
  }

  // Без этого Fatal error: Cannot access private property
  public function __get( $prop ){
    $method = "get{$prop}";

    if( method_exists( $this, $method ) ) {

        return $this->$method();
    }
  }

  public function getName(): string{
    return $this->name;
  }

  public function __set( $prop, $val ){
    $method = "set{$prop}";

    if( method_exists($this, $method)) {
      $this->$method($val);
    }
  }

  public function setName( $name ): void{
    $this->name = $name;
  }
}
