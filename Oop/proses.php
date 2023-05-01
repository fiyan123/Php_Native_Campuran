<?php

        if(isset($_POST['save'])){
            
                $nis     = $_POST['nis'];
                $nama    = $_POST['nama'];
                $jurusan = $_POST['jurusan'];
                $kelas   = $_POST['kelas'];
                
                $kehadiran1 = $_POST['kehadiran1'];
                $tugas1     = $_POST['tugas1'];
                $absen1     = $_POST['absen1'];
                
                $kehadiran2 = $_POST['kehadiran2'];
                $tugas2     = $_POST['tugas2'];
                $absen2     = $_POST['absen2'];
                
                $kehadiran3 = $_POST['kehadiran3'];
                $tugas3     = $_POST['tugas3'];
                $absen3     = $_POST['absen3'];
                
                                
                $kehadiran4 = $_POST['kehadiran4'];
                $tugas4     = $_POST['tugas4'];
                $absen4     = $_POST['absen4'];
                
            
            // Class Parent
                    class data{
                        
                            // Property
                                     protected $nis;
                                     protected $nama;
                                     protected $jurusan;
                                     protected $kelas;
                
                                     protected $kehadiran1;
                                     protected $tugas1;
                                     protected $absen1;
                            
                                     protected $kehadiran2;
                                     protected $tugas2;   
                                     protected $absen2;
                                            
                                     protected $kehadiran3;
                                     protected $tugas3;
                                     protected $absen3;
                                     
                                                                                 
                                     protected $kehadiran4;
                                     protected $tugas4;
                                     protected $absen4;
                                     
                                     protected $nilaiindonesia;
                                     protected $nilaiinggris;
                                     protected $nilaimatematika;
                                     protected $nilaiproduktif;
                            
                    }
                    
            // class turunan
                    class siswa extends data{
                        
                        
                            // method
                                public function __construct($nis,$nama,$jurusan,$kelas,$kehadiran1, $tugas1,$absen1,$kehadiran2,$tugas2,$absen2,$kehadiran3,$tugas3,$absen3,$kehadiran4,$tugas4,$absen4){
                
                                        $this->nis     = $nis;
                                        $this->nama    = $nama;
                                        $this->jurusan = $jurusan;
                                        $this->kelas   = $kelas;
                                        
                                        $this->kehadiran1 = $kehadiran1;
                                        $this->tugas1     = $tugas1;
                                        $this->absen1     = $absen1;
                                        
                                        $this->kehadiran2 = $kehadiran2;
                                        $this->tugas2     = $tugas2;   
                                        $this->absen2     = $absen2;
                                        
                                        $this->kehadiran3 = $kehadiran3;
                                        $this->tugas3     = $tugas3;
                                        $this->absen3     = $absen3;
                                        
                                        $this->kehadiran4 = $kehadiran4;
                                        $this->tugas4     = $tugas4;
                                        $this->absen4     = $absen4;
                                        
                                        
                                        // PEMANGGILAN METHOD DALAM CONSTRUCt
                                        $this->indonesia();
                                        $this->inggris();
                                        $this->matematika();
                                        $this->produktif();
                                        
                                    
                                }
                                
                                 protected function indonesia(){
                                
                                        $this->nilaiindonesia = ($this->kehadiran1+$this->tugas1+$this->absen1)/3;
                            }
                                
                                 protected function inggris(){
                                        
                                        $this->nilaiinggris = ($this->kehadiran2 + $this->tugas2 + $this->absen2)/3;
                            }
                            
                                protected function matematika(){
                                        
                                        $this->nilaimatematika = ($this->kehadiran3 + $this->tugas3 + $this->absen3)/3;
                            }
                            
                                protected function produktif(){
                                    
                                        $this->nilaiproduktif = ($this->kehadiran4 + $this->tugas4 + $this->absen4)/3;
                            }
                                
                                public function __destruct(){
                                    

                                    
                                        echo "<br><br><center>";
                                        echo "<link rel='stylesheet' type='text/css' href='style.css'>";
                                        echo "<h2>DATA SISWA</h2>";
                                        echo "
                                                <table>
                                                
                                                        <tr>
                                                        
                                                            <td>Nis Siswa</td>
                                                            <td>:</td>
                                                            <td>$this->nis</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                        
                                                            <td>Nama Siswa</td>
                                                            <td>:</td>
                                                            <td>$this->nama</td>
                                                            
                                                        </tr>   
                                                        <tr>
                                                        
                                                            <td>Jurusan Siswa</td>
                                                            <td>:</td>
                                                            <td>$this->jurusan</td>
                                                            
                                                        </tr>
                                                        <tr>
                                                        
                                                            <td>Kelas Siswa</td>
                                                            <td>:</td>
                                                            <td>$this->kelas</td>
        
                                                        </tr>                                                        
                                                </table>
                                                
                                        ";
                                        
                                    echo "
                                        
                                        <br>
                                        <br>
                                        <h2>DATA NILAI</h2>
                                            <table cellpadding='10' border='2'>
                                            
                                                 <tr>
                                                    <th>Daftar Tugas</th>  
                                                    <th>Bahasa Indonesia</th>
                                                    <th>Bahasa Inggris</th>
                                                    <th>Matematika</th>
                                                    <th>Produktif</th>
                                                            
                                                </tr>
                                                <tr>
                                                        <td>Nilai kehadiran</td>
                                                        <td>$this->kehadiran1</td>
                                                        <td>$this->kehadiran2</td>
                                                        <td>$this->kehadiran3</td>
                                                        <td>$this->kehadiran4</td>
                                                            
                                                </tr>
                                                <tr>
                                                        <td>Nilai Tugas</td>
                                                        <td>$this->tugas1</td>
                                                        <td>$this->tugas2</td>
                                                        <td>$this->tugas3</td>
                                                        <td>$this->tugas4</td>
                                                            
                                                </tr>
                                                <tr>
                                                        <td>Nilai Absen</td>
                                                        <td>$this->absen1</td>
                                                        <td>$this->absen2</td>
                                                        <td>$this->absen3</td>
                                                        <td>$this->absen4</td>
                                                            
                                                </tr>
                                                <tr>
                                                        <td>Nilai Akhir</td>
                                                        <td>$this->nilaiindonesia</td>
                                                        <td>$this->nilaiinggris</td>
                                                        <td>$this->nilaimatematika</td>
                                                        <td>$this->nilaiproduktif</td>

                                                            
                                                </tr>
                                        ";
                                    
                                }
                    }
                    
                    // instansiasi object
                    $pusy = new siswa($nis,$nama,$jurusan,$kelas,$kehadiran1, $tugas1,$absen1,$kehadiran2, $tugas2,$absen2,$kehadiran3,$tugas3,$absen3,$kehadiran4,$tugas4,$absen4);
                                
                    
                    
      }

?>