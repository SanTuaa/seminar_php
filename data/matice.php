<?php
$soubory = glob("./matice/*.txt");

foreach($soubory as $f):
    $arr = explode(".", $f);
    $f = $arr[1];
    $arr = explode("/", $f);
    $f = $arr[2];
    echo "<a href='./akce/matice-nacti.php?m=$f'>$f</a> ";
endforeach;

?><h2>Načtené matice</h2><?php
foreach($_SESSION[m] as $n => $m):
    echo "<h3>$n</h3>";
    m($m);
    echo "x";
endforeach;

m(m_det($_SESSION[m][a],1,2));

//$s = m_soucin($_SESSION[m][e],$_SESSION[m][f]);
//m($s);

/*
$a = m_nacti("a");
m($a);
*/

?>
