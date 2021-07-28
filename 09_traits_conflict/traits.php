<?php

// Трейты могут реализовывать методы с одинаковыми именами
trait TaxTool {
  private static $taxrate = 17;

  public function calcTax(){
    return $this->getPrice() / 10;
  }

  public function getRawPrice(){
    return $this->price;
  }

  private static function calculateTax( float $price ): float{
    return ( ( self::$taxrate / 100 ) * $price );
  }
}

trait PriceUnit {
  public function calcTax(){
    return $this->price;
  }
}
