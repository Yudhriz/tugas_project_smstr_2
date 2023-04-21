<?php
class Kategori_produk {
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataKategori_produk() {
        $sql = "SELECT * FROM kategori_produk";
        $q = $this->koneksi->prepare($sql);
        $q->execute();
        $data = $q->fetchAll();
        return $data;
    }
    public function dataKategori_produkID($id) {
        $sql = "SELECT * FROM kategori_produk WHERE id = ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch();
        return $data;
    }
}


?>