<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'ProcessSale.php';
require 'Product.php';
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
        echo "Записать {$product->name}";
    };
    $processor = new ProcessSale();
    $processor->add_action( $logger );

    $processor->do_action( $p );

    ?>
</div>
</body>
</html>

