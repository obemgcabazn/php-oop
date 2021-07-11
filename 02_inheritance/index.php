<?php
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div>
  <h1>Наследование</h1>
  <p>Дочерний класс CdProduct наследует от ShopProduct конструктор и метод getSummaryLine(), дополняя их.</p>
  <?php
  require 'CdProduct.php';

  $a = new CdProduct(
    "Empty Walls",
    "Serge",
    "Tankian",
    "3.5",
    "2.15" );

  echo $a->getSummaryLine();
  ?>
</div>
</body>
</html>