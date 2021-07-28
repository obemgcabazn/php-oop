<?php

/*
 * Трейты не меняют тип класса, в котором применяются
 * Поэтому не могут использоваться в Сигнатурах
 */

trait PriceUtilities {
  private $tax_rate;

  public function calcTax( float $price ){
    return ( ( $this->tax_rate / 100 ) * $price );
  }
}

/*
 * Для того, чтобы использовать сигнатуры, трейты объединяют с интерфейсами
 * Их названия должны отличаться, иначе это вызовет ошибку.
 */
interface PriceUtilitiesInt {
  public function calcTax( float $price );
}

class Product implements PriceUtilitiesInt {
  use PriceUtilities;

  private $name;

  public function __construct( $name, $tax_rate ){
    $this->tax_rate = $tax_rate;
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }
}

// Продукт другого класса для теста
class OtherProduct {
  private $name;
  public function __construct($name){
    $this->name = $name;
  }
}

// Статический метод пожет принимать только объекты с интерфейсом PriceUtilitiesInt
class ProductWriter {
  public static function write( PriceUtilitiesInt $product ){
    return "Название продукта: " . $product->getName();
  }
}
