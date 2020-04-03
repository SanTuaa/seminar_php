<?php
session_start();
include_once "../knih_matice.php";
$m = $_GET[m];
$mt = m_transponovat($_SESSION[m][$m]);
$_SESSION[m][$m] = $mt;
header("Location: $_SERVER[HTTP_REFERER]");
?>