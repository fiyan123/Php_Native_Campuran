<html>
    <head>
        <title>Form Oop</title>
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
            <br>
            <br>
            <br>
            <center>
            <h2><font face="Times new Roman">* Data Penggajihan Karyawan Oop *</font></h2>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>Nama Anda</td>
                            <td>:</td>
                            <td><input type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>
                                <select name="jabatan" required>
                                    <option =""></option>
                                    <option value="Direktur">Direktur</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="OB">OB</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td>
                                <select name="pendidikan" required>
                                    <option value=""></option>
                                    <option value="S1">S1</option>
                                    <option value="D3">D3</option>
                                    <option value="Smk/Sma">Smk/Sma</option>
                                    <option value="Smp">Smp</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tabungan</td>
                            <td>:</td>
                            <td><input type="number" name="tabungan" required></td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td>:</td>
                            <td><input type="number" name="pinjaman" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="save" value="Save" class="btn_style"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </body>
</html>
<br>
<?php

        if(isset($_POST['save'])){
            
            $nama       = $_POST['nama'];
            $jabatan    = $_POST['jabatan'];
            $pendidikan = $_POST['pendidikan'];
            $tabungan   = $_POST['tabungan'];
            $pinjaman   = $_POST['pinjaman'];
            
            
            // class data Karyawan
                    class datakaryawan{
                        
                        // property data
                                private $gaji_pokok;
                                private $tunjangan_pendidikan;
                                public $tabungan;
                                public $pinjaman;
                                public $total_pinjaman;
                                public $total_gaji;
                            
                            // method
                                    private function nama($nama){
                                            echo "<center>";
                                            echo "
                                                   <h3>* Penggajihan Karyawan *</h3>
                                                 ";
                                            echo "<table>";
                                            echo "
                                            
                                                 <tr>
                                                   <td>Nama Karyawan</td>
                                                   <td>:</td>
                                                   <td>".$nama."</td>
                                                  </tr>
                                            ";
                                    }
                                    
                                    public function jabatan($jabatan){
                                        
                                            echo "
                                                 <tr>
                                                   <td>Jabatan Karyawan</td>
                                                   <td>:</td>
                                                   <td>".$jabatan."</td>
                                                 </tr>
                                            ";
                                            
                                            if ($jabatan == "Direktur") {
                                                $this->gaji_pokok = 5000000;
                                            }
                                            elseif ($jabatan == "Manager") {
                                                $this->gaji_pokok = 3000000;
                                            }
                                            elseif ($jabatan == "Karyawan") {
                                                $this->gaji_pokok = 2000000;
                                            }
                                            elseif ($jabatan == "OB") {
                                                $this->gaji_pokok = 1000000;
                                            }
                                            
                                            echo "
                                            
                                               <tr>
                                                  <td>Gaji Pokok</td>
                                                  <td>:</td> 
                                                  <td>Rp.".$this->gaji_pokok."</td>
                                                </tr>
                                                
                                               ";
                                    }
                                    
                                    public function pendidikan($pendidikan){
                                            
                                            echo "
                                            
                                                <tr>
                                                   <td>Pendidikan Karyawan</td>
                                                   <td>:</td>
                                                   <td>".$pendidikan."</td>
                                                </tr>
                                            ";
                                            
                                            if ($pendidikan == "S1") {
                                                $this->tunjangan_pendidikan = 1000000; 
                                            }
                                            elseif ($pendidikan == "D3") {
                                                $this->tunjangan_pendidikan = 750000;
                                            }
                                            elseif ($pendidikan == "Smk/Sma") {
                                                $this->tunjangan_pendidikan = 500000;
                                            }
                                            elseif ($pendidikan == "Smp") {
                                                $this->tunjangan_pendidikan = 250000;
                                            }
                                            
                                            echo "
                                            
                                               <tr>
                                                   <td>Tunjangan Pendidikan Karyawan</td>
                                                   <td>:</td>
                                                   <td>Rp.".$this->tunjangan_pendidikan."</td>
                                               </tr>
                                               
                                            ";
                                    }
                                    
                                    public function totalpinjaman($tabungan,$pinjaman){
                                        
                                        $this->total_pinjaman = $tabungan + $pinjaman;
                                        
                                            echo "
                                                <tr>
                                                   <td>Total Pinjaman karyawan</td>
                                                   <td>:</td>
                                                   <td>Rp.".$this->total_pinjaman."</td>
                                                </tr>
                                            ";
                                        
                                    }
                                    public function totalgaji(){
                                        
                                        $this->total_gaji = ($this->gaji_pokok + $this->tunjangan_pendidikan) - ($this->total_pinjaman);
                                       
                                            echo "
                                        
                                               <tr>
                                                    <td>Total Gaji Bersih Karyawan</td>
                                                    <td>:</td>
                                                    <td>Rp.".$this->total_gaji."</td>
                                               </tr>
                                            ";
                                            echo "</center>";
                                            echo "</table>";
                                    }
                    }
                    
                    // instansiasi object
                    
                    $tampil = new datakaryawan();
                    
                    // pemanggilan
                    
                    echo $tampil->nama($nama);
                    echo $tampil->jabatan($jabatan);
                    echo $tampil->pendidikan($pendidikan);
                    echo $tampil->totalpinjaman($tabungan,$pinjaman);
                    echo $tampil->totalgaji();
            
        }

?>