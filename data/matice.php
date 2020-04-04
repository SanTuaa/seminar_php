<?php
$soubory = glob("./matice/*.txt");

?><h2>Načíst matici</h2><?php
if(!empty($soubory)):
  foreach($soubory as $f):
      $res = explode(".",$f);
      $f = $res[1];
      $res = explode("/",$f);
      $f = $res[2];
      echo "<a href='./akce/matice-nacti.php?m=$f'>$f</a> ";
  endforeach;
endif;

echo "<h2>Načtené matice</h2>";
if(count($_SESSION[m])==true):
  foreach($_SESSION[m] as $n => $m):
      echo "<h3>$n</h3>";
      m($m);
      $maticeLocal[] = $m;
      echo "<a href='./akce/matice-smaz.php?m=$n'>Smazat</a> ";
      echo "<a href='./akce/matice-trans.php?m=$n'>Transponovat</a> ";
      if (count($m) == count($m[0]))
        echo "Determinant ".m_determinant($m);
  endforeach;
endif;

echo "<h2>Maticový součet</h2>";

$m1 = $_SESSION[m][a];
$m2 = $_SESSION[m][b];
$mSouc = m_soucet($m1,$m2);
echo "<h3>a + b</h3>";
m($mSouc);

echo "<h2>Maticový součin</h2>";
$m3 = $_SESSION[m][soucin1];
$m4 = $_SESSION[m][soucin2];
$mSoucin = m_soucin($m3,$m4);
m($mSoucin);

echo "<h2>Determinant matice</h2>";
$det = m_determinant($_SESSION[m][det2]);
echo $det;

echo "<h2>Inverzní matice</h2>";
$inv = m_inverzni($_SESSION[m][inv]);
m($inv);
m(m_soucin($inv, $_SESSION[m][inv]))

?>
