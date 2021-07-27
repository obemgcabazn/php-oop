<?php


class StaticExample {
  static public $aNum = 0;

  public static function sayHello() {
    return "Hello!";
  }
}

class AnotherStatic extends StaticExample {
  static public $aNum = 1;

  public static function sayHello() {
    $str = parent::sayHello();

    // Добавит 1 из текущего класса
    $str .= " " . self::$aNum;

    // Добавил 0 из родительского класса
    $str .= " " . parent::$aNum;
    return $str;
  }
}