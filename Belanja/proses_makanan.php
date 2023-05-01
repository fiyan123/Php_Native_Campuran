<?php

    if(isset($_POST['proses'])){
        
        $jenismakanan = $_POST['jenismakanan'];
        
        // class
            class makanan {
                
                // property
                    protected $ayamgeprek = 20000;
                    protected $ayambakar  = 25000;
                    protected $nasiremes  = 15000;
                
                // method
                    public function makanan1($jenismakanan){
                        
                        if ($jenismakanan == 1) {
                            
                            echo "
                            <link rel='stylesheet' type='text/css' href='style2.css'>
                            <center><br>
                                    <h3>** PEMESANAN MENU **</h3>
                                <h2>Jenis Menu Yang Dipilih</h2>
                                    <form method='POST' action='pemesanan.php'>
                                    
                                <table cellpadding='10' border='1'>
                                    <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Harga</th>
                                    </tr>
                                    <tr>
                                            <td>1.</td>
                                            <td>Ayam Geprek Ijo</td>
                                            <td>Rp.$this->ayamgeprek</td>
                                    </tr>
                                    <tr>
                                            <td>Order</td>
                                            <td><input type='number' name='ayam_geprek'></td>
                                            <td><button type='submit' name='order1'>ORDER</button></td>
                                    </tr>
                                
                                </table>
                            </form>
                         </center>
                            ";
                            
                            
                        } elseif ($jenismakanan == 2) {
                            
                            echo "
                            <link rel='stylesheet' type='text/css' href='style2.css'>
                                <center><br>
                                        <h3>** PEMESANAN MENU **</h3>
                                    <h2>Jenis Menu Yang Dipilih</h2>
                                        <form method='POST' action='pemesanan.php'>
                                        
                                    <table cellpadding='10' border='1'>
                                        <tr>
                                                <th>No</th>
                                                <th>Jenis</th>
                                                <th>Harga</th>
                                        </tr>
                                        <tr>
                                                <td>2.</td>
                                                <td>Ayam Bakar Balado</td>
                                                <td>Rp.$this->ayambakar</td>
                                        </tr>
                                        <tr>
                                                <td>Order</td>
                                                <td><input type='number' name='ayam_bakar'></td>
                                                <td><button type='submit' name='order1'>ORDER</button></td>
                                        </tr>
                                    
                                    </table>
                                </form>
                             </center>
                                ";
                            
                        } elseif ($jenismakanan == 3) {
                            
                             echo "
                            <link rel='stylesheet' type='text/css' href='style2.css'>
                                <center><br>
                                        <h3>** PEMESANAN MENU **</h3>
                                    <h2>Jenis Menu Yang Dipilih</h2>
                                        <form method='POST' action='pemesanan.php'>
                                        
                                    <table cellpadding='10' border='1'>
                                        <tr>
                                                <th>No</th>
                                                <th>Jenis</th>
                                                <th>Harga</th>
                                        </tr>
                                        <tr>
                                                <td>3.</td>
                                                <td>Nasi Remes Mangkok</td>
                                                <td>Rp.$this->nasiremes</td>
                                        </tr>
                                        <tr>
                                                <td>Order</td>
                                                <td><input type='number' name='nasi_remes'></td>
                                                <td><button type='submit' name='order1'>ORDER</button></td>
                                        </tr>
                                    
                                    </table>
                                </form>
                             </center>
                                ";
                            
                        } elseif ($jenismakanan == 4) {
                            echo "Nasi Goreng";
                            
                        } elseif ($jenismakanan == 5) {
                            echo "Telor Balado Ijo";
                        }
                        
                    }
            }
            
            // instansiasi
            $tampil = new makanan();
            
            echo $tampil -> makanan1($jenismakanan);
    }

?>