<?php
require_once 'dbkoneksi.php';
$_id = $_GET['idedit'];
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Form Pesanan</h1>
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
        <form method="POST" action="table_pesanan/proses_pesanan.php">
            <div class="form-group row mb-2">
                <label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?php echo $row['tanggal']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="<?php echo $row['nama_pemesan']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="<?php echo $row['alamat_pemesan']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="no_hp" class="col-4 col-form-label">No.HP</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="no_hp" name="no_hp" type="text" class="form-control" value="<?php echo $row['no_hp']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="email" name="email" type="email" class="form-control" value="<?php echo $row['email']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" value="<?php echo $row['jumlah_pesanan']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="deskripsi" class="col-4 col-form-label">Deskripsi Pesanan</label>
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
                <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                        </div>
                        <input id="produk_id" name="produk_id" type="text" class="form-control" value="<?php echo $row['produk_id']; ?>">
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