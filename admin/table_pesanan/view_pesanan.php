<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">View Kategori Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Master Data</li>
                    <li class="breadcrumb-item active">Pesanan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <table class="table">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td><?= $row['id'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><?= $row['tanggal'] ?></td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td><?= $row['nama_pemesan'] ?></td>
                </tr>
                <tr>
                    <td>Alamat Pemesan</td>
                    <td><?= $row['alamat_pemesan'] ?></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><?= $row['no_hp'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $row['email'] ?></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td><?= $row['jumlah_pesanan'] ?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?= $row['deskripsi'] ?></td>
                </tr>
                <tr>
                    <td>Produk id</td>
                    <td><?= $row['produk_id'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>