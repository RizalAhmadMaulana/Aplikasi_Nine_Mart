<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $NoFaktur = $_POST['no_faktur'];
  $NamaKonsumen= $_POST['nama_konsumen'];
  $KodeBarang = $_POST['kode_barang'];
  $Jumlah = $_POST['jumlah'];
  $HargaSatuan = $_POST['harga_satuan'];
  $HargaTotal = $_POST['harga_total'];

  $query = "INSERT INTO tb_penjualan (no_faktur, nama_konsumen, kode_barang, jumlah, harga_satuan, harga_total) VALUES ('$NoFaktur','$NamaKonsumen','$KodeBarang','$Jumlah','$HargaSatuan','$HargaTotal')";
  $sql = mysqli_query($conn, $query);

  if( $sql ) {
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    header("Refresh:0; url=lihat_transaksi.php");
  } else {
    echo "<script>alert('Data gagal ditambahkan')</script>";
    header("Refresh:0; url=transaksi.php?status=gagal");
  }
}
?>
<!DOCTYPE html>
<html lang="”en”">
  <head>
    <meta charset="”UTF-8″" />
    <meta name="”viewport”" content="”width" ="device-width," initial-scale="1.0″" />
    <meta http-equiv="”X-UA-Compatible”" content="”ie" ="edge”" />
    <title>Transaksi</title>
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
      <form method="post" action="">
					<table border="1" class="table2">
						<tr>
							<td>Nomer Faktur</td>
							<td>:</td>
							<td><input type="text" name="no_faktur" required autocomplete="off"></td>
						</tr>
						<tr>
							<td>Nama Konsumen</td>
							<td>:</td>
							<td><input type="text" name="nama_konsumen" required autocomplete="off"></td>
						</tr>
						<tr>
							<td>Kode Barang</td>
							<td>:</td>
							<td><input type="text" name="kode_barang" required autocomplete="off"></td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td><input type="text" name="jumlah" required autocomplete="off"></td>
						</tr>
            <tr>
							<td>Harga Satuan</td>
							<td>:</td>
							<td><input type="text" name="harga_satuan" required autocomplete="off"></td>
						</tr>
            <tr>
							<td>Harga Total</td>
							<td>:</td>
							<td><input type="text" name="harga_total" required autocomplete="off"></td>
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
