<?php
error_reporting( E_ALL );
ini_set( 'display_startup_errors', 1 );
ini_set( 'display_errors', '1' );

require 'Person.php';
require 'PersonWriter.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>14 Делегирование методов с __call</title>
</head>
<body>
<div>
  <?php
  $a = new Person( "Alex", 32, new PersonWriter() );

  echo $a->writeAge();
  ?>
</div>
</body>
</html>
