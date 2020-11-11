<?php
if(!File_Exists($s = "./data/$_REQUEST[pg].php")):
    $_REQUEST[pg] = "uvod";
    $s = "./data/uvod.php";
endif;

global $pg; $pg = array();
global $menu; $menu = array();

$struktura = array(
    "uvod" => array(
            "menu" => "Knihovna"
    ),

    "php" => array(
            "menu" => "PHP",

            "submenu" => array(
                "razeni" => array(
                    "menu" => "Řazení"
                ),

                "sazeni" => array(
                    "menu" => "Sázení"
                ),

                "sazeni" => array(
                    "menu" => "Sázení"
                ),

                "podminky" => array(
                    "menu" => "Podmínky"
                ),

                "podminky_cv" => array(
                    "menu" => "Podmínky cvičení"
                ),

                "cykly" => array(
                    "menu" => "Cykly"
                ),

                "pole" => array(
                    "menu" => "Pole"
                ),

                "pole_fce" => array(
                    "menu" => "Pole funkce"
                ),

                "funkce" => array(
                    "menu" => "Funkce"
                )
            )
    ),


    "matice" => array(
            "menu" => "Matice",

            "submenu" => array(
                "matice-form" => array(
                    "menu" => "Vložit"
                )
            )

    ),

    "mpi" => array(
            "menu" => "MPI"
    ),

    "formular" => array(
            "menu" => "Formulář"
    )
);


foreach($struktura as $k=>$v):
    if($_REQUEST[pg] == $k) $pg = $v;
    $menu[$k] = $v[menu];
endforeach;
?>
