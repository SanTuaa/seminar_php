<?php
# vzhled
if(!file_exists($s_vzhled = "./styles/$_SESSION[styl].css"))
    $s_vzhled = "./styles/cerveny.css";


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo DESCRIPTION; if($struktura[$_REQUEST[pg]][description]) echo " ".$struktura[$_REQUEST[pg]][description]?>" />
<meta name="keywords" content="<?php echo KEYWORDS; if($struktura[$_REQUEST[pg]][keywords]) echo ", ".$struktura[$_REQUEST[pg]][keywords]?>" />
<meta name="robots" content="all, follow"/>
<meta name="author" content="<?php=AUTOR?> (<?php=MAIL?>)" />
<link rel="shortcut icon" href="./img/flav.png" type="image/x-icon" />
<link rel="stylesheet" href="./styles/default.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $s_vzhled?>" type="text/css" media="all" />

<title><?php if($pg[nazev]) echo $pg[nazev]." - "; echo TITLE?></title>

</head>
<body>
