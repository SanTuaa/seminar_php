<h1>Knihovna</h1><?php

$count = mysql_num_rows(mysql_query("SELECT * FROM autori"));
$nastranku = 13;
$from = ($_GET[from]) ? $_GET[from] : 0;
if ($_GET[from] < 0) $from = 0;
if ($_GET[from] > ($count - $nastranku)) $from = ($count - $nastranku);

$q = "
    SELECT
        autori.id, autori.jmeno, autori.prijmeni, autori.narozeni, autori.umrti,
        count(knihy.id) AS knih
    FROM
        autori
    LEFT JOIN
        knihy ON knihy.id_autora = autori.id
    GROUP BY
        autori.id
    ORDER BY
        knih DESC, autori.prijmeni
    LIMIT
        $from, $nastranku
    ";



$id_v = mysql_query($q);

echo mysql_error();

$i = $from + 1;

?><p>Nalezených položek: <?php echo $count; ?></p><?php\
?><p>Číslo stránky: <?php echo round($from/$nastranku) + 1; ?></p><?php

?><div class="pulka"><?php
    ?><div class="r"><?php
        ?><a href="?from=<?php echo ($from + $nastranku)?>">&gt;</a><?php
        ?>&nbsp;&nbsp;&nbsp;<?php
        ?><a href="?from=<?php echo ($count - $nastranku)?>">&gt;&gt;</a><?php
    ?></div><?php
    ?><a href="?from=0">&lt;&lt;</a><?php
    ?>&nbsp;&nbsp;&nbsp;<?php
    ?><a href="?from=<?php echo ($from-$nastranku)?>">&lt;</a><?php
?></div><?php


?><table class="pulka"><?php
?><tr><?php
    ?><th>#</th><?php
    ?><th>Jméno</th><?php
    ?><th>Narození</th><?php
    ?><th>Úmrtí</th><?php
    ?><th>Knih</th><?php
?></tr><?php
while($r = mysql_fetch_assoc($id_v)):
    ?><tr><?php
        ?><td><?php echo $i?>.</td><?php
        ?><td><?php echo "$r[prijmeni] $r[jmeno]"?></td><?php
        ?><td><?php echo $r[narozeni]?></td><?php
        ?><td><?php echo $r[umrti]?></td><?php
        ?><td><?php echo $r[knih]?></td><?php
    ?></tr><?php
    $i++;
endwhile;
?></table>
