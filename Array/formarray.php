<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Form Array</title>
    
    <style>
    .btn_style{
    border: 1px solid #cecece;
    border-radius: 3px;
    padding: 3px 10px;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
    color: white;
    background-color: blue;
    }
    .btn_style:hover{
    border: 1px solid #b1b1b21;
    box-shadow: 2px 10px 10px rgba(0, 0, 0, 0.5);
    border-radius: 100%;
    }
    </style>
    
  </head>
  
  <body style="background-image : url(1.jpg);">
      
      <form action="" method="post">
          <br>
          <div class="container">
          <div class="card" style="width: 30rem; height : 16rem;">
              <br>
              <div class="card-body">
                 <center>
                    <h4><font face="Lucida Bright">" PERHITUNGAN NILAI SISWA "</font></h4>
                </center>
                <hr>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Siswa :</label>
                    <input type="number" class="form-control" name="jumlah">
                  </div>
                  <div class="card text-right">
                      <button type="submit" class="btn btn-primary" name="save">Submit</button>
                  </div>
            </div>
        </div>
    </div>
</form>
<br>
<hr>
    <?php
    
        if(isset($_POST['save'])){
            $jumlah = $_POST['jumlah'];
    ?>
    
<center>
    <form action="hasilarray.php" method="POST">
        <table>
            <?php
                 for ($i = 1; $i <= $jumlah; $i++) {
            ?>
            <tr>
                <td></td>
                <td></td>
                <td style="padding-top :20px"><p><b>Data Siswa Ke - <?php echo $i; ?></b></p></td>
            </tr>
            
            <tr>
                <td>NIS</td>
                <td>: </td>
                <td><input type="number" name="nis[]"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>: </td>
                <td><input type="text" name="nama[]"></td>
            </tr>
            <tr>
                <td>NILAI MATEMATKA</td>
                <td>: </td>
                <td><input type="number" name="mtk[]"></td>
            </tr>
            <tr>
                <td>NILAI B.INDONESIA</td>
                <td>: </td>
                <td><input type="number" name="indonesia[]"></td>
            </tr>
            <tr>
                <td>NILAI B.INGGRIS</td>
                <td>: </td>
                <td><input type="number" name="inggris[]"></td>
            </tr>
            <tr>
                <td>NIILAI PRODUKTIF</td>
                <td>: </td>
                <td><input type="number" name="kejuruan[]"></td>
            </tr>
            
            <?php
                 }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="simpan" class="btn_style">PROSES</button></td>
            </tr>
        </table>
    </form>
</center>
    <?php
    
        }
        
    ?>



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