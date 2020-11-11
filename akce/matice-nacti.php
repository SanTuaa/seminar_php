<?php
session_start();
include "../knih_matice.php";

$_SESSION[m][$_GET[m]] = m_nacti($_GET[m],"../matice/");

header("Location: $_SERVER[HTTP_REFERER]");
?>
