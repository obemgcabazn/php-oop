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
    <title>Интерфейсы</title>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
    <h1>Интерфейсы</h1>
    <?php

    $a = new interfaces\Product( "Table", "4.25", "20" );
    echo $a->getPrice();

    ?>
</div>
</body>
</html>

