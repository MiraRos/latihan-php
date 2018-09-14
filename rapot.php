<html>
<head><title>Sistem Rapot Sederhana</title></head>
<body>
    <FORM ACTION= "data.php" METHOD="POST">
    <center><h2>RAPOT SEDERHANA</h2></center>
    <table>
    <tr>
    <td>Nama Anda </td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr>

    <tr>
    <td>NIS</td>
    <td>:</td>
    <td><input type="number" name="nis"></td>
    </tr>

    <tr>
    <td> Alamat</td>
    <td>:</td>
    <td><input type="textarea" name="alamat"></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="kelamin" value="Perempuan"> Perempuan
            <input type="radio" name="kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="kelamin" value="Transgender"> Transgender</td>
    </tr>

    <tr>
    <td>Agama</td>
    <td>:</td>
    <td><select name="agama">
    <option value=""></option>
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Budha">Budhan</option>
    </select></td>
    </tr>

    <tr>
    <td>Asal Sekolah</td>
    <td>:</td>
    <td><input type="text" name="sekolah"></td>
    </tr>

    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="email" name="email"></td>
    </tr>

    <tr>
    <td>Nama Orang Tua</td>
    <td>:</td>
    <td><input type="text" name="ortu"></td>
    </tr>

    <tr>
    <td> Pelajaran Yang disukai</td>
    <td>:</td>
    <td><input type="radio" name="pelajran" value="BIN"> Bhs Indonesia<br>
                            <input type="radio" name="pelajaran" value="BS"> Bs Sunda<br>
                            <input type="radio" name="pelajaran" value="IPA"> Ilmu Pengetahuan Aalam<br>
                            <input type="radio" name="pelajaran" value="IPS"> Ilmu Pengtahuan Sosial<br></td>
    </tr>

    <tr>
    <td> Nilai Ijazah SD</td>
    <td>:</td>
    <td><input type="text" name="ijazah"></td>
    </tr>
    </table> 
   <input type="submit" name="pilih">
    </FORM>
</body>
</html>