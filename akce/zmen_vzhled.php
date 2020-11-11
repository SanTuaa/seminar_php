<?php
session_start();
$_SESSION[styl] = $_GET[styl];
header("Location: $_SERVER[HTTP_REFERER]");
?>
