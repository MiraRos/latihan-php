<?php
function luas_segitiga ($alas, $tinggi){
    return 1/2 * $alas * $tinggi;
}
//pemanggilan fungsi
$a = 5;
$t = 8;
echo "Luas segitiganya adalah =";
echo luas_segitiga($a, $t);
?> 