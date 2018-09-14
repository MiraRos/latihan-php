<?php
$uang = 50000;
$makanan = 25000;
$minuman = 10000;
$menghabiskan = ( $makanan + $minuman);
$sisaUang = ($uang - $makanan - $minuman);
$hemat = ($sisaUang > 0)? "Hemat" : "Boros";
echo "Uang Hary : Rp. $uang<br>";
echo "Makan : Rp. $makanan<br>";
echo "Minum : Rp. $minuman<br>";
echo "Hari menghabiskan uang sebesar : Rp. $menghabiskan<br>";
echo "Sisa uang Hary : Rp. $sisaUang<br>";
echo "dan Hary termasuk orang yang $hemat<br.";
