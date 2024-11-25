<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Uas Fadly</title>
  </head>
  <body>
    <form action="" method="post">
    <center><img src="Assalaam.png" class="img-fluid" alt="..."></center>
    <center><h1>Penggajihan Guru & Karyawan Yayasan Assalaam</h1></center>
    <center><div class="card" style="width: 60rem;">
  <div class="card-header">
   <h2> Data Penggajihan Guru & Karyawan</h2>
  </div>
  <div class="card-body mb-3">
    <blockquote class="blockquote mb-0">
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nomor : </label>
  <input type="text" class="form-control" name="no" placeholder="Nomor">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Nama Lengkap : </label>
  <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap">
  <label for="formGroupExampleInput2" class="form-label">Unit Pendidikan : </label>
  <select class="form-select" aria-label="Default select example" name="up">
  <option selected>Unit Pendidikan</option>
  <option value="TK">TK</option>
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="MTs">MTs</option>
    <option value="SMA">SMA</option>
    <option value="SMK">SMK</option>
    <option value="MA">MA</option>
</select>
<label for="formGroupExampleInput2" class="form-label">Tanggal Gajian : </label>
<input type="date" class="form-control" name="tg" placeholder="Tanggal Gajian">
<div class="row">
  <div class="col">
    <h2>Gaji</h2>
    <label for="formGroupExampleInput2" class="form-label">Jabatan : </label>
    <select class="form-select" aria-label="Default select example" name="jabat">
  <option selected>Jabatan</option>
  <option value="Kepala Sekolah">Kepala Sekolah</option>
    <option value="Wakasek">Wakasek</option>
    <option value="Guru">Guru</option>
    <option value="Karyawan">Karyawan</option>
</select>
<label for="formGroupExampleInput2" class="form-label">Lama Kerja : </label>
    <input type="number" class="form-control" placeholder="Lama Kerja" aria-label="Last name" name="lk">
    <label for="formGroupExampleInput2" class="form-label">Status Kerja : </label>
    <select class="form-select" aria-label="Default select example" name="sk">
  <option selected>Status Kerja</option>
  <option value="Tetap">Tetap</option>
  <option value="Kontrak">Kontrak</option>
</select>
  </div>
  <div class="col mb-5">
    <h2>Potongan</h2>
    <label for="formGroupExampleInput2" class="form-label">BPJS : </label>
    <input type="number" class="form-control" placeholder="BPJS" aria-label="Last name" name="BPJS">
    <label for="formGroupExampleInput2" class="form-label">Pinjaman : </label>
    <input type="number" class="form-control" placeholder="Pinjaman" aria-label="Last name" name="Pinjaman">
    <label for="formGroupExampleInput2" class="form-label">Cicilan : </label>
    <input type="number" class="form-control" placeholder="Cicilan" aria-label="Last name" name="Cicilan">
    <label for="formGroupExampleInput2" class="form-label">Infaq : </label>
    <input type="number" class="form-control" placeholder="Lainya" aria-label="Last name" name="Infaq">
  </div>
  <center><table>
    <tr>
        <td><button type="submit" class="btn btn-primary" name="kirim">Process</button></td>
    </tr>
  </table></center>
</div>
</div>
    </blockquote>
  </div>
</div>
</center>

<center><div class="card mt-5" style="width: 60rem;">
  <div class="card-header">
    <h2>Yayasan Assalaam</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <table>
<?php

if (isset($_POST['kirim'])) {
  $no = $_POST['no'];
  $nama =$_POST['Nama'];
  $up =$_POST['up'];
  $tg = $_POST['tg'];
  $jabat = $_POST['jabat'];
  $lk = $_POST['lk'];
  $sk =$_POST['sk'];
  $bpjs =$_POST['BPJS'];
  $pinjam =$_POST['Pinjaman'];
  $cicil = $_POST['Cicilan'];
  $infaq =$_POST['Infaq'];

  class Gaji{
    //Property
    public $hasil;
    //Method
    public function inputan($no1,$nama1,$up1,$tg1,$jabat1,$lk1,$sk1,$bpjs1,$pinjam1,$cicil1,$infaq1){
      if ($jabat1=="Kepala Sekolah") {
        $gaji =10000000;
        if ($sk1=="Tetap") {
          $bonus = 1000000;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
        elseif ($sk1=="Kontrak") {
          $bonus = 0;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
      }
      elseif ($jabat1=="Wakasek") {
        $gaji =7000000;
        if ($sk1=="Tetap") {
          $bonus = 1000000;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
        elseif ($sk1=="Kontrak") {
          $bonus = 0;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
      }
      elseif ($jabat1=="Guru") {
        $gaji =5000000;
        if ($sk1=="Tetap") {
          $bonus = 1000000;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
        elseif ($sk1=="Kontrak") {
          $bonus = 0;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
      }
      elseif ($jabat1=="Karyawan") {
        $gaji =2500000;
        if ($sk1=="Tetap") {
          $bonus = 1000000;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
        elseif ($sk1=="Kontrak") {
          $bonus = 0;
          $this->hasil = ($gaji+$bonus)-($bpjs1+$cicil1+$pinjam1+$infaq1);
          echo "<h2>STRUK GAJI</h2>";
          echo "<tr><td>Nomor : </td><td>" . $no1 . "</td></tr>";
          echo "<tr><td>Nama : </td><td>" . $nama1 . "</td></tr>";
          echo "<tr><td>Unit Pendidikan : </td><td>" . $up1 . "</td></tr>";
          echo "<tr><td>Tanggal Gajian : </td><td>" . $tg1 . "</td></tr>";
          echo "<tr><td>Jabatan : </td><td>" . $jabat1 . "</td></tr>";
          echo "<tr><td>Gaji : </td><td>" . $gaji . "</td></tr>";
          echo "<tr><td>Lama Kerja : </td><td>" . $lk1 . "</td></tr>";
          echo "<tr><td>Status Kerja : </td><td>" . $sk1 . "</td></tr>";
          echo "<tr><td>Bonus : </td><td>" . $bonus . "</td></tr>";
          echo "<tr><td>BPJS : </td><td>" . $bpjs1 . "</td></tr>";
          echo "<tr><td>Pinjaman : </td><td>" . $pinjam1 . "</td></tr>";
          echo "<tr><td>Cicilan : </td><td>" . $cicil1 . "</td></tr>";
          echo "<tr><td>Infaq/Lainya : </td><td>" . $infaq1 . "</td></tr>";
          echo "<tr><td>Gaji Bersih : </td><td>" . $this->hasil . "</td></tr>";
        }
      }
    }
  }
  $gaji = new Gaji();
  echo $gaji->inputan($no,$nama,$up,$tg,$jabat,$lk,$sk,$bpjs,$pinjam,$cicil,$infaq);
}
?>
</table>
</blockquote>
  </div>
</div>
</center>
</form>
</body>
</html>