<html>
    <head>
        <title>fungsi Form</title>
    <style>
        
        .btn_style{
        border: 1px solid #cecece;
        border-radius: 3px;
        padding: 3px 10px;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
        color: white;
        background-color: blue;
        }
        .btn_style:hover{
        border: 1px solid #b1b1b21;
        box-shadow: 2px 10px 10px rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        }
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
            <form method="post">
                <center>
                    <br><br>
                    <h3><font face="Georgia">* PENGENALAN FUNGSI DENGAN FORM *</font></h3>
                    <br>
                    <table>
                        <tr>
                            <td>Nama Anda</td>
                            <td>:</td>
                            <td><input type="text" name="nama" required></td>
                            
                        </tr>
                        <tr>
                            <td>Tanggal Lahir Anda</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal" required></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin Anda</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                                <input type="radio" name="jk" value="Perempuan" required>Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Umur Anda</td>
                            <td>:</td>
                            <td><input type="number" name="umur" required></td>
                        </tr>
                        <tr>
                            <td>Sekolah Anda</td>
                            <td>:</td>
                            <td><input type="text" name="sekolah" required></td>
                        </tr>
                        <tr>
                            <td>Moto Hidup</td>
                            <td>:</td>
                            <td>
                                <textarea name="moto" required>
                                    
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="save" value="PROSES" class="btn_style"></td>
                        </tr>
                </table>
            </form>

    <?php

            if(isset($_POST['save'])){

                $nama    = $_POST['nama'];
                $tanggal = $_POST['tanggal'];
                $jk      = $_POST['jk'];
                $umur    = $_POST['umur'];
                $moto    = $_POST['moto'];
                $sekolah = $_POST['sekolah'];

    ?>

            <?php function biodata($nama,$tanggal,$jk,$umur,$sekolah,$moto) {?>
            <br>
            <br>
                <table>
                    <tr>
                        <td>Nama Anda</td>
                        <td>:</td>
                        <td><?php echo $nama ?></td>
                    </tr>        
                    <tr>
                        <td>Tanggal Lahir Anda</td>
                        <td>:</td>
                        <td><?php echo $tanggal ?></td>
                    </tr>        
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php echo $jk ?></td>
                    </tr>        
                    <tr>
                        <td>Umur Anda</td>
                        <td>:</td>
                        <td><?php echo $umur ." Tahun"?></td>
                    </tr>        
                    <tr>
                        <td>Sekolah Anda</td>
                        <td>:</td>
                        <td><?php echo $sekolah?></td>
                    </tr>        
                    <tr>
                        <td>Moto Hidup Anda</td>
                        <td>:</td>
                        <td><?php echo $moto?></td>
                    </tr>        
                </table>
            <?php } ?>

        <!-- PEMANGGILAN FUNGSI BIODATA -->
        <?php biodata($nama,$tanggal,$jk,$umur,$sekolah,$moto);?>

<?php } ?>
                </center>
        </body>
</html>