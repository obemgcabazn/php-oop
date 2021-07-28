<?php


class ProcessSale {
  private $callbacks;

  public function registerCallback( callable $callback ){
    if( !is_callable( $callback ) ) {
      throw new Exception( "Функция обратного вызова - невызываемая!" );
    }
    $this->callbacks[] = $callback;
  }

  public function sale( Product $product ){
    echo_br( "{$product->name}: обрабатывается..." );
    foreach( $this->callbacks as $callback ) {
      call_user_func( $callback, $product );
    }
  }
}
