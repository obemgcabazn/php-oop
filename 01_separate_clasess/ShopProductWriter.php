<?php

class ShopProductWriter {
    private $title;
    private $name;
    private $last_name;
    private $price;

    public function __construct( ShopProduct $product ) {
        $this->title = $product->getTitle();
        $this->name = $product->getName();
        $this->last_name = $product->getLastName();
        $this->price = $product->getPrice();
    }

    public function write() {
        return $this->title . ": " . $this->name . " " . $this->last_name . ". По цене - " . $this->price . " руб.";
    }
}