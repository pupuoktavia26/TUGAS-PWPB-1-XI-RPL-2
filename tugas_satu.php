<!DOCTYPE html>
<html>
<head>
  <title>TUGAS PWPB</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br>
  <h2>KELOMPOK 9</h2>
  <br>
  <nav>
    <ul>
      <li><a href="pwpb.php">Beranda</a></li>
      <li><a href="tugas_satu.php">Anggota Kelompok</a></li>
      <li><a href="">Tugas Kedua</a></li>
      <li><a href="">Tugas Ketiga</a></li>
      <li><a href="">Tugas Keempat</a></li>
    </ul>
  </nav>
  <br>
  <br>
  <div id="box1">
    <p class="judul"><center><b><font size="50px">INI ADALAH KAMI!! :)</p></center></font></b>
    <br>
  </div>
  <?php 
    $nama_satu = "Pupu Oktavia";
    $umur_satu = 15;
    $hobi_satu = "Makan&Tidur";
    $tinggi_satu = 155;

    $nama_dua = "Meilani Putri";
    $umur_dua = 16;
    $hobi_dua = "Berenang";
    $tinggi_dua = 158;

    $nama_tiga = "Afnan Almas Hayat";
    $umur_tiga = 17;
    $hobi_tiga = "dengerin musik";
    $tinggi_tiga = 170;

    $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;
  ?>
<!doctype html>
<html>
  <head>
    <center>

        <!--- BIODATA PUPU -->
        <br>
        <br>
          <div id="box2">
             <img src="pupu.jpg" width="200px" height="200px">
          <b><?php echo $nama_satu?></b>
         <br>
         <br>
          Umur : <?php echo $umur_satu?> <br> 
            Tinggi Badan : <?php echo $tinggi_satu ?><br> 
            Hobi : <?php echo $hobi_satu ?></p><br>
        </div>

        <style>
          .gambar{
            width: 35%;
            height: 20px;

          }
        </style>
      </div>
    </div>
       <!--- BIODATA selesai -->
<br>
<br>
    <!--- BIODATA melani -->
           <div id="box2">
             <img src="melan.jpg">
          <b><?php echo $nama_dua ?></b>
          <br>
          <br>
         Umur : <?php echo $umur_dua ?><br> 
            Tinggi Badan : <?php echo $tinggi_dua ?><br> 
            Hobi : <?php echo $hobi_dua ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
       <!--- BIODATA selesai -->
<br>
<br>
    <!--- BIODATA afnan -->
           <div id="box2">
             <img src="afnan.jpg" width="200px" height="200px">
          <b><?php echo $nama_tiga ?></b>
         <br>
         <br>
          Umur : <?php echo $umur_tiga ?><br>
            Tinggi Badan : <?php echo $tinggi_tiga ?><br>
            Hobi : <?php echo $hobi_tiga ?></p>
        
        </div>
      </div>
    </div>


     <!--- BIODATA selesai -->

<main role="main" class="container">
  <div class="row">
      <center><h3 class="pb-4 mb-4 font-italic border-bottom">
        <br>
        <br>
        <center><h3> Sekian Terimakasih!!</h3></center>
        <br>
        <br>
      </center>
</body>
</html>
