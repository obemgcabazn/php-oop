<?php

// & перед $count означает, что она передается по ссылке
// use отвечает за наследование переменных из родительской области видимости

class Totalizer {
    public static function warnAmmount($amt){
        $count = 0;
        return function(Product $product) use ($amt, &$count) {
            $count += $product->price;
            echo_br( "Сумма покупки: $count" );
        };
    }
}