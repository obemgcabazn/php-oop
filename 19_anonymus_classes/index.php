<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'PersonWriter.php';
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
<h1>Анонимный класс</h1>
<p>Нужно чтобы при вызове метода output всегда передавался объект с методом write</p>
<p>Поэтому используем интерфейс и соответствующую сигнатуру</p>
<div>
    <?php
    $a = new Person();
    $a->output(
        new class implements PersonWriter {
            public function write( Person $person ) {
                echo "Имя: " . $person->getName() . ", возраст: " . $person->getAge();
            }
        } );
    ?>
</div>
<p>В анонимных классах замыкания не поддерживаются</p>
</body>
</html>

