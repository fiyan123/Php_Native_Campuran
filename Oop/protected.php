<?php

    //MEMBUAT CLASS
    class Laptop{
        
        // MEMBUAT PROTECTED PROPERTY
        protected $pemilik = "Andi";
        
        // MEMBUAT PROTECTED METHOD
        protected function hidupkan_laptop(){
            return "Hidupakan Laptop".$this->pemilik;
        }
        public function panggil(){
            echo $this->hidupkan_laptop();
        }
    }
    
    // MEMBUAT OBJEK DARI CLASS LAPTOP INTASNSIASI
    $laptop_anto = new laptop();
    echo $laptop_anto -> panggil();
    // SET PROPERTY AKAN MENGHASILKAN EROR
?>