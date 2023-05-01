<?php

    // CLASS BANGUN DATAR
        class Bangun_Datar{
        
        // PROPERTY 
        var $segitiga;
        var $persegi;
        var $persegi_panjang;
        
        // METHOD BANGUN DATAR
        function segitiga(){
            echo "Ini Adalah Perhitungan Luas Segitiga <br>";
            $alas   = 10;
            $tinggi = 5;
            
            $luas = ($alas * $tinggi)/2;
            echo "Hasil Dari Luas Segitiga Yang Alasnya 10cm Dan Tinggi 5cm Adalah : ".$luas;
        }        
        
        function layang_layang(){
            echo "Ini Adalah Perhitungan Luas Layang-layang <br>";
            $d1   = 20;
            $d2   = 5;
            
            $luas = ($d1 * $d2)/2;
            echo "Hasil Dari Luas Layang-layang Yang D1 nya 20cm Dan D2 nya 5cm Adalah : ".$luas;
        }        
    }
    
    //INSTANSI CLASS BANGUN DATAR
    $cetak = new Bangun_Datar();
    
    //PEMANGGILAN
    echo $cetak -> segitiga();
    echo "<hr>";
    echo $cetak -> layang_layang();
    echo "<hr>";
?>