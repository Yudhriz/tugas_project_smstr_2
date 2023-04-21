<?php
class Pemesanan {
    private $koneksi;

    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function tambahPemesanan($data) {
        $sql = "INSERT INTO pemesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $q = $this->koneksi->prepare($sql);
        $q->execute([$data['tanggal'], $data['nama_pemesan'], $data['alamat_pemesan'], $data['no_hp'], $data['email'], $data['jumlah_pesanan'], $data['deskripsi'], $data['produk_id']]);
    }

    public function hapusPemesanan($id) {
        $sql = "DELETE FROM pemesanan WHERE id = ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute([$id]);
    }

    public function ubahPemesanan($data) {
        $sql = "UPDATE pemesanan SET tanggal = ?, nama_pemesan = ?, alamat_pemesan = ?, no_hp = ?, email = ?, jumlah_pesanan = ?, deskripsi = ?, produk_id = ? WHERE id = ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute([$data['tanggal'], $data['nama_pemesan'], $data['alamat_pemesan'], $data['no_hp'], $data['email'], $data['jumlah_pesanan'], $data['deskripsi'], $data['produk_id'], $data['id']]);
    }

    public function dataPemesanan() {
        $sql = "SELECT * FROM pemesanan";
        $q = $this->koneksi->prepare($sql);
        $q->execute();
        $data = $q->fetchAll();
        return $data;
    }

    public function cariPemesanan($keyword) {
        $sql = "SELECT * FROM pemesanan WHERE nama_pemesan LIKE ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute(["%{$keyword}%"]);
        $data = $q->fetchAll();
        return $data;
    }

    public function dataPemesananID($id) {
        $sql = "SELECT * FROM pemesanan WHERE id = ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute([$id]);
        $data = $q->fetch();
        return $data;
    }
}
?>
