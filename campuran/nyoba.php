<?php

$materi = [
    
    [
        
        "kelas"   => "XI RPL 3",
        "sekolah" => "SMK ASSALAAM BANDUNG"
        
    ],
    
    [
        
        "kelas"   => "XII RPL 3",
        "sekolah" => "SMK MARHAS"
        
    ],
    
    ];
    
    foreach ($materi as $isi) {
        echo "NAMA ANDA    : ".$isi['kelas']."<br>";
        echo "SEKOLAH ANDA : ".$isi['sekolah']."<hr>";
    }
    
    
    
    // FUNCTION php
    
    echo "<hr>";
    
    function perkenalan(){
        echo "PERKENALKAN NAMA SAYA : ";
        $nama = "ian";
    }
    
    perkenalan();
    
    //PEMANGGILAN HARI OTOMATIS
    echo "<hr>";
    echo date("l-d-m-y");

?> 
<span class="d-block w-50 bg-secondary rounded mx-auto" style="height : 2px"></span>