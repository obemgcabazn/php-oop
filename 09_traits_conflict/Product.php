<?php

require 'traits.php';

abstract class Product {
  use TaxTool, PriceUnit {

    PriceUnit::calcTax insteadof TaxTool;
    // PriceUnit будет выполнять стандартный вызов

    TaxTool::calcTax as basicTax;
    // TaxTool будет вызывать calcTax под именем basicTax
    // as - назначает псевдоним для метода
  }

  protected $name;
  protected $price;

  public function __construct( $name, $price ){
    $this->name = $name;
    $this->price = $price;
  }

  abstract public function getPrice();
}

class Table extends Product {
  use TaxTool {
    TaxTool::calcTax as basicTax;

    // С помощью псевдонимов можно реализовать абстрактные методы родительского класса
    TaxTool::getRawPrice as getPrice;

    // можем изменить доступность метода с помощью as
    TaxTool::calculateTax as public;
  }

  public function __construct( $name, $price ){
    parent::__construct( $name, $price );
  }
}
