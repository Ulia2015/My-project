<?php
if (isset($_COOKIE['test'])) { setcookie("test", ''); }
if ( ! isset($_COOKIE['test'])) { echo "Cookies are unset"; }
?>
