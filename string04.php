<?php
$str = "Is you name O'Reilly ?";
$str2 = addslashes($str);
$str3 = Stripslashes($str);

echo "<b>String aslin</b> : $str";
echo " <br><b>addslashes()</b> : $str2";
echo " <br><b>Stripslashes()</b> : $str3";
?>