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

function m_soucet($m1,$m2){
  $m = array();
  if (count($m1) != count($m2))
    return false;
  if (count($m1[0]) != count($m2[0]))
    return false;

  for($i=0;$i<count($m1);$i++):
    for($j=0;$j<count($m1[$i]);$j++):
      $m[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
    endfor;
  endfor;
  return $m;
}

function m_transponovat($m){
  $mt = array();

  for($i=0;$i<count($m);$i++):
    for($j=0;$j<count($m[$i]);$j++):
      $mt[$j][$i] = 0;
    endfor;
  endfor;

  for($i=0;$i<count($mt);$i++):
    for($j=0;$j<count($mt[$i]);$j++):
      $mt[$i][$j] = $m[$j][$i];
    endfor;
  endfor;

  return $mt;
}

function m_soucin($m1, $m2){
  if(count($m1[0]) != count($m2))
    return false;
  $m=array();

  for($i=0;$i<count($m1);$i++)
    for($j=0;$j<count($m2[0]);$j++)
      for($k=0;$k<count($m2);$k++)
        $m[$i][$j] += $m1[$i][$k]*$m2[$k][$j];

  return $m;
}

function m_submat($m, $row, $col){
  if(count($m) == 2):
    $row = ($row == 1 ? 0 : 1);
    $col = ($col == 1 ? 0 : 1);
    $result = $m[$row][$col];
    return $result;
  else:
    $result = array();

    $i_res = 0;
    $j_res = 0;
    for($i=0;$i<count($m);$i++):
      if($i != $row):
        for($j=0;$j<count($m[0]);$j++):
          if($j != $col):
            $result[$i_res][$j_res] = $m[$i][$j];
            $j_res++;
          endif;
        endfor;
        $i_res++;
        $j_res = 0;
      endif;
    endfor;

    return $result;
  endif;
}

function m_determinant($m){
  if(is_array($m)):
    $det = 0;
    for($i=0;$i<count($m[0]);$i++):
      $sub = m_submat($m, 0, $i);
      if(is_array($sub)):
        $subdet = m_determinant($sub);
        $add = $m[0][$i] * $subdet;
      else:
        $add = $m[0][$i] * $sub;
      endif;
      if($i % 2 == 1)
        $add *= -1;
      $det += $add;
    endfor;
    return $det;
  else:
    return $m;
  endif;
}

function m_inverzni($m){
    $m_res = array();
    $det = m_determinant($m);
    if(count($m[0]) != count($m))
        return false;
    if(!$det)
        return false;
    for($i=0;$i<count($m);$i++):
        for($j=0;$j<count($m[0]);$j++):
            $res = 1;
            $x = $i + $j;
            if($x % 2 == 1)
                $res *= -1;
            $submat = m_submat($m, $i, $j);
            $res *= m_determinant($submat);
            $res /= $det;
            $m_res[$i][$j] = $res;
        endfor;
    endfor;
    $m_res = m_transponovat($m_res); #snad tohle nezpusobi paseku
    return $m_res;
}
?>
