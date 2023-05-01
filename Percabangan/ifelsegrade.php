<html>
    <head>
        <title>If Php</title>
    </head>
    
    <body>
        
        <form method="post">
            <div align="center">
                <h2>☆ PROSES NILAI UJIAN ☆</h2>
            <table>
                
                <tr>
                    <td>Masukkan Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Masukkan Kelas Anda</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"</td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk"</td>
                </tr>
                                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indo"</td>
                </tr>
                                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris"</td>
                </tr>
                                <tr>
                    <td>Nilai Ipa</td>
                    <td>:</td>
                    <td><input type="number" name="ipa"</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="save" value="SEND"</td>
                </tr>
            </table>
            </div>
        </form>
        
    </body>
</html>


<?php
    echo "<br><hr>";
    if(isset($_POST['save'])){
        
        $nama    = $_POST['nama'];
        $kelas   = $_POST['kelas'];
        $mtk     = $_POST['mtk'];
        $indo    = $_POST['indo'];
        $inggris = $_POST['inggris'];
        $ipa     = $_POST['ipa'];
        $rata;
        $grade;
        
        echo "
        <br>
        <center>
            <table>
                <tr>
                    <td>Nama Anda</td> <td>:</td> <td>$nama</td>
                </tr>
                
                <tr>
                    <td>Kelas Anda</td> <td>:</td> <td>$kelas</td>
                </tr>
                
                <tr>
                    <td>Nilai Matematika</td> <td>:</td> <td>$mtk/100</td>
                </tr>
                
                <tr>
                    <td>Nilai B.Indoneisa</td> <td>:</td> <td>$indo/100</td>
                </tr>
                
                <tr>
                    <td>Nilai B.Inggris</td> <td>:</td> <td>$inggris/100</td>
                </tr>
                                
                <tr>
                    <td>Nilai Ipa</td> <td>:</td> <td>$ipa/100</td>
                </tr>
                
                </table>
        </center>
        ";
        
        $rata = ($mtk+$indo+$inggris+$ipa)/4;
        
        echo "
        <center>
        <br>
        <table>
            <tr>
               <td>Rata-rata nilai</td> <td>:</td> <td>$rata</td>
             </tr>
        </table>
        </center>
        ";
        
        
        if($rata >= 90 && 100){
            $grade = "A";
        }
        elseif ($rata >= 80 && 90) {
            $grade = "B";
        }
        elseif ($rata >= 75 && 80) {
            $grade = "C";
        }
        elseif ($rata >= 70 && 75) {
            $grade = "D";
        }
        elseif ($rata >= 65 && 70) {
            $grade = "E";
        }
        else {
            $grade = "Maaf Gada";
        }
        
        
        echo "
        <center>
        <table>
            <tr>
                <td>Grade Anda</td> <td>:</td> <td>$grade</td>
            </tr>
        </table>
        <hr>
        ";
    }


?>