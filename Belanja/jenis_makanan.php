<?php

        if(isset($_POST['pesan'])){
            
            $menu = $_POST['menu'];
            
            // Class Parent
                class jenis_makanan{
                    
                    
                        // PROPERTY
                        protected $menu;
                }
                
                
            // Class Turunan
                class menu extends jenis_makanan{
                    
                    
                // method
                    public function jenis_menu($menu){
                        
                        if ($menu == 1) {
                            
                            echo "
                            <link rel='stylesheet' type='text/css' href='style2.css'>
                                <center><br><br>
                                    <form method='POST' action='proses_makanan.php'>
                                <h2>~~~ JENIS MAKANAN YANG TERSEDIA ~~~</h2>
                                <h3>~~ Silahkan Pilih Sesuai Selera Anda ~~</h3><br>
                                
                                    <table cellpadding='15' border='1'>
                                        <tr>
                                            <th>NO</th>
                                            <th>JENIS</th>
                                            <th>HARGA</th>
                                        </tr>
                                        
                                        <tr>
                                            <td>1.</td>
                                            <td>Ayam Geprek Ijo</td>
                                            <td>Rp.20000</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Ayam Bakar Balado</td>
                                            <td>Rp.25000</td>
                                         </tr>
                                         <tr>
                                            <td>3.</td>
                                            <td>Nasi Remes Mangkok</td>
                                            <td>Rp.15000</td>
                                         </tr>
                                         <tr>
                                            <td>4.</td>
                                            <td>Nasi Goreng</td>
                                            <td>Rp.10000</td>
                                         </tr>
                                         <tr>
                                            <td>5.</td>
                                            <td>Telor Balado Ijo</td>
                                            <td>Rp.15000</td>
                                        </tr>
                                        <tr>
                                            <td>Pilih Menu</td>
                                            <td><input type='number' name='jenismakanan' required></td>
                                            <td><button type='submit' name='proses'>PROSES</button></td>
                                        </tr>
                                    </table>
                                </form>
                            </center>
                            ";
                            
                            
                        } elseif ($menu == 2) {
                            
                            echo "
                            
                                <center><br><br>
                                <h2>~~~ JENIS MINUMAN YANG TERSEDIA ~~~</h2>
                                <h3>~~ Silahkan Pilih Sesuai Selera Anda ~~</h3><br>
                                <form method='POST' action='proses_minuman.php'>
                                
                                    <table cellpadding='15' border='1'>
                                        <tr>
                                            <th>NO</th>
                                            <th>JENIS</th>
                                            <th>HARGA</th>
                                        </tr>
                                        
                                        <tr>
                                            <td>1.</td>
                                            <td>Susu Aren</td>
                                            <td>Rp.18000</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Susu Jahe</td>
                                            <td>Rp.10000</td>
                                         </tr>
                                         <tr>
                                            <td>3.</td>
                                            <td>Milkshake Boba</td>
                                            <td>Rp.25000</td>
                                         </tr>
                                         <tr>
                                            <td>4.</td>
                                            <td>Thai Tea</td>
                                            <td>Rp.15000</td>
                                         </tr>
                                         <tr>
                                            <td>5.</td>
                                            <td>Wedang Bajigur</td>
                                            <td>Rp.15000</td>
                                        </tr>
                                        <tr>
                                            <td>Pilih Menu</td>
                                            <td><input type='number' name='jenisminuman' required></td>
                                            <td><button type='submit' name='proses'>PROSES</button></td>
                                        </tr>
                                    </table>
                                </form>
                            </center>
                            ";
                        }
                    }
                }
                
                
                // instansiasi object
                $cetak = new menu();
                
                echo $cetak->jenis_menu($menu);
        }
?>