<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
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
        <div class="card mb-4">
            <div class="card-body">
                Pesanan
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <a class="btn btn-success" href="index.php?key=table_pesanan/form_pesanan">Create Pesanan</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Email</th>
                            <th>Jumlah</th>
                            <th>Deskripsi</th>
                            <th>Produk ID</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Email</th>
                            <th>Jumlah</th>
                            <th>Deskripsi</th>
                            <th>Produk ID</th>
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
                                <td><?= $row['tanggal'] ?></td>
                                <td><?= $row['nama_pemesan'] ?></td>
                                <td><?= $row['alamat_pemesan'] ?></td>
                                <td><?= $row['no_hp'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['jumlah_pesanan'] ?></td>
                                <td><?= $row['deskripsi'] ?></td>
                                <td><?= $row['produk_id'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="index.php?key=table_pesanan/view_pesanan&id=<?= $row['id'] ?>">View</a>
                                    <a class="btn btn-secondary" href="index.php?key=table_pesanan/form_pesanan&idedit=<?= $row['id'] ?>">Edit</a>
                                    <a class="btn btn-danger" href="table_pesanan/delete_pesanan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pesanan <?= $row['nama'] ?>?')) {return false}">Delete</a>
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