<h1>Sázení</h1><?php

function marze($kurzy){
    $vyhra = array_product($kurzy);
    $vsazeno = 0;
    foreach($kurzy as $v)
        $vsazeno += $vyhra/$v;
    return $vyhra/$vsazeno;
}

echo marze(array(3.8,3.7,2.03));
echo "<br />".marze(array(2.75,2.95,2.45));
echo "<br />".marze(array(1.4,2.6));
echo "<br />".marze(array(1.8,3.4,3.85));


?>
