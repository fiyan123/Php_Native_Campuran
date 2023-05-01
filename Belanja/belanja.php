<html>
    <head>
        <title>
            Array Belanja
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <center>
            
                <form method="post" action="">
                    <br>
                    <br>
                    <fieldset>
                        <span class="d-block w-50 bg-secondary rounded mx-auto" style="height : 2px"></span>
                    <h2>"DAFTAR BARANG MAKANAN PER MEJA HEMAT"</h2>
                    
                        <table cellpadding="4">
                            <tr>
                                <td>1.</td>
                                <td>Roti Panggang Coklat</td>
                                <td>Rp15.000</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Minyak Goreng Sawit</td>
                                <td>Rp14.000</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Susu Indomilk Kaleng</td>
                                <td>Rp10.000</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Roti Bakar Spesial</td>
                                <td>Rp20.000</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Martabak Manis Susu</td>
                                <td>Rp25.000</td>
                            </tr>
                            <tr>
                                <td style="padding-top : 20px"><p>Pesan Meja :</p></td>
                                <td style="padding-top : 20px"><input type="number" name="menu" required></td>
                                <td style="padding-top : 20px"><button type="submit" name="pesan">SAVE</button></td>
                            </tr>
                        </table>
                        </fieldset>
                </form>
                <br>
                
                <?php
                
                    if(isset($_POST['pesan'])){
                        
                        $menu = $_POST['menu'];
                ?>
                
                <form action="hasilbelanja.php" method="post">
                    
                    <table>
                        <hr>
                        
                        <?php
                            for ($i = 1; $i <= $menu; $i++) {
                        ?>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="padding-top : 20px"><p>Pesanan Meja  Ke - <?php echo $i; ?><br></p></td>
                        </tr>
                        <tr>
                            <td>Roti Panggang Coklat</td>
                            <td>:</td>
                            <td><input type="number" name="roti[]" required></td>
                        </tr>
                        <tr>
                            <td>Minyak Goreng Sawit</td>
                            <td>:</td>
                            <td><input type="number" name="minyak[]" required></td>
                        </tr>
                        <tr>
                            <td>Susu Indomilk Kaleng</td>
                            <td>:</td>
                            <td><input type="number" name="susu[]" required></td>
                        </tr>
                        <tr>
                            <td>Roti Bakar Spesial</td>
                            <td>:</td>
                            <td><input type="number" name="bakar[]" required></td>
                        </tr>
                        <tr>
                            <td>Martabak Manis Susu</td>
                            <td>:</td>
                            <td><input type="number" name="martabak[]" required></td>
                        </tr>
                        
                        <?php
                            }
                        ?>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="save">ORDER</button></td>
                        </tr>
                    </table>
                    <hr>
                </form>
                
                <?php
                    }
                ?>
        </center>
    </body>
</html>