<?php
ini_set( 'error_reporting', E_ALL);
ini_set('display_errors', 1);

require './../assets/print_function.php';

require 'Employes.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Скрытые реализации методов</title>
</head>
<body>
<div>
  <h1>Скрытые реализации методов</h1>
  <p>Выносим методы в отдельный файл и запрещаем обращаться к нему напрямую</p>

<?php
  $a = new Employes( "Alex", 24 );
  echo_br( "Работнику " . $a->getAge() . " года (лет)" );
?>
</div>
</body>
</html>

