<?php
$str = "<b><u>Everiting I do, I do it for you</u></b>";

echo $str."<br>";
//no taq html
echo strip_tags ($str)."<br>";
//allow tatu <u>
echo strip_tags ($str, "<u>")."<br>";
// Tampil apa adanya 
echo htmlspecialchars ($str)."<br>";
//Tampil apa adanya
echo htmlentities ($str);
?>