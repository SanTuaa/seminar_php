<?php
define('GRAV',9.81);
?><h1>Funkce</h1><?php

function kvadr($a,$b,$c){
    return 2*($a*$b + $a*$c + $b*$c);
}

$k = 5;
$l = 6;
$m = 10;
echo "Povrch kvádru o rozměrech $k, $l, $m je ";
echo kvadr($k,$l,$m);
return;





function pozdrav($osloveni){
  echo "Dobrý den, $osloveni<br />";
}

$jmeno = "Franto";
//pozdrav($jmeno);
//pozdrav("jak se máte?");

function soucet($a,$b){
    $c = $a + $b;
    return $c;
}

$vysledek = soucet(2,3);
//echo $vysledek;

function grav_sila($m){
    return GRAV*$m;
}

$m = 15;
//echo "Těleso o hmotnosti $m kg působí gr. silou ";
//echo grav_sila($m)." N.";

function vypis_ceny($cena,$mena="Kč"){
    echo "Zboží stojí $cena $mena<br />";
}

//vypis_ceny(15);
//vypis_ceny(3,"EUR");

/*
$a = 10;
echo $a;

function zmen(){
  global $a;
  echo $a;
}

zmen();
echo $a;
*/

function fakt1($n){
    $f = 1;
    for($i=2;$i<=$n;$i++)
        $f *= $i;
    return $f;
}

function fakt2($n){
    if($n<2)
        return 1;
    else
        return $n*fakt2($n-1);
}

function fakt3($n){
    return ($n<2) ? 1 : $n*fakt2($n-1);
}

echo fakt3(6);


?>
