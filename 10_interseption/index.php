<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'Person.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Методы Перехватчики</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <h1>Методы Перехватчики</h1>

  <?php
    $p = new interseptions\Person( "Alex" );
    echo_br( $p->name );
    $p->name = "Gunter";
    echo_br( $p->name );
  ?>
</div>
</body>
</html>
