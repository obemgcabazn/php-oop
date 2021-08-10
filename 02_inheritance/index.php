<?php
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <h1>Наследование</h1>
  <p>Дочерний класс CdProduct наследует от ShopProduct конструктор и метод getSummaryLine(), дополняя их.</p>
  <?php
  require 'CdProduct.php';

  $a = new \inheritance\cdproduct\CdProduct(
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
