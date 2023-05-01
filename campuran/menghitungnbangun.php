<?php

        // MEMBUAT PERHITUNGAN BANGUN DATAR DENGAN FUNGI PARAMETER
        function segitiga($alas , $tinggi){
            
            $luas = ($alas * $tinggi)/2;
                echo "Ini adalah perhitungan luas segitiga <br>";
                echo "Yang mana alasnya = 20cm dan tingginya = 5cm <br>";
                echo "hasil nya adalah : ".$luas." cm";
        }
        segitiga(20 , 5);
        
        echo "<hr>";
        
        // MEMBUAT PERHITUNGAN DENGAN FUNGSI NILAI DEFAULUT
        
        function segitiga2($alas=10 , $tinggi=5){
            
            $luas = ($alas * $tinggi)/2;
                echo "Ini adalah perhitungan luas segitiga <br>";
                echo "Yang mana alasnya = 10cm dan tingginya = 5cm <br>";
                echo "hasil nya adalah : ".$luas." cm";
        }
        segitiga2();
        
?>