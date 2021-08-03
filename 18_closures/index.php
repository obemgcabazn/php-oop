<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'Product.php';
require 'ProcessSale.php';
require 'Totalizer.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>toString</title>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
    <h1>Замыкания</h1>
    <?php
    $a = new Product( "Туфли", 20 );
    $b = new Product( "Джинсы", 30);


    $processor = new ProcessSale();
    $processor->add_action( Totalizer::warnAmmount( 1 ) );
    $processor->do_action( $a );
    $processor->do_action( $b );
    ?>

    <h2>Работа нового объекта ProcessSale()</h2>

    <?php

    $newProcessor = new ProcessSale();
    $newProcessor->add_action(Totalizer::warnAmmount(2));
    $newProcessor->do_action($b);
    ?>
</div>
</body>
</html>

