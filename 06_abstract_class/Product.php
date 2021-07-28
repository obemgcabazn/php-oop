<?php

abstract class Product {
  private   $sku;
  private   $name;
  protected $type = null;

  public function __construct ( $sku, $name ) {
    $this->sku = $sku;
    $this->name = $name;
  }

  public function getName () {
    return $this->name;
  }

  // Будет выводить тип дочернего класса
  public function getType () {
    return $this->type;
  }
}

class ProductChair extends Product {
  protected $type = "chair";
}

class ProductTable extends Product {
  protected $type = "table";
}

class ProductFactory {
  public static function build ( $ProductType, $sku, $name ) {

    $product = "Product" . ucfirst( $ProductType );

    if( class_exists( $product ) ) {
      return new $product( $sku, $name );
    } else {
      throw new \Exception( "Нет такого типа продукта" );
    }
  }
}
