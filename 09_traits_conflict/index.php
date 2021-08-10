<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'Product.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Конфликты в Трейтах</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <h1>Конфликты в Трейтах</h1>
  <?php

  $a = new traitsconflict\Table( "Table", 9000 );
  echo_br( $a->getPrice() );

  // так вызвать не получиться, потому что метод объявлен как private
  // echo_br(TaxTool::calculateTax(500));

  // такой вызов получится, потмоу что переопределены права доступа в классе
  echo_br(traitsconflict\Table::calculateTax(500));

  // Все вызовы будут работать, в том числе через экземпляр класса
  echo_br($a::calculateTax(500));
  ?>
</div>
</body>
</html>
