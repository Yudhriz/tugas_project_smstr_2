<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM produk WHERE id=?";
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
                <h1 class="m-0">View Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Master Data</li>
                    <li class="breadcrumb-item active">Produk</li>
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
                    <td>Kode</td>
                    <td><?= $row['kode'] ?></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><?= $row['nama'] ?></td>
                </tr>
                <tr>
                    <td>Harga jual</td>
                    <td><?= $row['harga_jual'] ?></td>
                </tr>
                <tr>
                    <td>Harga beli</td>
                    <td><?= $row['harga_beli'] ?></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><?= $row['stok'] ?></td>
                </tr>
                <tr>
                    <td>Min stok</td>
                    <td><?= $row['min_stok'] ?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?= $row['deskripsi'] ?></td>
                </tr>
                <tr>
                    <td>Kategori produk id</td>
                    <td><?= $row['kategori_produk_id'] ?></td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><?= $row['gambar'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>