<h1>Metoda půlení intervalu</h1><?php

function f($x){
  return $x*$x - 4;
}

$x0 = -11.5;
$x1 = 11.5;
$eps = 0.001;

function mpi($x0,$x1,$eps){
    $y0 = f($x0);
    $y1 = f($x1);
    $xp = ($x0 + $x1) / 2;
    $yp = f($xp);
    $i = 0;

    //echo "<p>x0 = $x0, y0 = $y0<br />x1 = $x1, y1 = $y1<br />xp = $xp, yp = $yp<br /></p>";

    while(abs($yp)>$eps and $i<100):
      $i++;
      if($y0*$yp>0):
        $x0 = $xp;
        $y0 = $yp;
      else:
        $x1 = $xp;
        $y1 = $yp;
      endif;

      $xp = ($x0 + $x1) / 2;
      $yp = f($xp);

      //echo "<p>i = $i<br />x0 = $x0, y0 = $y0<br />x1 = $x1, y1 = $y1<br />xp = $xp, yp = $yp<br /></p>";
    endwhile;

    return $i<100 ? $xp : false;
}

echo mpi($x0, $x1, $eps);

?>
