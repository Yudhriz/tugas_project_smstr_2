<?php
require_once '../dbkoneksi.php';
?>
<?php
$_nama = $_POST['nama'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama; // ? 1

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO kategori_produk (nama) VALUES (?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $sql = "UPDATE kategori_produk SET nama=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location: ../index.php?key=table_kategori_produk/kategori_produk');
?>