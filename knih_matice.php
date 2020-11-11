<?php
function m($m){
    if(!is_array($m)) return false;
    echo "<table class='m'>";
    foreach($m as $r):
        if(!is_array($r)) return false;
        echo "<tr><td>";
        echo implode("</td><td>",$r);
        echo "</td></tr>";
    endforeach;
    echo "</table>";
    return true;
}

function m_nacti($s,$a="./matice/"){
    if(!file_exists($s_m = "$a$s.txt")) return false;
    $m = array_map("trim",file($s_m));
    foreach($m as $k => $r)
        $m[$k] = explode(" ",$r);
    return $m;
}

function m_soucet($a,$b){
    if(count($a)!=count($b)) return false;
    if(count($a[0])!=count($b[0])) return false;


    for($i=0;$i<count($a);$i++)
      for($j=0;$j<count($a[0]);$j++)
         $a[$i][$j] += $b[$i][$j];

    return $a;
}

function m_t($a){
    $t = array();
    for($i=0;$i<count($a);$i++)
      for($j=0;$j<count($a[0]);$j++)
         $t[$j][$i] = $a[$i][$j];
    return $t;
}

function m_soucin($a,$b){
    $s = array();
    for($i=0;$i<count($a);$i++):
        for($j=0;$j<count($b[0]);$j++):
            $s[$i][$j] = 0;
            for($k=0;$k<count($b);$k++):
                $s[$i][$j] += $a[$i][$k]*$b[$k][$j];
            endfor;
        endfor;
    endfor;
    return $s;
}


function m_det($a, $radek, $sloupec){
    $b = array();
    $nove_i = 0;
    for($i=0;$i<count($a);$i++):
        $nove_j = 0;
        for($j=0;$j<count($a[0]);$j++):
            if(($i != $radek) and ($j != $sloupec)):
                $b[$nove_i][$nove_j] = $a[$i][$j];
            endif;
            if($j != $sloupec) $nove_j++;
        endfor;
        if($i != $radek) $nove_i++;
    endfor;
    return $b;
}



?>
