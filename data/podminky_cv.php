<html>
<h1>Podmínky – cvičení</h1>
<h2>Prvočíslo</h2><?php
$x = 37;
/*
if($x%2 and $x%3 and $x%5 and $x%7)
    echo "$x je prvočíslo.";
else
    echo "$x není prvočíslo.";
*/

echo "Číslo $x " . (($x%2 and $x%3 and $x%5 and $x%7) ? "je" : "není") . " prvočíslo.";


?><h2>Kvadratická rovnice</h2><?php
$a = 1;
$b = 5;
$c = 1;

if($a==0):
    if($b==0):
        echo "Nemá řešení nebo není smysluplné.";
    else:
        $x = -$c/$b;
        echo "Řešení:<br />x = $x";
    endif;
else:
    $d = $b*$b - 4*$a*$c;
    if($d<0):
        echo "Nemá řešení.";
    else:
        $x1 = (-$b + sqrt($d)) / (2*$a);
        $x2 = (-$b - sqrt($d)) / (2*$a);
        echo "Řešení:<br />x<sub>1</sub> = ";
        echo number_format($x1,3,","," ");
        echo "<br /> x<sub>2</sub> = ";
        echo number_format($x2,3,","," ");
    endif;
endif;


?></html>
