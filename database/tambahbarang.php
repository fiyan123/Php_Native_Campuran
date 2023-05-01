<html>
    <head>
        <title>Php Mysql</title>
    <style>
          th, td {
            border:none;
            }
            table {
                border: 1px solid black;
                border-radius: 10px;
                padding: 30px;
            }
    </style>
    </head>

<br><center>
<h3>Tambah Barang</h3>

<form action="" method="post">
    
    <table>
        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td><input type="number" name="kode_barang" required></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama_barang" required></td>
        </tr>
        <tr>
            <td>Asal Barang</td>
            <td>:</td>
            <td><input type="text" name="asal_barang"></td>
        </tr>
        <tr>
            <td>Jenis Barang</td>
            <td>:</td>
            <td><input type="text" name="jenis_barang"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td>:</td>
            <td><input type="number" name="harga_barang" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="save" value="SIMPAN"></td>
        </tr>
    </table>
</form> 
</html>

<?php
 
    $koneksi = mysqli_connect("127.0.0.1","root","root","latihan_db");
    //   require_once(__DIR__.'/koneksi.php');

       if(isset($_POST['save'])){

       $kode_barang   = $_POST['kode_barang'];
       $nama_barang   = $_POST['nama_barang'];
       $asal_barang   = $_POST['asal_barang'];
       $jenis_barang  = $_POST['jenis_barang'];
       $harga_barang  = $_POST['harga_barang'];
    
        // PROSES DARI KODE_BARANG nama_barang DAN harga_barang DIAMBIL BEDASARKAN DATA YANG DIINPUT    
      mysqli_query($koneksi,"insert into barang value ('$kode_barang','$nama_barang','$asal_barang','$jenis_barang','$harga_barang')");

           echo "Data Berhasil Tersimpan";
        }    

      echo "</center>";
?> 
