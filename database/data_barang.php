<html>
    <head>
        <title>
            Hasil Dari Barang Di Mysql Database
        </title>
    </head>
       <link rel="stylesheet" type="text/css" href="style.css">
        <body>
    <center>  
            <h2> * DATA BARANG YANG TERSIMPAN DI DATABASE *</h2>
        <table border="1" cellpadding="5">
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Asal Barang</th>
                <th>Jenis Barang</th>
                <th>Harga Barang</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php
                
                // KONEKSI DATABASE
               $koneksi = mysqli_connect("127.0.0.1","root","root","latihan_db");
                
                // PERULANGAN ATAU PENAMPILAN DATA DENGAN WHILE
                $no = 1;
                
                $ambildata = mysqli_query($koneksi,"select * from barang");// QUERY DISINI UNTUK MENAMPILKAN DSRI DATA YAG DI INOUT KE MYSQL
                
                 while  ($tampil = mysqli_fetch_array($ambildata)){
                
                // WARNA BARIS TABLE
                $warna = ($no% 2 == 1)?"white":"#eee";
                
                echo "
                
                    <tr bgcolor='$warna'>
                        <td>$no</td>
                        <td>$tampil[kode_barang]</td>
                        <td>$tampil[nama_barang]</td>
                        <td>$tampil[asal_barang]</td>
                        <td>$tampil[jenis_barang]</td>
                        <td>Rp.$tampil[harga_barang]</td>
                        <td><a href = ' ?kode=$tampil[kode_barang]'> <input type='button' class='btn_delete'> </a></td>
                        <td><a href = ' barang_ubah.php?kode=$tampil[kode_barang]'> <input type='button' class='btn_edit'> </a></td>
                    </tr>
                ";
         $no++; 
        } 

    ?>
           </table>    
        </center>

<?php

    if(isset($_GET['kode'])){
        
    // QUERY DATABASE UNTUK MENGHAPUS DATA YANG DIPILIH BERDASARKAN DARI KODE BARANG YANG DIPILIH
        mysqli_query($koneksi,"delete from barang where kode_barang ='$_GET[kode]'");

        echo "
                <br><center>Data Telah Terhapus</center>
            ";
    // PERINTAH REFRESH AUTO
        echo "<meta http-equiv = refresh content = 2; URL = 'data_barang.php'>";

        }

?>

    </body>
</html>