<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require( 'ShopProduct.php' );
require( 'ShopProductWriter.php' );

/*
 * ShopProduct отвечает за хранение данных о товаре,
 * а ShopProductWriter за их вывод
 */

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <?php
  $a = new ShopProduct( 'Записки молодого врача', "Михаил", "Булгаков", "300" );

  /*
   * Мы установили ограничение в конструкторе ShopProductWriter
   * __construct( ShopProduct $a )
   * чтобы передавать туда только объекты класса ShopProduct
   */
  $b = new ShopProductWriter( $a );

  echo $b->write();
  ?>
</div>
</body>
</html>
