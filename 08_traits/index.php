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
  <title>Трейты</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <h1>Трейты</h1>

  <?php
  $a = new Product( "Table", 15 );
  echo_br( $a->calcTax( 9000 ) );

  echo_br( ProductWriter::write( $a ) );

  // Argument 1 passed to ProductWriter::write() must implement interface PriceUtilitiesInt
  $b = new OtherProduct( "Car" );
  echo_br( ProductWriter::write( $b ) );

  ?>
</div>
</body>
</html>
