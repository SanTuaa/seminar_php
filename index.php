<?php
session_start();
include_once "./konstanty.php";
include_once "./config.php";
include_once "./knihovna.php";
include_once "./knih_matice.php";
include_once "./hlavicka.php";
?><div id="telo"><?php
    ?><div id="vnitrek"><?php
    ?><div id="horni"><?php
        ?><div id="hlavicka"><?php
            ?><div id="nadpis"><a href="./index.php"><?php echo TITLE?><br /><span id="podnadpis"><?php echo SUBTITLE?></span></a></div><?php        
        ?></div><?php
        ?><div id="menu"><?php vypis_menu($struktura,$_REQUEST[pg]) ?></div><?php
    ?></div><?php
   
      
    ?><div id="obsah"><?php
            ?><div id="pravy"><?php
                ?><div class="container"><?php

                ?></div><?php
            ?></div><?php
            ?><div id="levy"><?php
                ?><div class="container"><?php
                require $s;
                ?></div><?php
            ?></div><?php
            ?><div id="paticka"><?php
                ?><a href="mailto:<?php echo MAIL?>">&copy;&nbsp;<?php echo ROK;?>&nbsp;<?php echo TITLE?></a><?php
            ?></div><?php
        ?></div><?php
    ?></div><?php
    ?></div><?php
?></body><?php
?></html><?php


function vypis_menu($struktura,$actual){
    if(!$actual) $actual = "uvod";
    echo "<ul>";
    foreach($struktura as $k => $v):
        echo "<li>";
            ?><a href="./index.php?pg=<?php echo $k; ?>"
                <?php if($k==$actual):?> 
                class="actual"<?php endif;?>>
                <?php echo $v[menu];?></a><?php
            //if(!file_exists($s = "./data/$k.php")) file_put_contents($s,"<h1>$v[nazev]</h1>\r\n");
            if($v[submenu]):
                ?><ul><?php
                    foreach($v[submenu] as $k1 => $v1): 
                        ?><li><a href="?pg=<?php echo $k1;?>"><?php echo $v1[menu];?></a></li><?php
                    endforeach;  
                ?></ul><?php
            endif;
        echo "</li>";   
    endforeach;
    echo "</ul>";
}
?>