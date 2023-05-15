
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
   <h1>Laporan Penjualan Ayam</h1>
  </center>

  <div class="card col-md-8 mx-auto mt-3">
   <div class="card-body">
    <div class="row">
     <div class="col-md-4 pt-2">

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
       <th>id penjualan ayam</th>
       <th>jumlah</th>
       <th>harga</th>
       <th>tanggal</th>
      </tr>
      <tbody>
        @foreach($penjualan_ayam as $item)
        <tr>
          <td>{{$item->id_penjualan_ayam}}</td>
          <td>{{$item->jumlah}}</td>
          <td>{{$item->harga}}</td>
          <td>{{$item->tanggal}}</td>
        </tr>
        @endforeach
      </tbody>

      
     </table>
     <a href="dashboard" class="btn btn-warning">kembali</a>
    </div>
   </div>
  </div>
 </div>

</body>
</html