<?php
require_once 'dbkoneksi.php';
$_id = $_GET['idedit'];
$sql = "SELECT * FROM kategori_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Kategori Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Master Data</li>
                    <li class="breadcrumb-item active">Kategori Produk</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="table_kategori_produk/proses_kategori_produk.php">
            <div class="form-group row mb-2">
                <label for="nama" class="col-4 col-form-label">Nama Kategori Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control" value="<?php echo $row['nama']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                                            echo 'Update';
                                                                                        } else {
                                                                                            echo 'Simpan';
                                                                                        } ?>" />
                </div>
            </div>
    </div>
    <input type="hidden" name="idedit" value="<?php echo isset($_GET['idedit']) ? $_GET['idedit'] : ''; ?>">
    </form>
    </div>
</section>