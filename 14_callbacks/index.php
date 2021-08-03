<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'ProcessSale.php';
require 'Product.php';
require 'Mailer.php';
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
    <h1>toString</h1>

    <?php
    $p = new Product( "Туфли", 3.50 );
    $logger = function ( Product $product ) {
        echo "Записать {$product->name} <br>";
    };
    $processor = new ProcessSale();
    $processor->add_action( $logger );

    // в call_user_func([ '', '' ]) можно передать массив, либо
    // call_user_func(array($classname, 'say_hello'));
    // call_user_func($classname .'::say_hello'); // Начиная с версии 5.2.3

    $processor->add_action([new Mailer(), "doMailer"]);

    $processor->do_action( $p );

    ?>
</div>
</body>
</html>

