<?php
if(!File_Exists($s = "./data/$_REQUEST[pg].php")):
    $_REQUEST[pg] = "uvod";
    $s = "./data/uvod.php";
endif;

global $pg; $pg = array();
global $menu; $menu = array();

$struktura = array(
    "uvod" => array(
            "nazev" => "Úvod",
            "menu" => "Úvod",
            "keywords" => "",
            "description" => ""
    ),


    "matice" => array(
            "nazev" => "Matice",
            "menu" => "Matice",
            "keywords" => "",
            "description" => "",

            "submenu" => array(
                "matice-form" => array(
                    "nazev" => "Vložit",
                    "menu" => "Vložit",
                    "keywords" => "",
                    "description" => "",
                )
            )

    ),

    
    "polozka-2" => array(
            "nazev" => "Položka 2",
            "menu" => "Položka 2",
            "keywords" => "",
            "description" => "",
    ),

    "mpi" => array(
            "nazev" => "MPI",
            "menu" => "MPI",
            "keywords" => "",
            "description" => "",
    ),

    "formular" => array(
            "nazev" => "Formulář",
            "menu" => "Formulář",
            "keywords" => "",
            "description" => ""
    )
);


foreach($struktura as $k=>$v):
    if($_REQUEST[pg] == $k) $pg = $v;
    $menu[$k] = $v[menu];
endforeach; 
?>