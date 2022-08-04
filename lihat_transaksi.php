<?php 
include 'koneksi.php';

if (isset($_GET['no_faktur'])) {
    $NoFaktur = $_GET['no_faktur'];
    $query = "DELETE FROM tb_penjualan WHERE no_faktur=$NoFaktur";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: lihat_transaksi.php?hapus=sukses');
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
    <title>Tabel Transaksi</title>
    <style>
      body {
        background-color: black;
        padding-top: 50px;
      }
      .judul {
        margin: auto;
        font-weight: bold;
        height: 500px;
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
      <p><a href="transaksi.php">[+] Tambah Data</a> | <a href="export_transaksi.php">Export Data</a>
      <table border="1">
            <tr>
                <th>Nomer Faktur</th>
                <th>Nama Konsumen</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
                <th>Aksi</th>
            </tr>
            <?php
                $query = mysqli_query($conn, "SELECT * FROM tb_penjualan");
                    while ($data = mysqli_fetch_array($query)) {
                ?>
            <tr>
                <td><?php echo $data['no_faktur']; ?></td>
                <td><?php echo $data['nama_konsumen']; ?></td>
                <td><?php echo $data['kode_barang']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td><?php echo $data['harga_satuan']; ?></td>
                <td><?php echo $data['harga_total']; ?></td>
                <td><a href='edit_transaksi.php?id="<?= $data['id'] ?>"'>Edit | <a href='lihat_transaksi.php?no_faktur="<?= $data['no_faktur'] ?>"'>Hapus</a></a></td>
            </tr>
                <?php
                }
                ?>
        </table>
        <p align="center">Total : <?php echo mysqli_num_rows($query) ?></p>
      <p><a href="stok_barang.php">STOK BARANG</a> | <a href="transaksi.php">TRANSAKSI</a></p>
      <br />
      <footer><blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote></footer>
    </div>  
    <br />
  </body>
</html>