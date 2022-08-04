<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tb_penjualan WHERE id=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql); 
if (mysqli_num_rows($sql) < 1) {
  echo "<script>alert('Data tidak ditemukan')</script>";
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $no_faktur = $_POST['no_faktur'];
    $nama_konsumen= $_POST['nama_konsumen'];
    $kode_barang = $_POST['kode_barang'];
    $jumlah = $_POST['jumlah'];
    $harga_satuan = $_POST['harga_satuan'];
    $harga_total = $_POST['harga_total'];

  $query = "UPDATE tb_penjualan SET no_faktur='$no_faktur', nama_konsumen='$nama_konsumen', kode_barang='$kode_barang', jumlah='$jumlah', 'harga_satuan='$harga_satuan', 'harga_total='$harga_total' WHERE id=$id";
  $sql = mysqli_query($conn, $query);
  if ($sql)  {
    header('Location: lihat_transaksi.php?edit=sukses.php');
  } else {
    echo "<script>alert('Data gagal diedit')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="”en”">
  <head>
    <meta charset="”UTF-8″" />
    <meta name="”viewport”" content="”width" ="device-width," initial-scale="1.0″" />
    <meta http-equiv="”X-UA-Compatible”" content="”ie" ="edge”" />
    <title>Edit Transaksi</title>
    <style>
      body {
        background-color: black;
        padding-top: 50px;
      }
      .judul {
        margin: auto;
        font-weight: bold;
        height: 655px;
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
      form {
        font-weight: normal;
        margin-left: 185px;
      }
      button {
        text-decoration: none;
        color: black;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="judul">
      <br />
      <blockquote style="text-align: center; font-weight: bold">"APLIKASI PENJUALAN NINE MART"</blockquote>
      <hr style="font-weight: bold" />
      <h1>TRANSAKSI</h1>
      <br />
      <form action="edit_transaksi.php" method="post">
        <div class="row">
          <label>Id</label><br />
          <input type="text" name="id" value="<?php echo $data['id']; ?>"/>
        </div>
        <div class="row">
          <label>Nomer Faktur</label><br />
          <input type="text" name="no_faktur" value="<?php echo $data['no_faktur']; ?>"/>
        </div>
        <div class="row">
          <label>Nama Konsumen</label><br />
          <input type="text" name="nama_konsumen" value="<?php echo $data['nama_konsumen']; ?>"/>
        </div>
        <div class="row">
          <label>Kode Barang</label><br />
          <input type="number" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"/>
        </div>
        <div class="row">
          <label>Jumlah</label><br />
          <input type="number" name="jumlah" value="<?php echo $data['jumlah']; ?>"/>
        </div>
        <div class="row">
          <label>Harga Satuan</label><br />
          <input type="number" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>"/>
        </div>
        <div class="row">
          <label>Harga Total</label><br />
          <input type="number" name="harga_total" value="<?php echo $data['harga_total']; ?>"/>
        </div>
        <div class="row">
          <br />
          <input type="submit" name="submit" value="Update" style="font-weight: bold" />&nbsp;<button type="button"><a href="lihat_transaksi.php">Kembali</a></button>
        </div>
      </form>
      <br />
      <p><a href="lihat_stok_barang.php">LIHAT STOK BARANG</a> | <a href="lihat_transaksi.php">LIHAT TRANSAKSI</a></p>
      <br />
      <blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote>
    </div>
    <br />
  </body>
</html>
