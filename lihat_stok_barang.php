<?php 
include 'koneksi.php';
if (isset($_GET['kode_barang'])) {
    $KodeBarang = $_GET['kode_barang'];
    $query = "DELETE FROM tb_master WHERE kode_barang=$KodeBarang";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: lihat_stok_barang.php?hapus=sukses');
    } else {
        echo "<script>alert('Data gagal dihapus')</script>";
    }
}
 ?>
<!DOCTYPE html>
<html lang="”en”">
  <head>
    <meta charset="”UTF-8″" />
    <meta name="”viewport”" content="”width" ="device-width," initial-scale="1.0″" />
    <meta http-equiv="”X-UA-Compatible”" content="”ie" ="edge”" />
    <title>Tabel Stok</title>
    <style>
      body {
        background-color: black;
        padding-top: 50px;
      }
      .judul {
        margin: auto;
        font-weight: bold;
        height: 450px;
        width: 900px;
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
        text-decoration: none;
      }
      table {
        margin-left: 20px;
      }
    </style>
  </head>
  <body>
    <div class="judul">
      <br />
      <blockquote style="text-align: center; font-weight: bold">"APLIKASI PENJUALAN NINE MART"</blockquote>
      <hr style="font-weight: bold" />
      <h1>TABEL STOK BARANG</h1>
      <p><a href="stok_barang.php">[+] Tambah Data</a> | <a href="export_stok_barang.php">Export Data</a>
      <table border="1">
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Satuan</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
        <?php
          $query = mysqli_query($conn, "SELECT * FROM tb_master");
            while ($data = mysqli_fetch_array($query)) {
          ?>
        <tr>
          <td><?php echo $data['kode_barang']; ?></td>
          <td><?php echo $data['nama_barang']; ?></td>
          <td><?php echo $data['harga_jual']; ?></td>
          <td><?php echo $data['harga_beli']; ?></td>
          <td><?php echo $data['satuan']; ?></td>
          <td><?php echo $data['kategori']; ?></td>
          <td><a href='edit_stok_barang.php?kode_barang="<?= $data['kode_barang'] ?>"'>Edit | <a href='lihat_stok_barang.php?kode_barang="<?= $data['kode_barang'] ?>"'>Hapus</a></a></td>
        </tr>
          <?php
          }
          ?>
      </table>
      <!-- hitung jumlah data kemudian tampilkan -->
	    <p align="center">Total : <?php echo mysqli_num_rows($query) ?></p>
      <br />
      <p><a href="stok_barang.php">STOK BARANG</a> | <a href="transaksi.php">TRANSAKSI</a></p>
      <footer><blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote></footer>
    </div>
    <br />

  </body>
</html>