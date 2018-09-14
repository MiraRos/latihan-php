<?php
if (isset($_POST['pilih'])){
    echo "<b> <center> RAPOT SEDERHANA </center></b><br>";
    
    $nama = $_POST['nama'];
    echo "Nama :<b>$nama</b><br>";

    $nis = $_POST['nis'];
    echo "NIS :<b>$nis</b><br>";

    $alamat = $_POST['alamat'];
    echo "Alamat :<b>$alamat</b><br>";

    $kelamin = $_POST['kelamin'];
    echo "Kelamin :<b>$kelamin</b><br>";

    $agama = $_POST['agama'];
    echo "Agama :<b>$agama</b><br>";

    $sekolah = $_POST['sekolah'];
    echo "Asal Sekolah : <b>$sekolah</b><br>";

    $email = $_POST['email'];
    echo "Email :<b>$email</b><br>";

    $ortu = $_POST['ortu'];
    echo "Nama Orang Tua :<b>$ortu</b><br>";

    $pelajaran = $_POST['pelajaran'];
    echo "Pelajaran yang anda sukai :<b>$pelajaran</b><br>";

    $ijazah = $_POST['ijazah'];
    echo "Nilai Ijazah SD :<b>$ijazah</b><br>";
    if ($ijazah >=25){
        echo"Selamat Anda DITERIMA";
    }else {
        echo "Maaf Anda DITOLAK";
    }
    }
    ?>