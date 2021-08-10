<?php

namespace closures;

class Totalizer {
    public static function warnAmmount($amt){
        $count = 0;
        return function(Product $product) use ($amt, &$count) {
            $count += $product->price;
            echo_br( "Сумма покупки: $count" );
            if($count > $amt ){
              echo "Достаточно<br>";
            }
        };
    }
}
