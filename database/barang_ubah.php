<html>
    <head>
        <title>Barang Ubah</title>
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

    <center>
        

<?php
        // PENGHUBUNG KONEKSI DATABASE
       include "koneksi.php";

        $sql  = mysqli_query($koneksi,"select * from barang where kode_barang='$_GET[kode]'");
        $data = mysqli_fetch_array($sql);
        
?>
        
    <h3> Ubah Data Barang </h3>
        
    <form action="" method="post">
        <table>
            <tr>
                <td width="120"> Kode Barang </td>
                <td> <input type="number" name="kode_barang" value="<?php echo $data['kode_barang']; ?>" required> </td>
            </tr>
            <tr>
                <td> Nama Barang </td>
                <td> <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" required> </td>
            </tr>
            <tr>
                <td> Asal Barang </td>
                <td> <input type="text" name="asal_barang" value="<?php echo $data['asal_barang']; ?>" required> </td>
            </tr>
            <tr>
                <td> Jenis Barang </td>
                <td> <input type="text" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>" required> </td>
            </tr>
            <tr>
                <td> Harga Barang</td>
                <td> <input type="number" name="harga" value="<?php echo $data['harga_barang']; ?>" required> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="proses" value="Ubah"> </td>
            </tr>
        </table>
        
        </form>
        
<?php
      include "koneksi.php";
        
    if(isset($_POST['proses'])){

    mysqli_query($koneksi, "update barang set  

        nama_barang   = '$_POST[nama_barang]',
        asal_barang   = '$_POST[asal_barang]',
        jenis_barang  = '$_POST[jenis_barang]',
        harga_barang  = '$_POST[harga]'
        where kode_barang = '$_GET[kode]'");
        
        echo "Data barang telah diubah";
        echo "<meta http-equiv=refresh content=1;URL='barang_ubah.php'>";
        
        }
        
?>
    </center>
</html>
