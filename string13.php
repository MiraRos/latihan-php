<from action ="" method="post">
NIM Anda :
<input type="text" name="txtrrim"><br>
<input type="submit" name="submit" value="proses">
</from>

<?php
if (isset($_POST['submit'])){
    $nim = $_POST['txtnim'];
    $a = subtr ($nim, 2, 2);
    switch($a){
        case '11' : $jurusan = "Teknik Informatika";
                    break;
        case '22' : $jurusan = "Sistem Informatika";
                    break;
        case '33' : $jurusan = "Sistem Komputer";
                    break;
        case '44' : $jurusan = "komputerisasi Akutansi";
                    break;
        default   : $jurusan = "Salah jurusan";
    }
    echo "Nim Anda : $nim<br>";
    echo "Jurusan Anda : $jurusan";
}?>