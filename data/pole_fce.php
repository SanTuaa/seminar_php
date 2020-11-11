<h1>Pole – funkce</h1>
<?php
$pole = array(3, -4, 7, 8);

# 1. součet pole
echo "Součet prvků pole je ".array_sum($pole).".</br>";

# 2. největší prvek
echo "Největší prvek pole je ".max($pole).".</br>";

# 3. nejmenší prvek
echo "Nejmenší prvek pole je ".min($pole).".</br>";

# 4. počet prvků prvek
echo "Počet prvků pole je ".count($pole).".</br>";

# 5. průměr prvků prvek
/*
echo "Průměr prvků pole ".
    (count($pole) ? "je ".array_sum($pole)/count($pole) : "nelze spočítat").
    ".</br>";
*/

echo "Průměr prvků pole ";
if(count($pole))
    echo "je ".array_sum($pole)/count($pole);
else
    echo "nelze spočítat";
echo ".</br>";

# 6. pole (ne)obsahuje prvek
$a = 7;
echo "Pole ".(in_array($a,$pole) ? "" : "ne")."obsahuje prvek $a.</br>";

# 7. spojení polí
$p1 = array(2,4,6);
$p2 = array(1,3,5);
$p = array_merge($p1,$p2);
print_r($p);

# 8. pole => řetězec
echo "</br>Pole p obsahuje čísla ".implode(", ", $p)."</br>";

# 9. řetězec => pole
$text = "Franta, Pepa, Lojza, Gusta, Ferda";
$p = explode(", ",$text);
print_r($p);
?>
