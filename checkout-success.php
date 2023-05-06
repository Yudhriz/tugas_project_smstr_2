<?php
require_once 'admin/dbkoneksi.php';
?>
<?php
$sql = "SELECT pesanan.*, produk.nama, produk.harga_jual 
FROM pesanan 
INNER JOIN produk ON pesanan.produk_id = produk.id 
ORDER BY pesanan.id DESC LIMIT 1
";
$rs = $dbh->query($sql);
$row = $rs->fetch();
$total_harga = $row['jumlah_pesanan'] * $row['harga_jual'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checkout Success</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  <style>
    fieldset.scheduler-border {
      border: 1px groove #000 !important;
      padding: 0 1.4em 1.4em 1.4em !important;
      margin: 0 0 1.5em 0 !important;
      -webkit-box-shadow: 0px 0px 0px 0px #000;
      box-shadow: 0px 0px 0px 0px #000;
      float: left;
    }

    legend.scheduler-border {
      font-size: 1.2em !important;
      font-weight: bold !important;
      text-align: left !important;
    }
  </style>
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
          <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Checkout Success</h3>
          </div>
          <div class="card-body">
            <div class="text-center">
              <h1 class="display-1"><i class="bi bi-check-circle-fill text-success"></i></h1>
              <p class="lead mb-2">Thank you for your order!</p>
              <br>
              <fieldset class="scheduler-border col-12">
                <legend class="scheduler-border">No Order : 000<?php echo $row['id']; ?></legend>
                <div class="control-group">
                  <table class="table table-bordered">
                    <tr>
                      <th>Nama</th>
                      <td><?php echo $row['nama_pemesan']; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal</th>
                      <td><?php echo $row['tanggal']; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td><?php echo $row['alamat_pemesan']; ?></td>
                    </tr>
                    <tr>
                      <th>No hp</th>
                      <td><?php echo substr_replace($row['no_hp'], 'XXXXX', -5); ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                      <th>Deskripsi</th>
                      <td><?php echo $row['deskripsi']; ?></td>
                    </tr>
                    <tr>
                      <th>Makanan yang dipesan</th>
                      <td><?php echo $row['nama']; ?></td>
                    </tr>
                    <tr>
                      <th>Jumlah</th>
                      <td><?php echo $row['jumlah_pesanan']; ?></td>
                    </tr>
                    <tr>
                      <th>Total Harga</th>
                      <td><?php echo "Rp " . number_format($total_harga, 2, ',', '.'); ?></td>
                    </tr>
                  </table>
                </div>
            </div>
            </fieldset>
            <div class="text-center">
              <a href="index.php" class="btn btn-primary mt-3">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>