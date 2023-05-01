<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Latihan function Php</title>
    <style>
            th, td {
            border:none;
            }
            table {
                border: 1px solid black;
                border-radius: 10px;
                padding: 30px;
            }
            /* table{
                background : black;
                color      : white;
            } */
            body{
                background-image : url(https://s0.smartresize.com/wallpaper/933/510/HD-wallpaper-structure-lines-geometry-rectangles-gray.jpg);
                background-size  : cover
                text : white
            }
            .card{
                background-image: url(https://s0.smartresize.com/wallpaper/933/510/HD-wallpaper-structure-lines-geometry-rectangles-gray.jpg);
            }
    </style>
  </head>
  <body>

    <!-- AWAL CARD -->
    <br><br><br>
    <div class="card" align="center">
        <img src="smk.png" alt="" width="500px" style="padding-left : 55px">
        <h1 style="color : white"><font face="Georgia"> PENGGAJIHAN <br> PT . MAKMUR SENTOSA </font></h1><br>
    <div class="card border-dark mb-3" style="max-width : 55rem;">
        <div class="card-header" align="left"><b>Data Penggajihan</b></div><br>
        <div class="card-body text-dark">
            <h2 class="card-title">&nbsp;<font face="Georgia"><b>GAJI</b></font></h2><br>
            <form method="post">
                <div class="form-group">
                    <label for="nama" style="padding-right : 720px">Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Karyawan" required>
                </div>
                <div class="form-group">
                    <label for="jabatan"  style="padding-right : 777px">Jabatan</label>
                    <select class="form-control" name="jabatan" required>
                    <option>Pilih Jabatan</option>
                    <option value="Direktur">Direktur</option>
                    <option value="Manager">Manager</option>
                    <option value="karyawan">Karyawan</option>
                    <option value="OB">OB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status"  style="padding-right : 750px">Status Kerja</label>
                    <select class="form-control" name="statuskerja" required>
                    <option>Pilih Status Kerja</option>l
                </div>
                <div class="form-group">
                 2411ff
                </div><br>
                
                
                <div>
                <h3 class="card-title">&nbsp;<font face="Georgia"><b>POTONGAN</b></font></h3><br>
                <div class="form-group">
                    <label for="lamakerja" style="padding-right : 755px">Pinjaman</label>
                    <input type="number" class="form-control" name="pinjaman" placeholder="Pinjaman" required>
                </div>
                <div class="form-group">
                    <label for="lamakerja" style="padding-right : 755px">Tabungan</label>
                    <input type="number" class="form-control" name="tabungan" placeholder="Tabungan" required>
                </div>
                <button type="submit" class="btn btn-outline-primary" name="save">PROSES</button>
                </div>
            </form>
    </div>
    </div>
    </div>
    <!-- AKHIR CARD -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    
<?php

        if(isset($_POST['save'])){
            
            $nama        = $_POST['nama'];
            $jabatan     = $_POST['jabatan'];
            $statuskerja = $_POST['statuskerja'];
            $lamakerja   = $_POST['lamakerja'];
            $pinjaman    = $_POST['pinjaman'];
            $tabungan    = $_POST['tabungan'];
            
 ?>
        <!-- FUNCTION DARI PENGGAJIHAN -->
        <?php function penggajihan($nama,$jabatan,$statuskerja,$lamakerja,$pinjaman,$tabungan) { ?>
            <br>
            <center>
            <hr width="900px" color="white">
            <font face="Georgia" style="color : white"><b><h2>* STRUK GAJI *</h2></b></font>
            <div class="card border-dark mb-3" style="max-width : 45rem;">
            <table cellpadding="15">
                <tr>
                    <td>Nama Saya</td>
                    <td>:</td>
                    <td><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $jabatan ?></td>
                </tr>

                <!-- GAJI POKOK -->
                <?php

                    if ($jabatan == "Direktur") {
                        $gaji = 10000000;
                    }
                    elseif ($jabatan == "Manager") {
                        $gaji = 7500000;
                    }
                    elseif ($jabatan == "Karyawan") {
                        $gaji = 5000000;
                    }
                    elseif ($jabatan == "OB") {
                        $gaji = 2500000;
                    }
                ?>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$gaji ?></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td><?php echo $statuskerja ?></td>
                </tr>

                <!-- BONUS STATUS KERJA -->
                <?php

                        if ($statuskerja == "Tetap") {
                            $bonus = 2500000;
                        }
                        else {
                            $bonus = 0;
                        }

                ?>
                <tr>
                    <td>Bonus Status Kerja</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$bonus ?></td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo $lamakerja ." Hari"?></td>
                </tr>
                
                <!-- TUNJANGAN LAMA KERJA -->
                <?php

                        if ($lamakerja > 10) {
                            $tunjangan = 1000000;
                        }
                        elseif ($lamakerja >= 6) {
                            $tunjangan = 500000;
                        }
                        elseif ($lamakerja >= 0) {
                            $tunjangan = 250000;
                        }
                ?>
                <tr>
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo " Rp.".$tunjangan ?></td>
                </tr>
                <tr>
                    <td>  <font face="Georgia"><b><h3>POTONGAN</h3></b></font></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$pinjaman?></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$tabungan
                    ?></td>
                </tr>
                
                <!-- PROSES TOTAL GAJI BERSIH -->
                <?php

                        $totalgaji = ($gaji + $bonus + $tunjangan) - ($pinjaman + $tabungan);
                ?>
                <tr>
                    <td>  <font face="Georgia"><b><h3>TOTAL GAJI BERSIH</h3></b></font></td>
                </tr>
                <tr>
                    <td>Total Gaji Bersih</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$totalgaji ?></td>
                </tr>
            </table>
        </div>
     </center>
        <?php } ?>

        <?php penggajihan($nama,$jabatan,$statuskerja,$lamakerja,$pinjaman,$tabungan) ?>

<?php } ?>

    </body>
</html>