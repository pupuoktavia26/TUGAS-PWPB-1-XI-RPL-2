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
      <li><a href="tugas_dua.php">Tugas Kedua</a></li>
      <li><a href="">Tugas Ketiga</a></li>
      <li><a href="">Tugas Keempat</a></li>
    </ul>
  </nav>
  <br>
  <br>
  <div id="box1">
    <p class="judul"><center><b><font size="50px">RUMUS BANGUN RUANG</p></center></font></b>
    <br>
  </div>
  <?php 
    $nama_satu = "limas segiempat";

    $nama_dua = "tabung";

    $nama_tiga = "kerucut";

    $nama_empat ="prisma segitiga";

    $nama_lima ="kubus";

    $nama_enam ="balok";

    $gif_limas = "unnamed.gif";
    $rumus_satu ="volume=1\3x(pxl)xt";
    $rumuss_satu ="luas permukaan=luas alas + luas sehubung limas";

    $gif_tabung = "tabung.gif";
    $rumus_dua ="volume=nxrxrxt";
    $rumuss_dua ="luas permukaan = (2xr2)+(2xr)";

    $gif_kerucut = "kerucut.gif";
    $rumus_tiga ="volume= 1/3xnxr2xt";
    $rumuss_tiga ="luas permukaan = (nxr2)+(nxrxs)";

    $gif_prisma = "gg.gif";
    $rumus_empat ="volume= luas alas segitiga X t atau V= 1/2xpxlxt";
    $rumuss_empat ="luas permukaan = keliling alas segitiga X t + (2x luas alas segitiga";

    $gif_kubus = "animasi.gif";
    $rumus_lima ="volume= SxSxS";
    $rumuss_lima="luas permukaan= 12xRusuk";

    $gif_balok = "cube.gif";
    $rumus_enam="volume= panjang X lebar X Tinggi";
    $rumuss_enam="luas permukaannya=(2xpxl)+(2xpxt)";
    $gambar=""

    ?>
<!doctype html>
<html>
  <head>
    <center>

        <!--- rumus 1-->
        <br>
        <br>
          <div id="box2">
             <img src="<?= $gif_limas?>" width="200px" height="200px">
          <b><?php echo $nama_satu?></b>
          <br>
          <br>
          <b><?php echo $rumus_satu ?></b>
          <b><?php echo $rumuss_satu ?></b>

         <br>
         <br>
        </p>
        </div>

        <style>
          .gambar{
            width: 35%;
            height: 20px;

          }
        </style>
      </div>
    </div>
       <!--- rumus selesai -->
<br>
    <!--- rumus -->
           <div id="box2">
             <img src="<?= $gif_tabung?>">
          <b><?php echo $nama_dua ?></b>
          <br>
          <br>
          <b><?php echo $rumus_dua ?></b>
          <br>
          <b><?php echo $rumuss_dua ?></b>
          </p>
        </div>
  </div>
</div>
       <!--- rumus -->
<br>
<br>

<br>
    <!--- rumus -->
           <div id="box2">
             <img src="<?= $gif_kerucut?>">
          <b><?php echo $nama_tiga ?></b>
          <br>
          <br>
          <b><?php echo $rumus_tiga ?></b>
          <br>
          <b><?php echo $rumuss_tiga ?></b>
          </p>
        </div>
      </div>
</div>
       <!--- rumus selesai -->
<br>
<br>

<br>
    <!--- rumus -->
           <div id="box2">
             <img src="<?= $gif_prisma?>">
          <b><?php echo $nama_empat ?></b>
          <br>
          <br>
          <b><?php echo $rumus_empat ?></b>
          <br>
          <b><?php echo $rumuss_empat ?></b>
            </p>
        </div>
      </div>
</div>
       <!--- rumus selesai -->
<br>
<br>


<br>
<br>
    <!--- rumus -->
           <div id="box2">
             <img src="<?= $gif_kubus?>">
          <b><?php echo $nama_lima ?></b>
          <br>
          <br>
          <b><?php echo $rumus_empat ?></b>
          <br>
          <b><?php echo $rumuss_empat ?></b>
        </p>
        </div>
      </div>
</div>
       <!--- rumus selesai -->
<br>
<br>
    <!--- rumus -->
           <div id="box2">
             <img src="<?= $gif_balok?>" width="200px" height="200px">
          <b><?php echo $nama_enam ?></b>
         <br>
         <br>
         <b><?php echo $rumus_empat ?></b>
          <br>
          <b><?php echo $rumuss_empat ?></b>
         </p>
        </div>
    </div>
    <br>
    <br>


     <!--- rumus selesai -->

<main role="main" class="container">
  <div class="row">
      <center><h3 class="pb-4 mb-4 font-italic border-bottom">
        <br>
        <br>
        <center><h3> Sekian Terimakasih</h3></center>
        <center><h3>Since 2019</h3></center>
        <br>
        <br>
      </center>
</body>
</html>
