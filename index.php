<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="”en”">
  <head>
    <meta charset="”UTF-8″" />
    <meta name="”viewport”" content="”width" ="device-width," initial-scale="1.0″" />
    <meta http-equiv="”X-UA-Compatible”" content="”ie" ="edge”" />
    <title>Home</title>
    <style>
      body {
        background-color: black;
        padding-top: 50px;
      }
      .judul {
        margin: auto;
        font-weight: bold;
        height: 370px;
        width: 550px;
        background-color: white;
        border-radius: 5px;
        font-size: 20px;
      }
      h1 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
      }
      p {
        text-align: center;
        font-size: 18px;
        font-weight: lighter;
      }
    </style>
  </head>
  <body>
    <div class="judul">
      <br />
      <blockquote style="text-align: center; font-weight: bold">"APLIKASI PENJUALAN NINE MART"</blockquote>
      <hr style="font-weight: bold" />
      <h1>Menu</h1>
      <p><a href="stok_barang.php">STOK BARANG</a> | <a href="transaksi.php">TRANSAKSI</a></p>
      <p><a href="lihat_stok_barang.php">LIHAT STOK BARANG</a> | <a href="lihat_transaksi.php">LIHAT TRANSAKSI</a></p>
      <br /><br /><br />
      <blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote>
    </div>
    <br />
  </body>
</html>
