<?php
session_start();
$m = $_GET[m];
unset($_SESSION[m][$m]);
header("Location: $_SERVER[HTTP_REFERER]");
?>