<?php
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');

require 'StaticExample.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div>
  <?php
    echo AnotherStatic::sayHello();
  ?>
</div>
</body>
</html>
