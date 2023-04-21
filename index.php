<?php
    include_once 'admin/dbkoneksi.php';
    include_once 'model/Produk.php';
    include_once 'model/Pemesanan.php';
    include_once 'model/Kategori_produk.php';
    include_once 'navbar.php';
    include_once 'menu.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="container-fluid px-4">
        <h1>Selamat Datang di Halaman Admin</h1>
    </div> -->
    <?php 
    error_reporting(0);
    $key = $_GET['key'];
    if($key == 'dashboard.php'){
        include_once 'dashboard.php';
    } else if(!empty ($key)) {
        include_once ''.$key.'.php';
    } else {
        include_once 'dashboard.php';
    }
    ?>
</div>
<?php
    include_once 'footer.php';
?>