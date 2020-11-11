<?php
session_start();
file_put_contents("../matice/$_POST[soubor].txt",$_POST[matice]);
header("Location: $_SERVER[HTTP_REFERER]");
?>
