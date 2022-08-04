<?php
include 'koneksi.php';

$kode_barang = $_GET['kode_barang'];
$query = "SELECT * FROM tb_master WHERE kode_barang=$kode_barang";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql); 
if (mysqli_num_rows($sql) < 1) {
  echo "<script>alert('Data tidak ditemukan')</script>";
}

if (isset($_POST['submit'])) {
  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $satuan = $_POST['satuan'];
  $kategori = $_POST['kategori'];

  $query = "UPDATE tb_master SET kode_barang='$kode_barang', nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', satuan='$satuan', kategori='$kategori' WHERE kode_barang=$kode_barang";
  $sql = mysqli_query($conn, $query);
  if ($sql)  {
    header('Location: lihat_stok_barang.php?edit=sukses.php');
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
    <title>Edit Stok</title>
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
        text-decoration: none;
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
      <h1>STOK BARANG</h1>
      <br />
      <form method="post" action="">
					<table border="1" class="table2">
						<tr>
							<td>Kode Barang</td>
							<td>:</td>
							<td><input type="text" name="kode_barang" required autocomplete="off" value="<?php echo $data['kode_barang']; ?>"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td>:</td>
							<td><input type="text" name="nama_barang" required autocomplete="off" value="<?php echo $data['nama_barang']; ?>"></td>
						</tr>
						<tr>
							<td>Harga Jual</td>
							<td>:</td>
							<td><input type="text" name="harga_jual" required autocomplete="off" value="<?php echo $data['harga_jual']; ?>"></td>
						</tr>
						<tr>
							<td>Harga Beli</td>
							<td>:</td>
							<td><input type="text" name="harga_beli" required autocomplete="off" value="<?php echo $data['harga_beli']; ?>"></td>
						</tr>
            <tr>
							<td>Satuan</td>
							<td>:</td>
							<td><input type="text" name="satuan" required autocomplete="off" value="<?php echo $data['satuan']; ?>"></td>
						</tr>
            <tr>
							<td>Kategori</td>
							<td>:</td>
							<td><input type="text" name="kategori" required autocomplete="off" value="<?php echo $data['kategori']; ?>"></td>
						</tr>
					</table><br>
					<button type="submit" name="submit">Simpan</button>&nbsp;<button type="button"><a href="index.html">Kembali</a></button>
			</form>
      <br />
      <p><a href="lihat_stok_barang.php">LIHAT STOK BARANG</a> | <a href="lihat_transaksi.php">LIHAT TRANSAKSI</a></p>
      <br />
      <blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote>
    </div>
    <br />
  </body>
</html>
