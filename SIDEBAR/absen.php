<?php

if (isset($_POST["submit"])) {
   if (add($_POST) > 0) {
      echo "
      <script>
        alert('Presensi Berhasil!');
        document.location.href = 'tabek.php';
      </script>
    ";
   } else {
      echo "
    <script>
        alert('Prensensi Gagal!');
        document.location.href = 'tabel.php';
      </script>
    ";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Link Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <!-- Link CSS -->
   <link rel="stylesheet" href="absen.css">
   <style>
      body {
         margin: 40px;
      }
   </style>
   <!-- Title -->
   <title>Add Data</title>
</head>

<body>
   <h1 class="text-center">PRESENSI MAHASISWA</h1>
   <br><br>
   <form class="container" action="" method="post">
      <a class="btn btn-secondary" href="tabel.php" role="button">Kembali</a>
      <br><br>
      <div class="form-group">
         <label for="agama">Mata Kuliah</label>
         <select class="form-control" id="agama" name="agama">
            <option value="">-- Pilih Mata Kuliah --</option>
            <option value="kewarganegaraan">kewarganegaraan</option>
            <option value="Agama">Agama</option>
            <option value="Praktek Algoritma dan Struktur Data">Praktek Algoritma dan Struktur Data</option>
            <option value="Algoritma dan Struktur Data">Algoritma dan Struktur Data</option>
            <option value="Praktek Sistem Operasi">Praktek Sistem Operasi</option>
            <option value="Workshop Pemrograman Website">Workshop Pemrograman Website</option>
            <option value="Sistem Operasi">Sistem Operasi</option>
            <option value="Praktek Basis Data">Praktek Basis Data</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Matematika-2">Matematika-2</option>
         </select>
      </div>
      <div class="form-group">
         <label for="agama">Minggu ke :</label>
         <select class="form-control" id="agama" name="agama">
            <option value="">-- Minggu ke - --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
         </select>
      </div>
      <div class="form-group">
         <label>Keterangan</label>
         <div class="form-inline">
            <div class="form-check ml-2">
               <input type="radio" class="form-check-input" id="keterangan" name="keterangan" value="Alpha">
               <label class="form-check-label" for="keterangan">Alpha</label>
            </div>
            <div class="form-check ml-2">
               <input type="radio" class="form-check-input" id="keterangan" name="keterangan" value="Hadir">
               <label class="form-check-label" for="keterangan">Hadir</label> </div>
            <div class="form-check ml-2">
               <input type="radio" class="form-check-input" id="keterangan" name="keterangan" value="Ijin">
               <label class="form-check-label" for="keterangan">Ijin</label>
            </div>
            <div class="form-check ml-2">
               <input type="radio" class="form-check-input" id="keterangan" name="keterangan" value="Sakit">
               <label class="form-check-label" for="keterangan">Sakit</label>
            </div>
            </div>
         </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
   </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>