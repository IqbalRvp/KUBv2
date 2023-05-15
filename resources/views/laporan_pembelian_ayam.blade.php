<?php 
// koneksi
include "koneksi.php";

if (isset($_POST['submit'])) {
 $bln = date($_POST['bulan']);

 if (!empty($bln)) {
  // perintah tampil data berdasarkan periode bulan
  $q = mysqli_query($conn, "SELECT * FROM pembelian_ayam WHERE MONTH(tanggal) = '$bln'");
 } else {
  // perintah tampil semua data
  $q = mysqli_query($conn, "SELECT * FROM pembelian_ayam p");
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($conn, "SELECT * FROM pembelian_ayam");
}

// hitung jumlah baris data
$s = $q->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
 <title>laporan</title>

 <!-- Bootstrap -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

  <div class="container mt-5">
  <center>
   <h1>Laporan Pembelian Ayam</h1>
  </center>

  <div class="card col-md-8 mx-auto mt-3">
   <div class="card-body">
    <div class="row">
     <div class="col-md-4 pt-2">
      <span>Jumlah data: <b><?= $s ?></b></span>
     </div>
     <div class="col-md-8">
      <form method="POST" action="" class="form-inline">
       <label for="date1">Tampilkan transaksi bulan </label>
       <select class="form-control mr-2" name="bulan">
        <option value="">-</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
       </select>
       <button type="submit" name="submit" class="btn btn-warning">Tampilkan</button>
      </form>
     </div>
    </div>

    <div class="mt-3" style="max-height: 340px; overflow-y: auto;">
     <table class="table table-bordered">
      <tr>
       <th>Tanggal</th> 
       <th>jumlah Ayam</th>
       <th>harga</th>
       <th>Total Harga</th>
      </tr>


      <?php  
    while($data = mysqli_fetch_array($q)) {         
        echo "<tr>";
        echo "<td>".$data['tanggal']."</td>"; 
        echo "<td>".$data['jumlah']."</td>";
        echo "<td>".$data['harga']."</td>"; 
        echo "<td>".$data['jumlah']* $data['harga']."</td>"; 
   }
    ?>

     </table>
     <a href="dashboard.blade.php" class="btn btn-warning">kembali</a>
    </div>
   </div>
  </div>
 </div>

</body>
</html