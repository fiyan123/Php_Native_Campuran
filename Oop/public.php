<?php

    // MEMBUAT CLASS LAPTOP
        class Laptop{
            
            // MEMBUAT PROPERTY
            public $pemilik;
            
            // MEMBUAT PUBLIC METHOD
            public function hidupkan_laptop(){
                return "Hidupkan laptop";
            }
        }
        // MEMBUAT OBJEK INTANSIASI
        $laptop_orang = new laptop();
        
        // SET PROPERTY
        $laptop_orang -> pemilik = "Ian";
        
        // MENAMPILKAN PROPERTY
        echo $laptop_orang -> pemilik."<br>";
        
        //TAMPILKAN METHOD
        echo $laptop_orang -> hidupkan_laptop();
?>