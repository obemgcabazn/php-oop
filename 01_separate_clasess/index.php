<?php

require ('ShopProduct.php');
require ('ShopProductWriter.php');

/*
 * ShopProduct отвечает за хранение данных о товаре,
 * а ShopProductWriter за их вывод
 */

$a = new ShopProduct( 'Записки молодого врача', "Михаил", "Булгаков", "300" );

/*
 * Мы установили ограничение в конструкторе ShopProductWriter
 * __construct( ShopProduct $a )
 * чтобы передавать туда только объекты класса ShopProduct
 */
$b = new ShopProductWriter( $a );

echo $b->write();