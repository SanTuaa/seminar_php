<h1>Cykly</h1>

<h2>for</h2><?php
# 1.
/*
for($i=1;$i<=5;$i++):
    echo "$i. ";
    echo "Ahoj";
    echo "<br />";
endfor;

echo "Tak to byly pozdravy.";
*/

# 2. zacyklení (nespouštět)
/*
for($i=1;$i>=0;$i++)
    echo "$i. ";
*/

# 3. proměnná $i se zmenšuje
/*
for($i=5;$i>=1;$i--):
    echo "$i. ";
    echo "Ahoj";
    echo "<br />";
endfor;
*/

# 4. proměnná $i se zvětšuje/zmenšuje o více než 1
/*
for($i=0;$i<=5;$i+=2):
    echo "$i. ";
    echo "Ahoj";
    echo "<br />";
endfor;
*/

# 5. násobilka
/*
for($i=0;$i<=10;$i++):
    echo (3*$i)." ";
endfor;
*/

# 6. programátorská prasárna
/*
$i = 0;
for(;;):
    if($i>10) break;
    echo (3*$i)." ";
    $i++;
endfor;
*/

# 7.
/*
for($i=0,$j=0;$i<10;$i++,$j+=2):
    echo ($j+$i)." ";
endfor;
*/

# 8. výpis pole
$pole = array(5,15,-3,6,9,-1,2,9,4);
for($i=0;$i<count($pole);$i++)
    echo $pole[$i]." ";

?><h2>while</h2><?php
# 1.
/*
$i = 0;
while($i<=10):
    echo $i." ";
    $i++;
endwhile;
*/

# 2.
/*
$i = 0;
while($i<=10)
    echo ($i++)." ";
*/

# 3. výpis pole (nenulového)
/*
$pole = array(5,15,-3,6,9,-1,2,9,4);

$i = 0;
while($pole[$i]):
    echo $pole[$i]." ";
    $i++;
endwhile;
*/

# 4. výpis pole
$pole = array(5,15,-3,6,9,-1,2,9,4);

$i = 0;
while($i<count($pole)):
    echo $pole[$i]." ";
    $i++;
endwhile;


?><h2>do-while</h2><?php
$i = 0;
do{
    echo (3*$i)." ";
    $i++;
}while($i<=10);


?><h2>foreach</h2><?php
# 1. nezajímají mě indexy
$pole = array(
      'jmeno'=>'Petr',
      'prijmeni'=>'Čech',
      'povolani'=>'brankář'
    );

foreach($pole as $v)
    echo $v."<br />";

# 2. potřebuju i indexy
foreach($pole as $k => $v)
    echo "Pod indexem $k je hodnota $v.<br />";

?><h2>Příklad násobilka do tabulky</h2><?php
echo "<table>";
for($i=1;$i<=10;$i++):
    if($i==7) continue;
    echo "<tr>";
    for($j=1;$j<=10;$j++):
        echo "<td>".($i*$j)."</td>";
    endfor;
    echo "</tr>";
endfor;
echo "</table>";
