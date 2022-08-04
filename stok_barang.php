<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $KodeBarang = $_POST['kode_barang'];
  $NamaBarang = $_POST['nama_barang'];
  $HargaJual = $_POST['harga_jual'];
  $HargaBeli = $_POST['harga_beli'];
  $Satuan = $_POST['satuan'];
  $Kategori = $_POST['kategori'];

  $query = "INSERT INTO tb_master (kode_barang, nama_barang, harga_jual, harga_beli, satuan, kategori) VALUES ('$KodeBarang','$NamaBarang','$HargaJual','$HargaBeli','$Satuan','$Kategori')";
  $sql = mysqli_query($conn, $query);

  if( $sql ) {
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    header("Refresh:0; url=lihat_stok_barang.php");
  } else {
    echo "<script>alert('Data gagal ditambahkan')</script>";
    header("Refresh:0; url=stok_barang.php?status=gagal");
  }
}
?>
<!DOCTYPE html>
<html lang="”en”">
  <head>
    <meta charset="”UTF-8″" />
    <meta name="”viewport”" content="”width" ="device-width," initial-scale="1.0″" />
    <meta http-equiv="”X-UA-Compatible”" content="”ie" ="edge”" />
    <title>Stok</title>
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
        margin-left: 130px;
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
							<td><input type="text" name="kode_barang" required autocomplete="off"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td>:</td>
							<td><input type="text" name="nama_barang" required autocomplete="off"></td>
						</tr>
						<tr>
							<td>Harga Jual</td>
							<td>:</td>
							<td><input type="text" name="harga_jual" required autocomplete="off"></td>
						</tr>
						<tr>
							<td>Harga Beli</td>
							<td>:</td>
							<td><input type="text" name="harga_beli" required autocomplete="off"></td>
						</tr>
            <tr>
							<td>Satuan</td>
							<td>:</td>
							<td><input type="text" name="satuan" required autocomplete="off"></td>
						</tr>
            <tr>
							<td>Kategori</td>
							<td>:</td>
							<td><input type="text" name="kategori" required autocomplete="off"></td>
						</tr>
					</table><br>
					<button type="submit" name="submit">Simpan</button>&nbsp;<button type="button"><a href="index.php">Kembali</a></button>
				</form>
      <br />
      <p><a href="lihat_stok_barang.php">LIHAT STOK BARANG</a> | <a href="lihat_transaksi.php">LIHAT TRANSAKSI</a></p>
      <br />
      <blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote>
    </div>
    <br />
  </body>
</html>
