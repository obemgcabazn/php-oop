<?php


class ShopProduct {
    private $title;
    private $name;
    private $last_name;
    private $price;

    public function __construct( $title, $name, $last_name, $price ) {
        $this->title = $title;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getPrice(){
        return $this->price;
    }
}