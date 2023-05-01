<html>
    <head>
        <title></title>
    <style>
        th, td {
            border:none;
            }
        table {
                border: 1px solid black;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 20px 20px 10px;
            }
        body{
            
            font-family: Times New Roman;
        }
    </style>
    </head>
<body>
    <center>
        <br>
        <br>
        <h3>* Penilaian Data Siswa * </h3>
            <form method="POST" action="proses.php">
                <table>
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input type="number" name="nis" placeholder="Nis" required></td>
                    </tr>
                    
                    <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama" required></td>
                    </tr>
                    
                    <tr>
                        <td>JURUSAN</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan" required>
                                <option value="">Jurusan</option>
                                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>  
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>:</td>
                        <td><input type="text" name="kelas" placeholder="Kelas" required></td>
                    </tr>
                </table>
                
                <br><br>
                <h3>* Nilai-Nilai Siswa *</h3>
                
                <table>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td><input type="number" name="kehadiran1" placeholder="Kehadiran"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="tugas1" placeholder="Tugas"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="absen1" placeholder="Absen"required></td>
                    </tr>
                
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td><input type="number" name="kehadiran2" placeholder="Kehadiran"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="tugas2" placeholder="Tugas"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="absen2" placeholder="Absen"required></td>
                    </tr>
                    
                    <tr>
                        <td>Matematika</td>
                        <td><input type="number" name="kehadiran3" placeholder="Kehadiran"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="tugas3" placeholder="Tugas"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="absen3" placeholder="Absen"required></td>
                    </tr>
                    
                                        
                    <tr>
                        <td>Produktif</td>
                        <td><input type="number" name="kehadiran4" placeholder="Kehadiran"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="tugas4" placeholder="Tugas"required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="number" name="absen4" placeholder="Absen"required></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" name="save" value="PROCES"></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>