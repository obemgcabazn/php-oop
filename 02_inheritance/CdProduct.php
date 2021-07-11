<?php
require 'ShopProduct.php';

class CdProduct extends ShopProduct {
  protected $playLength;

  public function __construct(
    string $title,
    string $producerFirstName,
    string $producerLastName,
    float $price,
    float $playLength
  ) {
    parent::__construct($title, $producerFirstName, $producerLastName, $price);
    $this->playLength = $playLength;
  }

  public function getSummaryLine() {
    $str = parent::getSummaryLine();
     $str .= " : Время звучания - {$this->playLength}";
    return $str;
  }
}