<?php 
require_once '../dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM kategori_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location: ../index.php?key=table_kategori_produk/kategori_produk');
?>