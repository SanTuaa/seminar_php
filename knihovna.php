<?php
function diak($slovo){
    $trans = array("á"=>"a", "ä"=> "a", "č"=>"c", "ď"=>"d", "é"=>"e", "ě"=>"e", "ë"=>"e", "í"=>"i", "&#239;"=>"i", "ň"=>"n", "ó"=>"o", "ö"=>"o", "ř"=>"r", "š"=>"s", "ť"=>"t", "ú"=>"u", "ů"=>"u", "ü"=>"u", "ý"=>"y", "&#255;"=>"y", "ž"=>"z", "Á"=>"A", "Ä"=>"A", "Č"=>"C", "Ď"=>"D", "É"=>"E", "Ě"=>"E", "Ë"=>"E", "Í"=>"I", "&#207;"=>"I", "Ň"=>"N", "Ó"=>"O", "Ö"=>"O", "Ř"=>"R", "Š"=>"S","Ť"=>"T", "Ú"=>"U", "Ů"=>"U", "Ü"=>"U", "Ý"=>"Y", "&#376;"=>"Y", "Ž"=>"Z");
    return(strtr($slovo, $trans));
}

function datum(){
    echo "Dnes je&nbsp;";
    if(File_Exists($s="./pom/dny.txt")):
        $r = file($s);
        echo trim($r[Date(w)]).",&nbsp;";
    endif;
    if(!File_Exists($s="./pom/mesice.txt")):
        echo Date(j).".&nbsp;".Date(n).".&nbsp;".Date(Y);
    else:
        @$r = file($s);
        echo Date(j).".&nbsp;".trim($r[Date(n)-1])."&nbsp;".Date(Y);
    endif;
    if(File_Exists($s = "./pom/svatky/svatky".Date(m).".txt")):
        $r = file($s);
        echo ", svátek má ".trim($r[Date(j)-1]);
    endif;
    return true;
}

function obr($nazev,$popis,$koncovka="jpg",$trida=""){
    if(!File_Exists($s=$nazev.".".$koncovka)) return false;
    if(!$popis=trim($popis)) $popis = "Neznámý obrázek";
    $x = getimagesize($s);
    ?><img src="<?php=$s?>" <?php=$x[3] ?> alt="<?php=$popis?>" title="<?php=$popis ?>"<?php if($trida): ?> class="<?php=$trida?>"<?php endif ?> /><?php
    return true;
}


function week_day($datum_cas){
    if(!$datum_cas) return false;
    list($datum,$cas) = explode(" ",$datum_cas);
    list($rok,$mes,$den) = explode("-",$datum);
    //list($hod,$min,$sek) = explode(":",$cas);
    return date(w, mktime($hod,$min,$sek,$mes,$den,$rok));
}
