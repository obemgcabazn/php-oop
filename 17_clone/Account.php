<?php


class Account {
    public $balance;

    public function __construct(int $balance) {
        $this->balance = $balance;
    }
}