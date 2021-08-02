<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'Account.php';
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
    <h1>clone</h1>
    <p>Объекты всегда присваиваются или передаются по ссылке</p>
    <p>Допустим, мы храним в свойстве id ссылку на идентификатор в БД, тогда при клонировании объектов через clone они
        будут ссылаться на одну и ту же запись в БД</p>
    <p>Для этого используется метод __clone()</p>

    <?php
    $p = new Person( "Alex", 33, new Account( 200 ) );
    $p->setId( 1 );

    $a = clone $p;
    ?>
    <p>Мы получим новый объект с новым id</p>

    <?php
    echo $a->printPerson();
    ?>

    <p>После копирования мы прибавим к балансу нового объекта число, но оно отразится на первом объекте</p>
    <p>чтобы такого не было, нужно указать в методе __clone(), что мы копируем и объект Account</p>


    <?php
    $a->account->balance += 10;
    echo $p->printPerson();

    echo $a->printPerson();
    ?>
    <p>Скопировались все свойства кроме id</p>
</div>
</body>
</html>

