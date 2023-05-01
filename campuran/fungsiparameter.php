<?php

        function persegi($sisi){ // parameter adalah nilai yang dimasukkan kedalam fungsi
            
            $luas = $sisi * $sisi;
            echo "Hasil dari luas persegi adalah : ".$luas;
        }
        
        persegi(2);
        
        echo "<hr>";
        
        function persegi_panjang($panjang , $lebar){
            
            $luas = $panjang * $lebar;
            echo "Hasil dari luas persegi panjang adalah : ".$luas;
        }
        
        persegi_panjang(10 , 5);
        
        echo "<hr>";
        
        function segitiga($alas , $tinggi){
            
            $luas = ($alas * $tinggi)/2;
            echo "Hasil dari luas segitiga adalah : ".$luas;
        }
        
        segitiga(5 , 10);
?>

