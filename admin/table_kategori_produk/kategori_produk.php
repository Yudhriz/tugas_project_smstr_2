<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM kategori_produk";
$rs = $dbh->query($sql);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tables</h1>
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
        <div class="card mb-4">
            <div class="card-body">
                Kategori Produk
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <a class="btn btn-success" href="index.php?key=table_kategori_produk/form_kategori_produk">Create Kategori Produk</a>
            </div>
            <div class="card-body table-responsive">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $nomor  = 1;
                        foreach ($rs as $row) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="index.php?key=table_kategori_produk/view_kategori_produk&id=<?= $row['id'] ?>">View</a>
                                    <a class="btn btn-secondary" href="index.php?key=table_kategori_produk/form_kategori_produk&idedit=<?= $row['id'] ?>">Edit</a>
                                    <a class="btn btn-danger" href="table_kategori_produk/delete_kategori_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Kategori Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                </td>
                            </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>