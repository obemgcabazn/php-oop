<?php
namespace inheritance\cdproduct;

require 'ShopProduct.php';
use inheritance\shopproduct\ShopProduct;

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

  public function getSummaryLine(): string {
    $str = parent::getSummaryLine();
    $str .= " : Время звучания - {$this->playLength}";
    return $str;
  }
}
