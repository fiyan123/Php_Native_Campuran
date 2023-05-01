<?php

   // Class parent
       class kendaraan{
           
           // property
                protected $jenis = "Matic";
                protected $warna = "Biru";
       }
     
    // class turunan chilld class dari class kendaraan
        class motor extends kendaraan{
            
            
            // method
                public function matic(){
                    echo "Ini Jenis Motor ".$this->jenis;
                }
                public function warna(){
                    echo "Motor Ini Berwarna ".$this->warna;
                }
        }
        
    // instansiasi object class turunan
        $cetak = new motor;
    
    // pemanggilan
       echo $cetak->matic();
       echo "<br>";
       echo $cetak->warna();

?>