<?php

        // membuat fungsi
        
        function umur($thn_lahir , $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            return $umur;
        }
        
         // membuat fungsi lagi
         function kenalan($nama, $salam="Assalamualaikum"){
            echo $salam.", <br>";
            echo "Perkenalkan nama saya " .$nama. "<br>";
            
            // memanggil fungsi lain
            echo "Saya berusia ".umur(2005 , 2022)." tahun <br>";
            echo "Senang berkenalan dengan anda";
        }
        // memanggil fungsi kenalan
        kenalan("Adrian");
?>