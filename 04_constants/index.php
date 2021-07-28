<?php
ini_set( 'error_reporting', E_ALL);
ini_set('display_errors', 1);

require './../assets/print_function.php';

require 'Constants.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Константы в классах</title>
</head>
<body>
<div>
  <h1>Константы в классах</h1>
  <?php

    // Константы класса можно получить как статические методы
    echo_br( Constants::PI );
    echo_br( Constants::PUB_C );

    // Константы не доступны через экземпляры класса
    $a = new Constants();
    echo_br( $a->PI );
  ?>
</div>
</body>
</html>

