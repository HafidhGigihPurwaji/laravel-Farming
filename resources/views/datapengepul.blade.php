<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>CRUD Data Pengepul</title>
</head>
<body>
  <div class="container mt-4">
    <h1 class="text-center mb-4">Data Barang</h1>
    <a href="page"><button type="button" class="btn btn-success">Kembali</button></a>
  
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">Kualitas</th>
          <th scope="col">Kuantitas</th>
          <th scope="col">Keberlanjutan Lingkungan</th>
          <th scope="col">Jangkauan Layanan</th>       
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Kardus</td>
          <td>3000</td>
          <td>Bagus</td>
          <td>Bagus</td>
          <td>Bersih</td>
          <td>Dekat</td>
        </tr>

        <tr>
          <th scope="row">2</th>
          <td>Botol</td>
          <td>2500</td>
          <td>Cukup Bagus</td>
          <td>Bagus</td>
          <td>Kotor</td>
          <td>Jauh</td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Kain</td>
          <td>3500</td>
          <td>Cukup Bagus</td>
          <td>Bagus</td>
          <td>Bersih</td>
          <td>Cukup Dekat</td>
        </tr>

        <tr>
          <th scope="row">4</th>
          <td>Koran</td>
          <td>2000</td>
          <td>Tidak Bagus</td>
          <td>Bagus</td>
          <td>Cukup Bersih</td>
          <td>Dekat</td>
        </tr>

      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
