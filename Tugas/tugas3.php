<?php

    $berita = [
    
    [
        "kategori" => "Olahraga",
        "judul"    => "Bola Basket Internasional",
        "artikel"  => "Kemenangan bola basket berhasil memasuki kaca internasiona ini merupakan sesuatu yang berharga bagi negara kita karena sangat membanggakan
                        ",
        "tanggal"  => "19 Januari 2011"
    ],
    
    [
        "kategori" => "Rumah Murah",
        "judul"    => "Komplek Rumah Terjangkau",
        "artikel"  => "Disini tersedia berbagai macam rumah yang murah dan terjangkau",
        "tanggal"  => "16 Maret 2020"
    ]
];


        echo "<center><h2> ' BERITA HARIAN '</h2></center><hr>";
        
        foreach ($berita as $isi) {
            
            echo "Kategori : " .$isi['kategori']."<br><br>";
            echo "<b>Judul    : " .$isi['judul']."<br><br></b>";
            echo "Artikel  : " .$isi['artikel']."<br><br>";
            echo "<i><div align='right'>Tanggal  : " .$isi['tanggal']."<br></div></i>";
            echo "<hr>";
        }


?>