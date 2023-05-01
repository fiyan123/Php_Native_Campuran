<html>
    <head>
        <title>Contoh Php Inputan</title>
    </head>
    <body>
        
<form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"</td>
            </tr>
            
             <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"</td>
            </tr>
            
             <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="number" name="umur"</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tl" value="Tanggal"></td>
            </tr>
            <tr>
                <td>Kata-Kata Bijak</td>
                <td>:</td>
                <td><textarea name="kata" rows="" cols="">
                     
                    </textarea></td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="PROSES"</td>
            </tr>
            
        </table>

</form>

</body>
</html>

<?php
        if(isset($_POST['save'])){
            
            $nama   = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $umur   = $_POST['umur'];
            $jk     = $_POST['jk'];
            $agama  = $_POST['agama'];
            $tl     = $_POST['tl'];
            $kata   = $_POST['kata'];
            
            echo "
            
            <br>
            <br>
            <h2>~~~ Data Tersimpan ~~~</h2>
            <table>
                <tr>
                    <td>Nama Anda</td> <td>:</td> <td>$nama</td>
                </tr>
                <tr>
                    <td>Alamat Anda</td> <td>:</td> <td>$alamat</td>
                </tr>
                <tr>
                    <td>Umur Anda</td> <td>:</td> <td>$umur Tahun</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin Anda</td> <td>:</td> <td>$jk</td>
                </tr>
                 <tr>
                    <td>Agama Anda</td> <td>:</td> <td>$agama</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir Anda</td> <td>:</td> <td>$tl</td>
                </tr>
                <tr>
                    <td>Kata-Kata Anda</td> <td>:</td> <td>$kata</td>
            </table>
            <h2>~~~~~~~~~~~~~~~~~~~~~~</h2>
            ";
        }
        
?>