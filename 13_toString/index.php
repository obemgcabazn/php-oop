<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'Person.php';
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
    $p = new Person( "Alex" );

    // Автоматически сработает метод __toString()
    echo $p;
    ?>
  </div>
  </body>
  </html>
<?php
