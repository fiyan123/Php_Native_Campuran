<?php

        if(isset($_POST['hasil'])){
            $bayar = $_POST['bayar'];
            $harga = $_POST['harga'];
        }
        
?>    
    <html>
        <head>
            <title>Hasil Akhir</title>
        </head>
        <body>
            
            <center>
                
                <form>
                    
                <br>
                    <fieldset>
                            <h2><font face="Times New Roman">" HARGA AKHIR PESANAN "</font></h2>
                    <hr>
                    <br>
                    <table border="2" cellpadding="10">
                        <tr>
                            <th>UANG BAYAR</th>
                            <th>TOTAL HARGA</th>
                            <th>DISKON</th>
                            <th>HARGA AKHIR</th>
                            <th>KEMBALIAN</th>
                        </tr>
                        <tr>
                            <td><?php echo "Rp.$bayar"; ?></td>
                            <td><?php echo "Rp.$harga"; ?></td>
                            <td>
                                <?php
                                    
                                    if ($harga >= 50000) {
                                        $diskon = $harga * 0.1;
                                        $hasil  = $harga - $diskon;
                                        
                                           echo "Diskon 10%";
                                    }
                                    else {
                                        $hasil = $harga - 0;
                                        
                                           echo "0,";
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                        echo "Rp.".$hasil;
                                ?>
                            </td>
                            <td>
                                <?php
                                        $kembalian = $bayar - $hasil;
                                            echo "Rp.$kembalian";
                                ?>
                            </td>
                        </tr>
                    </table>
                    
                        <p align="right">
                            <i>"TERIMA KASIH TELAH MEMESAN"</i><br>
                            <i><?php echo date("l-d-m-y");?></i>
                        </p>
                        <hr>
                        <br>
                        
                   <button>
                       <u><a href="belanja.php" style="color : blue">Order Again?</a></u>
                   </button>    
                 </fieldset>
                </center>
            </form>
        </body>
    </html>