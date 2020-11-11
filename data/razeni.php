<h1>Řazení</h1>
<?php
function nejmensi($pole){
    $n = $pole[0];
    for($i=1;$i<count($pole);$i++)
        if($pole[$i]<$n) $n = $pole[$i];
    return $n;
}

//echo nejmensi(array(50,30,10,-5,21,32,-7,45,0,61));

function bubblesort($p){
    if(!is_array($p)) return false;
    for($i=0;$i<count($p)-1;$i++):
        $hotovo = 1;
        for($j=0;$j<count($p)-1-$i;$j++):
            if($p[$j]>$p[$j+1]):
                $kybl = $p[$j];
                $p[$j] = $p[$j+1];
                $p[$j+1] = $kybl;
                $hotovo = 0;
            endif;
        endfor;
        if($hotovo) return $p;
    endfor;
    return $p;
}

function bubblesort2($p){
    echo "<tr><td>".implode("</td><td>",$p)."</td></tr>";
    for($i=0;$i<count($p)-1;$i++):
        $hotovo = 1;
        for($j=0;$j<count($p)-1-$i;$j++):
            if($p[$j]>$p[$j+1]):
                $kybl = $p[$j];
                $p[$j] = $p[$j+1];
                $p[$j+1] = $kybl;
                $hotovo = 0;
            endif;
        endfor;
        echo "<tr><td>".implode("</td><td>",$p)."</td></tr>";
        if($hotovo) return $p;
    endfor;
    return $p;
}

$a = array(50,30,80,21,32,-7,45,0,-61);
$b = array(5,13,80,21,32,45,61);

//print_r($a);
/*
?><table><?php
bubblesort2($b);
?></table><?php
*/

function selectionsort($p){
    if(!is_array($p)) return false;
    $s = array();
    $n = count($p);
    for($i=0;$i<$n;$i++):
        $nejm = $p[0];
        $nejm_i = 0;
        foreach($p as $k=>$v):
            if($v<$nejm):
                $nejm = $v;
                $nejm_i = $k;
            endif;
        endforeach;
        //echo $nejm." ";
        $s[] = $nejm;
        unset($p[$nejm_i]);
    endfor;
    return $s;
}

/*
print_r($a);
unset($a[2]);
*/
print_r($a);
print_r(selectionsort($a));
?>
