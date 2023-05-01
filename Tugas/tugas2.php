<?php

    // ARRAY ASSOSIATIF 1
    $artikel = [
        
        "judul"   => "Bahasa Pemrograman Php",
        "penulis" => "Malas Ngoding Indonesia",
        "view"    => 2000
        
    ];
    
     echo "<h2>".$artikel["judul"]."</h2>";
     echo "<p> Penulis : ".$artikel["penulis"]."</p>";
     echo "<p> Views   : ".$artikel["view"]."</p>";
?>