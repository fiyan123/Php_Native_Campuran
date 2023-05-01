<?php

 // class
      class raport{
          
          // property
                public $nilaimtk;

              // method
                    public function identitas($nama,$kelas,$sekolah) {
                        
                            echo "
                                     <h3>Identitas Siswa</h3>
                                 ";
                            echo "Nama Anda    : ".$nama."<br>";
                            echo "Kelas Anda   : ".$kelas."<br>";
                            echo "Sekolah Anda : ".$sekolah."<br>";
                    }
                    
                    public function mtk($kehadiran,$uts,$uas,$sikap){
                        
                            echo "Nilai Kehadiran : ".$kehadiran."<br>";
                            echo "Nilai Uts       : ".$uts."<br>";
                            echo "Nilai Uas       : ".$uas."<br>";
                            echo "Nilai Sikap     : ".$sikap."<br>";

                            $this->nilaimtk = ($kehadiran + $uts + $uas + $sikap)/4;

                            echo "<h3>Nilai Matematika : ".$this->nilaimtk."</h3>";
                    }
      }
      
      // instansiasi object
       $coba = new raport();

        echo $coba->identitas("Ian","XI rpl 3","Smk Assalaam");
        echo "<br>";
        echo $coba->mtk(100,80,95,80);
?>