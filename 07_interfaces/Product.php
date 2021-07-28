<?php

interface Chargeble {
  public function getPrice(): float;
}

interface Storage {
  public function getQuantity(): int;
}

//Можно передавать несколько интерфейсов
class Product implements Chargeble, Storage {
  private $name;
  private $price;
  private $quantity;

  public function __construct( $name, $price, $quantity ){
    $this->name = $name;
    $this->price = $price;
  }

  public function getPrice(): float{
    return $this->price;
  }

  public function getQuantity(): int{
    return $this->quantity;
  }
}

