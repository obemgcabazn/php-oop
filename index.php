<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require 'assets/print_function.php';
require 'classes/ShopProduct.php';

$product1 = new BookProduct( 'Бессонница', '500', 'Стивен Кинг', '500' );
$product2 = new CDProduct( 'Toxicity', '450', 'System of a down', '153' );

var_dump_pre( get_class_methods( 'ShopProduct' ) );

echo_br( $product1 );
echo_br( $product2 );

?>
</body>
</html>
