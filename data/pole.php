<h1>Pole</h1>
<?php
$pole = array();

# 1.
$pole = array(3, -4, 7, 2);

# 2.
$pole = array(15 => 3, -4, 7, 2);

# 3.
$pole = array(15 => 3, 9 => -4, 30 => 7, 'a' => 2);

# 4.
$pole = array();
$pole[2] = 12;
$pole[6] = -15;
$pole[3] = 6;
$pole[11] = 100;

# 5.
$pole = array();
$pole[] = 12;
$pole[] = -15;
$pole[] = 6;
$pole[] = 100;

# 6. asociativní pole
$pole = array();
$pole['jmeno'] = "Petr";
$pole['prijmeni'] = "Čech";
$pole['povolani'] = "brankář";
$pole['narozeni'] = 1982;

# 7. dvourozměrná pole
$pole = array();
$pole['a'][1] = "bílá věž";
$pole['c'][2] = "bílý pěšec";
$pole['c'][8] = "černý střelec";
$pole['g'][8] = "černý jezdec";

echo "<pre>";
print_r($pole);
echo "</pre>";

?>
