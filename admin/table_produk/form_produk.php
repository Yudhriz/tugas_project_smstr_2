<?php
require_once 'dbkoneksi.php';
$_id = $_GET['idedit'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Produk</h1>
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
        <form method="POST" action="table_produk/proses_produk.php">
            <div class="form-group row mb-2">
                <label for="kode" class="col-4 col-form-label">Kode Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="kode" name="kode" type="text" class="form-control" value="<?php echo $row['kode']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="nama" class="col-4 col-form-label">Nama Produk</label>
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
            <div class="form-group row mb-2">
                <label for="harga_jual" class="col-4 col-form-label">Harga jual Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="harga_jual" name="harga_jual" type="text" class="form-control" value="<?php echo $row['harga_jual']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="harga_beli" class="col-4 col-form-label">Harga beli Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="<?php echo $row['harga_beli']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="stok" class="col-4 col-form-label">Stok Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="stok" name="stok" type="text" class="form-control" value="<?php echo $row['stok']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="min_stok" class="col-4 col-form-label">Min Stok Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="min_stok" name="min_stok" type="text" class="form-control" value="<?php echo $row['min_stok']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <textarea name="deskripsi" id="deskripsi" cols="100" rows="5"><?php echo $row['deskripsi']; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk ID</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="kategori_produk_id" name="kategori_produk_id" type="text" class="form-control" value="<?php echo $row['kategori_produk_id']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="gambar" class="col-4 col-form-label">Gambar</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="gambar" name="gambar" type="file" class="form-control" value="<?php echo $row['gambar']; ?>">
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