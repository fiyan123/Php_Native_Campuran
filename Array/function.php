<?php

        function perkenalan($nama,$salam){
            
            echo $salam.",";
            echo "Perkenalkan Nama saya ".$nama."<br>";
        }
            // MEMANGGIL FUNGSI
            perkenalan("Ian","Hello");
            
        echo "<hr>";
            
            $aku    = "Dia";
            $ucapan = "Selamat Pagi Dunia Tipu-tipu";
            
            //PEMANGGILAN FUNGSI
            perkenalan($aku,$ucapan);
                
        echo "<hr>";
        
        function aritmatika(){
            
            $sisi = 5;
            $luas = $sisi * $sisi;
                
            echo "Hasil Dari Luas ";
        }
        
        aritmatika();
        
?>