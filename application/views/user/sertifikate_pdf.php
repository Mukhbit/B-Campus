<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.ico" />
  <title>Initial Cargo Handling</title>
  <style>
    @page {
      size: 5.5in 8.5in;
    }

    @page {
      size: A4 landscape;
    }

    .page {
      margin: none;
    }

    .judul {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      font-size: 48px;
    }

    .pelatihan {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      font-size: 28px;
      margin-top: 0px;
      margin-bottom: 0px;
    }

    .pernyataan {
      font-family: 'Dosis', sans-serif;
      font-size: 28px;
      margin-top: 0px;
      margin-bottom: 0px;
    }

    .nama {
      font-family: 'Dancing Script', 'cursive';
      font-size: 38px;
    }

    #table {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      /* width: 100%; */
      border: 0px solid #ddd;
      padding: 0px 0px;
    }

    .kiri {
      text-align: center;
      width: 35%;
    }

    .tengah {
      text-align: center;
      width: 35%;
    }

    .kanan {
      text-align: right;
      width: 30%;
    }

    .tabel_nilai {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      padding: 0px 0px;
      margin-left: 20%;
      text-align: center;
    }

    /* .tabel,
    th {
      border-collapse: collapse;
      text-align: center;
      border: 1px solid;
    } */

    .lembar1 {
      background-image: url("../../assets/img/sertifikat_depan.png");
      text-align: center;
      background-size: 100% 95%;
      background-repeat: no-repeat;
      padding: 0;
      margin: none;
    }

    .lembar2 {
      background-image: url("../../assets/img/sertifikate_belakang.png");
      background-size: 100% 100%;
      background-repeat: no-repeat;
      padding: 0;
      margin: 0;
    }

    .data {
      padding: 30px;
    }
  </style>
  <!-- Load paper.css for happy printing -->
  <!-- <link rel="stylesheet" href="dist/paper.css"> -->

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <!-- <style>@page { size: A4 landscape }</style> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> -->
  <link rel="stylesheet" media="screen" href="main.css" />
  <link rel="stylesheet" media="print" href="print.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Dosis:wght@300&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
</head>

<body class="A4 landscape">
  <div class="page">
    <div class="lembar1 sheet padding-10mm">
      <br>
      <h1 class='judul'><b>SERTIFIKAT</b></h1>
      <b>
        <h3 class='pelatihan'>PELATIHAN</h3>
        <p>No : <?= $sertifikate["no_regis"] ?></p>
      </b>
      <br>
      <h3 class='peryataan'>MENYATAKAN BAHWA</h3>
      <h2 class='nama'><?= $user->nama ?></h2>
      <h3>SEBAGAI <br><b>PESERTA PELATIHAN</b></h3>
      <h3><?= $sertifikate['pelatihan'] . ' ' . $histori_program[0]['sub_program'] . ' ' . $histori_program[0]['periode_program'] ?></h3>
      <br><br>
      <table id="table" style="width:90%">
        <tr style="height:200px">
          <td class='kiri'>
            <img src="<?= base_url('assets/img/qrcodeku.png') ?>" alt="QRcode-siswa" style="width:70px">
            <p>IZIN : I/LD.AVSEC.108/DKP/X/2022<br>IZIN : 421.10/Kep.02-LKP/DPMPTSP/2022</p>
          </td>
          <td class='tengah'>
            <img src="<?php echo base_url() . '/assets/img/profile/' . $user->image ?>" alt="Foto_orang" style="width:100px; height:150px;">
          </td>
          <td class='kanan'>
            Tanggerang,
            <?php
            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia 
            echo date('d M Y');
            ?>
            <br><br><br><br>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="page">
    <div class="lembar2 sheet padding-10mm">
      <p class='data'><?= $sertifikate["nama"] ?> <br> No : <?= $sertifikate["no_regis"] ?></p>
      <br><br><br><br>
      <div class="tabel_nilai">
        <table class="table table-bordered" style="width:75%" border="1">
          <tr>
            <th>No.</th>
            <th>Materi</th>
            <th>Jam Ajar</th>
          </tr>
          <tr>
            <td>1.</td>
            <td><?= $nilai[0]['materi_satu'] ?></td>
            <td><?= $nilai[0]['jam_ajar_satu'] ?> Jam</td>
          </tr>
          <tr>
            <td>2.</td>
            <td><?= $nilai[0]['materi_dua'] ?></td>
            <td><?= $nilai[0]['jam_ajar_dua'] ?> Jam</td>
          </tr>
          <tr>
            <td>3.</td>
            <td><?= $nilai[0]['materi_tiga'] ?></td>
            <td><?= $nilai[0]['jam_ajar_tiga'] ?> Jam</td>
          </tr>
          <tr>
            <td>4.</td>
            <td><?= $nilai[0]['materi_empat'] ?></td>
            <td><?= $nilai[0]['jam_ajar_empat'] ?> Jam</td>
          </tr>
          <tr>
            <td colspan="2">Total Jam Ajar</td>
            <td><?= $total = $nilai[0]['jam_ajar_satu'] + $nilai[0]['jam_ajar_dua'] + $nilai[0]['jam_ajar_tiga'] + $nilai[0]['jam_ajar_empat'] ?> Jam</td>
          </tr>
        </table>
      </div>
      <br>
      <div class="tabel_nilai">
        <table class="table table-bordered" border="1" style="float: left; margin-right: 205px; width:25%;">
          <tr>
            <th rowspan="2">NILAI</th>
            <th>Teori</th>
            <th>Praktek</th>
          </tr>
          <tr>
            <td><?= $nilai[0]['nilai_teori'] ?></td>
            <td><?= $nilai[0]['nilai_praktek'] ?></td>
          </tr>
        </table>
        <table class="table table-bordered" border="1" style="width:25%;">
          <tr>
            <th>Instruktur</th>
          </tr>
          <tr>
            <td>
              <br><br><br>
              <b>Dani Nurahman</b>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
  <script type="text/javascript">
    window.print();
  </script>
</body>

</html>