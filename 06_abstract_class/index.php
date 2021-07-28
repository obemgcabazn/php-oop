<?php
ini_set( 'error_reporting', E_ALL);
ini_set('display_errors', 1);

require './../assets/print_function.php';

require 'Product.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Абстрактные классы</title>
</head>
<body>
<div>
  <h1>Абстрактные классы</h1>
  <?php

  // Используем статический метод build для создания объектов
  $a = ProductFactory::build("table", "123sku", "Monarch");
  echo_br($a->getName() . " - это " . $a->getType() );

  $b = ProductFactory::build("Chair", "321sku", "President");
  echo_br($b->getName() . " - это " . $b->getType() );

  /*
   * $c = new Product("asd", "AbsName");
   *
   * Так как класс абстрактный, то такой вызов приведет к
   * Fatal error: Uncaught Error: Cannot instantiate abstract class Product
   */

  ?>
</div>
</body>
</html>

