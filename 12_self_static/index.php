<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );

require './../assets/print_function.php';

require 'DomainObject.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Позднее статическое связывание</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <h1>Позднее статическое связывание</h1>

  <?php
    $a = selfstatic\Document::create();
    var_dump_pre($a);
  ?>
</div>
</body>
</html>
