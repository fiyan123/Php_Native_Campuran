<?php

    if(isset($_POST['save'])){
        
        $roti     = $_POST['roti'];
        $minyak   = $_POST['minyak'];
        $susu     = $_POST['susu'];
        $bakar    = $_POST['bakar'];
        $martabak = $_POST['martabak'];
    }
    
?>

<html>
    <head>
        <title>
            Hasil Belanja 
        </title>
    </head>
            <body style="background-image : url(2.jpg); background-repeat : no repeat; background-size : cover;">
            <center>
                <br>
                    <h2>" DAFTAR HARGA HASIL BELANJAAN  "</h2>
                    
                        <table border="3" cellpadding="5">
                            
                            <tr>
                                <th>ROTI PANGGANG COKLAT</th>
                                <th>MINYAK GORENG SAWIT</th>
                                <th>SUSU INDOMILK KALENG</th>
                                <th>ROTI BAKAR SPESIAL</th>
                                <th>MARTABAK MANIS SUSU</th>
                            </tr>
                            
                            <?php
                            
                                    for ($a = 0; $a < count($roti); $a++) {
                            ?>
                            
                            <tr>
                                <td>
                                    <?php 
                                            $harga = $roti[$a] * 15000;
                                            
                                            echo "<br> Total Harga : Rp.$harga";
                                            echo "
                                                <br>
                                                <br>
                                                <form action='hasilbayar.php' method='post'>
                                                <label><b>Bayar : </b></label>
                                                <input type='number' name='bayar'>
                                                <input type='hidden' name='harga' value='$harga'>
                                                <p align='right'>
                                                    <input type='submit' name='hasil' value='SEND'>
                                                </p>
                                                </form>
                                            ";
                                      ?>
                                </td>
                                
                                <td>
                                    <?php
                                            $harga = $minyak[$a] * 14000;
                                            
                                            echo "<br> Total Harga : Rp.$harga";
                                            echo "
                                                <br>
                                                <br>
                                                <form action='hasilbayar.php' method='post'>
                                                <label><b>Bayar : </b></label>
                                                <input type='number' name='bayar'>
                                                <input type='hidden' name='harga' value='$harga'>
                                                <p align='right'>
                                                    <input type='submit' name='hasil' value='SEND'>
                                                </p>
                                                </form>
                                            ";
                                    ?>
                                </td>
                                
                                <td>
                                    <?php
                                            $harga = $susu[$a] * 10000;
                                            
                                            echo "<br> Total Harga : Rp.$harga";
                                            echo "
                                                <br>
                                                <br>
                                                <form action='hasilbayar.php' method='post'>
                                                <label><b>Bayar : </b></label>
                                                <input type='number' name='bayar'>
                                                <input type='hidden' name='harga' value='$harga'>
                                                <p align='right'>
                                                    <input type='submit' name='hasil' value='SEND'>
                                                </p>
                                                </form>
                                            ";
                                    ?>
                                </td>
                                
                                <td>
                                    <?php
                                            $harga = $bakar[$a] * 20000;
                                            
                                            echo "<br> Total Harga : Rp.$harga";
                                            echo "
                                                <br>
                                                <br>
                                                <form action='hasilbayar.php' method='post'>
                                                <label><b>Bayar : </b></label>
                                                <input type='number' name='bayar'>
                                                <input type='hidden' name='harga' value='$harga'>
                                                <p align='right'>
                                                    <input type='submit' name='hasil' value='SEND'>
                                                </p>
                                                </form>
                                            ";
                                    ?>
                                </td>
                                
                                <td>
                                    <?php
                                            $harga = $susu[$a] * 25000;
                                            
                                            echo "<br> Total Harga : Rp.$harga";
                                            echo "
                                                <br>
                                                <br>
                                                <form action='hasilbayar.php' method='post'>
                                                <label><b>Bayar : </b</label>
                                                <input type='number' name='bayar'>
                                                <input type='hidden' name='harga' value='$harga'>
                                                <p align='right'>
                                                    <input type='submit' name='hasil' value='SEND'>
                                                </p>
                                                </form>
                                            ";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                </center>
         </body>
</html>