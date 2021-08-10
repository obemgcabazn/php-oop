<?php
namespace inheritance\shopproduct;


class ShopProduct {
  private $title;
  private $producerFirstName;
  private $producerLastName;
  private $price;

  public function __construct(
    string $title,
    string $producerFirstName,
    string $producerLastName,
    float $price
  ) {
    $this->title = $title;
    $this->producerFirstName = $producerFirstName;
    $this->producerLastName = $producerLastName;
    $this->price = $price;
  }

  public function getProducer () {
    return $this->producerFirstName . " " . $this->producerLastName;
  }

  public function getSummaryLine() : string {
    return "\"{$this->title}\" ( {$this->producerFirstName}, {$this->producerLastName} )";
  }
}
