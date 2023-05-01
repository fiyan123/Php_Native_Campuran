<?php

    // membuat class
    class hotel{
    
        // property
            private $datahotel;
            protected $reservasi;
            public $pengguna;
        
        //method
        
            private function datahotel($datahotel){
        
                echo "Ini Adalah Penyimpanan data-data penting hotel";
                
            }
            
            protected function reservasihotel($reservasi){
                
                echo "ini adalah method yang digunakan untuk pelayan hotel";
            }
            
            public function pelanggan($pengguna){
                
                echo "ini method untuk pengguna atau pemesan kamar hotel";
            }
    
    
    }
    
    $hotelian = new hotel();
    
    

?>