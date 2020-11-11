<h1>Podmínky</h1>
<?php
$vek = 27;

/*
if($vek < 16)
    echo "Jsi moc malá.";
elseif($vek > 20)
    echo "Jsi moc stará!";
else
    echo "Tebe beru!";
*/

//if($vek < 16 || $vek > 20)
/*
if($vek < 16 or $vek > 20)
    echo "Tebe nechci.";
else
    echo "Tebe beru.";
*/

//if($vek >= 16 && $vek <= 20)
/*
if($vek >= 16 and $vek <= 20)
    echo "Tebe beru.";
else
    echo "Tebe nechci.";
*/

$a = 5;
$b = 4;
/*
if($b)
    echo $a / $b;
else
    echo "Nelze dělit";
*/

/*
if(!$b)
    echo "Nelze dělit";
else
    echo $a / $b;
*/
/*
$a = 0;
$b = 2;
if($b and $c = $a/$b)
    echo $c;
else
    echo "Něco je špatně";
*/
/*
if($vek > 60){
    echo "Jsi příliš stará.";
    echo " Měla bys myslet na důchod.";
    echo " A ne na mladý hezký kluky.";
}
else{
    echo "Ještě se rozmyslím.";
    echo " Jestli jsi dost bohatá.";
    echo " A nejsi plešatá.";
}
*/
/*
if($vek > 60):
    echo "Jsi příliš stará.";
    echo " Měla bys myslet na důchod.";
    echo " A ne na mladý hezký kluky.";
else:
    echo "Ještě se rozmyslím.";
    echo " Jestli jsi dost bohatá.";
    echo " A nejsi plešatá.";
endif;
*/
$a = 15;
$vysledek = ($a%2==0) ? "sudé" : "liché";
?>
