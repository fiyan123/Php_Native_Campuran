<?php
        if(isset($_POST['simpan'])){
            $nis       = $_POST['nis'];
            $nama      = $_POST['nama'];
            $mtk       = $_POST['mtk'];
            $indonesia = $_POST['indonesia'];
            $inggris   = $_POST['inggris'];
            $kejuruan  = $_POST['kejuruan'];
        }
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        table{
            background: black;
            color: white;
        }
    </style>
  </head>
  <body style="background-image : url(1.jpg)">
        
<center>
    <!-- ISI-->
    
    <br>
    <div class="card" style="width : 150%">
        <font face="Lucida Bright">
          <div class="card-header">
              <b>" HASIL AKHIR PENGINPUTAN NILAI SISWA "</b>
          </div>
          </font>
          <div class="card-body">
              <table border="2" cellpadding="7">
                  <tr>
                      <th>NIS</th>
                      <th>NAMA</th>
                      <th>MATEMATIKA</th>
                      <th>B.INDONESIA</th>
                      <th>B.INGGRIS</th>
                      <th>KEJURUAN</th>
                      <th>RATA-RATA</th>
                      <th>KELULUSAN</th>
                  </tr>
                  
                  <?php
                  
                          for ($a = 0; $a < count($nama); $a++) {
                  
                  ?>
                  
                  <tr>
                      <td><?php echo $nis[$a]; ?></td>
                      <td><?php echo $nama[$a]; ?></td>
                      <td><?php echo $mtk[$a]; ?></td>
                      <td><?php echo $indonesia[$a]; ?></td>
                      <td><?php echo $inggris[$a]; ?></td>
                      <td><?php echo $kejuruan[$a];  ?></td>
                      <td>
                          <?php
                          
                                  $rata = ($mtk[$a] + $indonesia[$a] + $inggris[$a] + $kejuruan[$a])/4;
                                  
                                      echo $rata;
                          ?>
                      </td>
                      <td>
                          <?php
                          
                                  if ($rata >= 75) {
                                      $rata = "LULUS";
                                  }
                                  else {
                                      $rata = "GAGAL";
                                  }
                                  
                                  echo $rata;
                              }
                          ?>
                      </td>
                  </tr>
                  
              </table>
            <blockquote class="blockquote mb-0"><br><hr>
                <footer class="blockquote-footer">&copy; Copyright 2022<cite title="Source Title"></cite></footer>
            </blockquote>
         </div>
    </div>
</center>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>