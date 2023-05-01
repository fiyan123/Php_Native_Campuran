<html>
    <head>
        <title>latihan fungsi php</title>
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
<body>
    <br>
    <br>
    <center>
        <form method="post">
            <h2>* PENGGAJIHAN KARYAWAN BULANAN *</h2>
            <table cellpadding="10">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Nama Anda"required></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type="number" name="umur" placeholder="Umur Anda"required></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <select name="jabatan">
                            <option required></option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Lama Bekerja</td>
                    <td>:</td>
                    <td><input type="number" name="lamakerja" placeholder="Lama Bekerja"required></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td>
                        <select name="status">
                            <option required></option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h2>POTONGAN</h2></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><input type="number" name="tabungan" placeholder="Tabungan" required</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="save" value="PROSES"</td>
                </tr>
            </table>
        </form>
    <br>
    <br>


<?php

        if(isset($_POST['save'])){
            
            $nama      = $_POST['nama'];
            $umur      = $_POST['umur'];
            $jabatan   = $_POST['jabatan'];
            $lamakerja = $_POST['lamakerja'];
            $status    = $_POST['status'];
            $tabungan  = $_POST['tabungan'];
?>
            <?php function penggajihan($nama,$umur,$jabatan,$lamakerja,$status,$tabungan){ ?>
            <h2><font face="Georgia">* STRUK HASIL GAJI *</font></h2>
                <table cellpadding="10">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><?php echo $umur." Tahun"; ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?php echo $jabatan; ?></td>
                    </tr>

                    <!-- GAJI JABATAN -->
                    <?php

                        if($jabatan == "Direktur"){
                            $gaji = 1000000;
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
                        <td><?php echo "Rp.".$gaji; ?></td>
                    </tr>
                    <tr>
                        <td>Lama Kerja</td>
                        <td>:</td>
                        <td><?php echo $lamakerja." Hari"; ?></td>
                    </tr>
        
                    <!--TUNJANGAN LAMA KERJA -->
                    <?php
        
                        if ($lamakerja > 10) {
                            $tunjangan = 1000000;
                        } 
                        elseif ($lamakerja >= 6) {
                            $tunjangan = 500000;
                        }
                        elseif ($lamakerja <= 5 ) {
                            $tunjangan = 200000;
                        }
                    ?>
                    <tr>
                        <td>Tunjangan Lama Kerja</td>
                        <td>:</td>
                        <td><?php echo "Rp.".$tunjangan; ?></td>
                    </tr>

                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td><?php echo $status; ?></td>
                    </tr>

                    <!-- BONUS STATUS KERJA -->
                    <?php
                            if ($status == "Tetap") {
                                $bonus = 2500000;
                            }
                            else {
                                $bonus = 0;
                            }
                    ?>

                    <tr>
                        <td>Bonus Status Kerja</td>
                        <td>:</td>
                        <td><?php echo "Rp.".$bonus; ?></td>
                    </tr>
                    <tr>
                        <td>Tabungan Bulanan</td>
                        <td>:</td>
                        <td><?php echo "Rp.".$tabungan; ?></td>
                    </tr>
                    <tr>
                        <td><h2>* GAJI BERSIH *</h2></td>
                    </tr>

                    <!-- PROSES GAJI BERSIH-->
                    <?php

                            $gajibersih = ($gaji + $tunjangan + $bonus) - $tabungan;                
                    ?>
                    <tr>
                        <td>Gaji Bersih</td>
                        <td>:</td>
                        <td><?php echo "Rp.".$gajibersih ; ?></td>
                    </tr>
                </table>
                
                <?php } ?>
            
            <?php penggajihan($nama,$umur,$jabatan,$lamakerja,$status,$tabungan); ?>                

    <?php } ?>


        </center>
    </body>
</html>