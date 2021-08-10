<?php

namespace closures;

class ProcessSale {
    private $callbacks;

    public function add_action( callable $callback ) {
        if (!is_callable( $callback )) {
            throw new Exception( "Функция обратного вызова - невызываемая!" );
        }
        $this->callbacks[] = $callback;
    }

    public function do_action( Product $product ) {
        echo_br( "{$product->name}: обрабатывается..." );

        if (count( $this->callbacks ) > 0) {
            foreach ($this->callbacks as $callback) {
                call_user_func( $callback, $product );
            }
        }

    }
}
