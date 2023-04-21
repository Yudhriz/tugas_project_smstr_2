<?php
require_once 'admin/dbkoneksi.php';
?>
<?php
$_tanggal = $_POST['tanggal'];
$_nama_pemesan = $_POST['nama_pemesan'];
$_alamat_pemesan = $_POST['alamat_pemesan'];
$_no_hp = $_POST['no_hp'];
$_email = $_POST['email'];
$_jumlah_pesanan = $_POST['jumlah_pesanan'];
$_deskripsi = $_POST['deskripsi'];
$_produk_id = $_POST['produk_id'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal; // ? 1
$ar_data[] = $_nama_pemesan; // ? 2
$ar_data[] = $_alamat_pemesan; // ? 3
$ar_data[] = $_no_hp; // ? 4
$ar_data[] = $_email; // ? 5
$ar_data[] = $_jumlah_pesanan; // ? 6
$ar_data[] = $_deskripsi; // ? 7
$ar_data[] = $_produk_id; // ? 8

if ($_proses == "Book a Table") {
   // data baru
   $sql = "INSERT INTO pesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id) VALUES (?,?,?,?,?,?,?,?)";
} 
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location: checkout-success.php');
?>