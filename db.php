<?php
if($_SERVER["SERVER_ADDR"]=="127.0.0.1"):
    define(DB_HOST,'localhost');
    define(DB_USERNAME,'root');
    define(DB_PSW,'vertrigo');
    define(DB_NAME,'knihovna');
else:
endif;

$connection = @mysql_connect(DB_HOST, DB_USERNAME, DB_PSW) or die ("Nen� mo�n� p�ipojit datab�zov� server.");
$db = @mysql_select_db(DB_NAME, $connection) or die("Nen� mo�n� vybrat datab�zi.");
@mysql_query ("SET NAMES 'UTF8'", $connection);
?>
