<!DOCTYPE html>
<html>
<head>
  <title>TUGAS PWPB</title>
  <link rel="stylesheet" type="text/css" href="style_dua.css">
</head>
<body>
  <br>
  <h2>KELOMPOK 9</h2>
  <br>
  <nav>
    <ul>
      <li><a href="pwpb.php">Beranda</a></li>
      <li><a href="tugas_satu.php">Tugas Kesatu</a></li>
      <li><a href="tugas_dua.php">Tugas Kedua</a></li>
      <li><a href="tugas_tiga.php">Tugas Ketiga</a></li>
      <li><a href="">Tugas Keempat</a></li>
    </ul>
  </nav>
  <br>
  <br>
      <div class="title-form">
      <h1><b>DATA IDENTITAS PESERTA DIDIK BARU<br>
          TAHUN AJARAN 2019/2020</b></h1></div></div>
        
    <br>
    <br>
    <br>
  </div>
  <div class="content-form">
    <div id="box1">
      <!--- Form Anda -->
    <form action="" method="POST">
      <br>
      <center>
      <p><b>Nama lengkap</b></p>
      <input type="text" name="Nale" size="35" placeholder=" Nama Lengkap..."><br>
      <br><br>
      <p><b>Nama Panggilan</b></p>
      <input type="text" name="napa" size="35" placeholder=" Nama Panggilan..."><br>
      <br><br>
      <p><b>Jenis Kelamin</b></p><br>
      <input type="radio" name="jk" value="Laki-Laki"><b>Laki-Laki</b>
      <input type="radio" name="jk" value="Perempuan"><b>Perempuan</b>
      <br><br>
      <p><b>NISN</b></p>
      <input type="number" name="nisn" size="10" placeholder=" No NISN..." ><br>
      <br><br>
      <p><b>NIK</b></p>
      <input type="number" name="nik" size="10" placeholder=" No NIK..." ><br>
      <br><br>
      <p><b>No SKHU</b></p>
      <input type="number" name="skhu" size="10" placeholder=" No SKHU..." ><br>
      <br><br>
      <p><b>Tempat Tanggal Lahir</b></p>
      <input type="text" name="tempat" placeholder="tempat">  <input type="date" name="tanggal">
      <br><br>
     <p><b> Asal Sekolah</b></p>
      <input type="text" name="askol" size="35" placeholder=" Asal Sekolah..." ><br>
      <br><br>
      <p><b>Tanggal Diterima Disekolah Ini</b></p>
       <input type="date" name="tgl">
      <br><br>
      <p><b>Jika Pindah Sebutkan Alasan Pindah Ke Sekolah Ini</b></p>
       <textarea name="jpsapksi" placeholder=" Silahkan Jelaskan..."></textarea><br>
      <br><br>
      <p><b>Agama</b></p><br>
      <input type="radio" name="agm" value="Islam"> <b>Islam</b><br>
        <input type="radio" name="agm" value="Kristen"> <b>Kristen</b><br>
        <input type="radio" name="agm" value="Katolik"> <b>Katolik</b><br>        
        <input type="radio" name="agm" value="Bhuda"> <b>Bhuda</b><br>
        <input type="radio" name="agm" value="Hindu"> <b>Hindu</b><br>
        <input type="radio" name="agm" value="Kong Hu Cu"> <b>Konghucu</b><br>
      <br><br>
      <p><b>Alamat</b></p>
      <textarea  name="almt" placeholder=" Alamat Anda..."></textarea><br>
      <br><br>
      <p><b>Tinggal Bersama</b></p><br>
      <input type="radio" name="tb" value="Orang Tua" > <b>Orang Tua</b>
      <input type="radio" name="tb" value="Wali" > <b>Wali</b><br>
      <br><br>
      <p><b>Transportasi Ke Sekolah</b></p><br>
      <input type="checkbox" name="tks" value="motor" > <b>Naik Sepeda Motor</b><br>
      <input type="checkbox" name="tks" value="sepeda" > <b>Naik Sepeda</b><br>
      <input type="checkbox" name="tks" value="angkot" > <b>Naik Angkot</b><br>
      <input type="checkbox" name="tks" value="jalan" > <b>Jalan Kaki</b><br>
      <br><br>
      <p><b>No Telp</b></p>
      <input type="number" name="telp" size="10" placeholder=" No Telp..." ><br>
      <br><br>
      <p><b>No KPS</b></p>
      <input type="number" name="kps" size="10" placeholder=" No KPS..." ><br>
      <br>
      <br>
     <p><b>Data Ayah Kandung : </b></p>
     <br>
       <b>Nama </b><br>
      <input type="text" name="nma" size="35" placeholder=" Nama Ayah..."><br>
      <br>
    <b>Tahun Lahir</b><br>
         <input type="text" name="tla" placeholder="tempat">  <input type="date" name="tanggal">
      <br>
      <b>Pendidikan :</b><br>
    <input type="text" name="pndk" size="35" placeholder=" Pendidikan Ayah..."><br>
    <br>
    <b>Pekerjaan :</b><br>
    <input type="text" name="pkrj" size="35" placeholder=" Pekerjaan Ayah..."><br>
     <br>
      <b>Penghasilan Perbulan</b><br><br>
   <input type="radio" name="pb" value="1500.000"> <b>1500.000</b><br>
   <input type="radio" name="pb" value="2000.000" > <b>2000.000</b><br>
   <input type="radio" name="pb" value="2500.000"> <b>2500.000</b><br>
   <input type="radio" name="pb" value="3000.000"> <b>3000.000</b><br>
   <input type="radio" name="pb" value="4000.000"> <b>4000.000</b><br>
   <input type="radio" name="pb" value="5000.000"> <b>5000.000</b><br>
   <br>
   <br>
   <br>
        <p><b>Data Ibu Kandung : </b></p>
     <br>
       <b>Nama </b><br>
      <input type="text" name="nmi" size="35" placeholder=" Nama Ibu..."><br>
      <br>
    <b>Tahun Lahir</b><br>
         <input type="text" name="tli" placeholder="tempat...">  <input type="date" name="tanggal">
      <br>
      <b>Pendidikan :</b><br>
    <input type="text" name="pndkn" size="35" placeholder=" Pendidikan Ibu..."><br>
    <br>
    <b>pekerjaan :</b><br>
    <input type="text" name="pkrjn" size="35" placeholder=" Pekerjaan Ibu..."><br>
     <br>
      <b>Penghasilan Perbulan</b><br><br>
   <input type="radio" name="pb2" value="1000.000"> <b>1000.000</b><br>
   <input type="radio" name="pb2" value="1500.000" > <b>1500.000</b><br>
   <input type="radio" name="pb2" value="2000.000"> <b>2000.000</b><br>
   <input type="radio" name="pb2" value="2500.000"> <b>2500.000</b><br>
   <input type="radio" name="pb2" value="3000.000"> <b>3000.000</b><br>
    <input type="radio" name="pb" value="4000.000"> <b>4000.000</b><br>
  </center>
  <!--- Form selesai -->
   <br><br>
   <br><br><br>
       <input type="submit" name="dft" value="daftar">
      <input type="reset" name="btl" value="batal">
   </div>
 </form>
</div>
    <br>
    <br><br><br>
</body>
</html>
 <div id="box2">
  <?php
    if(isset($_POST['Nale'])){
    echo "Nama Lengkap : ".$_POST['Nale']. "<br>";
  }
  if(isset($_POST['napa'])){
    echo "Nama Panggilan : ".$_POST['napa']. "<br>";
  }
    if(isset($_POST['jk'])){
    echo "Jenis Kelamin : ".$_POST['jk']. "<br>";
  }
  if(isset($_POST['nisn'])){
    echo "NISN : ".$_POST['nisn']. "<br>";
  }
  if(isset($_POST['nik'])){
    echo "NIK : ".$_POST['nik']. "<br>";
  }
    if(isset($_POST['skhu'])){
    echo "No SKHU : ".$_POST['skhu']. "<br>";
  }
   if(isset($_POST['tempat'])){
    echo "Tempat : ".$_POST['tempat'];
  }
    if(isset($_POST['tanggal'])){
    echo " Tanggal : ".$_POST['tanggal']. "<br>";
  }
    if(isset($_POST['askol'])){
    echo "Asal Sekolah : ".$_POST['askol']. "<br>";
  }
    if(isset($_POST['tgl'])){
    echo "Tanggal Diterima Disekolah Ini : ".$_POST['tgl']. "<br>";
  }
    if(isset($_POST['jpsapksi'])){
    echo "Jika Pindah Sebutkan Alasan Pindah Ke Sekolah Ini : ".$_POST['jpsapksi']. "<br>";
  }
    if(isset($_POST['agm'])){
    echo "Agama : ".$_POST['agm']. "<br>";
  }
   if(isset($_POST['almt'])){
    echo "Alamat : ".$_POST['almt']. "<br>";
  }
    if(isset($_POST['tb'])){
    echo "Tinggal Bersama : ".$_POST['tb']. "<br>";
  }
    if(isset($_POST['tks'])){
    echo "Transportasi Ke Sekolah : ".$_POST['tks']. "<br>";
  }
    if(isset($_POST['telp'])){
    echo "No Telp : ".$_POST['telp']. "<br>";
  }
    if(isset($_POST['kps'])){
    echo "No KPS : ".$_POST['kps']. "<br>";
  }
    if(isset($_POST['nma'])){
    echo "Nama Ayah : ".$_POST['nma']. "<br>";
  }
      if(isset($_POST['tla'])){
    echo "Tahun Lahir Ayah : ".$_POST['tla']. "<br>";
  }
      if(isset($_POST['pndk'])){
    echo "Pendidikan Ayah : ".$_POST['pndk']. "<br>";
  }
      if(isset($_POST['pkrj'])){
    echo "Pekerjaan Ayah : ".$_POST['pkrj']. "<br>";
  }
    if(isset($_POST['pb'])){
    echo "Penghasilan Perbulan Ayah : ".$_POST['pb']. "<br>";
  }
      if(isset($_POST['nmi'])){
    echo "Nama Ibu : ".$_POST['nmi']. "<br>";
  }
      if(isset($_POST['tli'])){
    echo "Tahun Lahir Ibu : ".$_POST['tli']. "<br>";
  }
      if(isset($_POST['pndkn'])){
    echo "Pendidikan Ibu : ".$_POST['pndkn']. "<br>";
  }
      if(isset($_POST['pkrjn'])){
    echo "Pekerjaan Ibu : ".$_POST['pkrjn']. "<br>";
  }
    if(isset($_POST['pb2'])){
    echo "Penghasilan Perbulan Ibu : ".$_POST['pb2']. "<br>";
  }
    if(isset($_POST['dft'])){
    echo "Anda Sudah Terdaftar : ".$_POST['dft']. "<br>";
  }
    if(isset($_POST['btl'])){
    echo "Pendafaran gagal / ulangi : ".$_POST['btl']. "<br>";
  }
  ?>    