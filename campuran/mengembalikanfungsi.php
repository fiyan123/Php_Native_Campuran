<?php

        function hitungumur($thn_lahir , $thn_sekarang){
            $umur = $thn_sekarang - $thn_lahir;
            
            // untuk mengembalikan nilai gunakan return
            return $umur;
        }
        
        echo "Umur Saya Adalah : ".hitungumur(2005 , 2022)." Tahun";
?>