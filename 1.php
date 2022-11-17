
<?php
setcookie("test", '123', time() + 86400);
if (isset($_COOKIE['test'])) { echo "Cookie value = " . $_COOKIE['test']; }
?>
