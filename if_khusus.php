<?php
$tahun = date ("Y");
$Kabisat = ($tahun%4 == 0)? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun<b> $Kabisat";
?>