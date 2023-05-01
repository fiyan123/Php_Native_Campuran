<?php

        if(isset($_POST['order1'])){
            
            $ayam_geprek = $_POST['ayam_geprek'];
            $ayam_bakar  = $_POST['ayam_bakar'];
            
            
            // class 
                class order1{
                    
                    // property
                        protected $ayam_geprek;
                        protected $harga1 = 20000;
                        protected $totalharga1;
                        
                        protected $ayam_bakar;
                        protected $harga2 = 25000;
                        protected $totalharga2;
                        
                        // method
                            public function ayamgeprek($harga1,$ayam_geprek){
                                
                                $this->totalharga1 = $this->harga1 * $ayam_geprek;
                                
                                echo "
                                <link rel='stylesheet' type='text/css' href='style2.css'>
                                    <br><br>
                                        <center>
                                        <h2>* MENU YANG DIPESAN *</h2>
                                            <table>
                                                    <tr>
                                                        <td>Ayam Geprek Ijo</td>
                                                        <td>: Rp.</td>
                                                        <td>$this->harga1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Order Pemesanan</td>
                                                        <td>:</td>
                                                        <td>$ayam_geprek</td>
                                                    <tr>
                                                        <td>Total Harga</td>
                                                        <td>: Rp.</td>
                                                        <td>$this->totalharga1</td>
                                                    </tr>
                                            </table>
                                        
                                        </center>
                                
                                ";
                            }
                            
                            
                            public function ayambakar($harga2,$ayam_bakar){
                                
                                $this->totalharga2 = $this->harga2 * $ayam_bakar;
                                
                                echo "
                                <link rel='stylesheet' type='text/css' href='style2.css'>
                                    <br><br>
                                        <center>
                                        <h2>* MENU YANG DIPESAN *</h2>
                                            <table>
                                                    <tr>
                                                        <td>Ayam Bakar Balado</td>
                                                        <td>: Rp.</td>
                                                        <td>$this->harga2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Order Pemesanan</td>
                                                        <td>:</td>
                                                        <td>$ayam_bakar</td>
                                                    <tr>
                                                        <td>Total Harga</td>
                                                        <td>: Rp.</td>
                                                        <td>$this->totalharga2</td>
                                                    </tr>
                                            </table>
                                        
                                        </center>
                                
                                ";
                            }
                }
                
                // instansiasi
                $nampil = new order1();
                
                echo $nampil -> ayamgeprek($harga,$ayam_geprek);
                //echo "<br><hr>";
                echo $nampil -> ayambakar($harga2,$ayam_bakar);
        }

?>