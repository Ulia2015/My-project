<!DOCTYPE html>
<head>
  <meta  charset=utf-8">
  <title>Домашнее задание 2</title>
 </head>
 <body>
<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter, time() + 86400);
$_COOKIE['counter'] = $counter;
if (isset($_COOKIE['counter'])) { echo 'Вы посетили наш сайт ' . $_COOKIE['counter'] . ' раз!'; }
?>
</body>
</html>