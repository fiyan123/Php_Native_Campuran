<?php
        // CARA PENAMAAN CLASS OOP PHP
        class mobil{
            
            // PROPERTY OOP PHP
            var $warna;
            var $merek;
            var $ukuran;
            
            // METHOD DALAM OOP PHP
            function maju(){
                // isi method
                echo "Mobil Bisa Maju Kedepan Jika Digas";
            }
            
            function mundur(){
                // isi method
                echo "Mobil Juga Bisa Mundur Jika Digas Mundur";
            }
        }
        
        // INSTANSIASI DARI CLASS MOBIL
        $cetak = new mobil();
        
        // MEMANGGIL OUTPUT ATAU HASIL
        echo $cetak -> maju()."<br>";
        echo $cetak -> mundur();

?>