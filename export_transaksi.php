<?php 
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="”en”">
  <head>
    <meta charset="”UTF-8″" />
    <meta name="”viewport”" content="”width" ="device-width," initial-scale="1.0″" />
    <meta http-equiv="”X-UA-Compatible”" content="”ie" ="edge”" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <title>Tabel Transaksi</title>
    <style>
      body {
        background-color: black;
        padding-top: 50px;
      }
      .judul {
        margin: auto;
        font-weight: bold;
        height: 600px;
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
    </style>
  </head>
  <body>
    <div class="judul">
      <br />
      <blockquote style="text-align: center; font-weight: bold">"APLIKASI PENJUALAN NINE MART"</blockquote>
      <hr style="font-weight: bold" />
      <h1>Export STOK BARANG</h1><br>
      <table id="example" class="display" style="width:100%" border="1">
        <thead>
            <tr>
                <th>Nomer Faktur</th>
                <th>Nama Konsumen</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
            </tr>
        </thead>
        <tbody>
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
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table><br>
      <p><a href="lihat_stok_barang.php">Kembali</a>
      <br />
      <footer><blockquote style="font-weight: bold; text-align: center">@SMK Negeri 9 Semarang</blockquote></footer>
    </div><br>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
    </script>
  </body>
</html>