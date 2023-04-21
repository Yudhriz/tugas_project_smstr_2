<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="assets/img/about.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>YuResto adalah Restoran yang menyajikan makanan fresh</h3>
          <p class="fst-italic">
            Berikut ini beberapa fasilitas yang kamu dapatkan di restoran kami
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Wifi dengan kecepatan yang memadai.</li>
            <li><i class="bi bi-check-circle"></i> Persediaan snack gratis.</li>
            <li><i class="bi bi-check-circle"></i> Stop kontak dalam jumlah banyak</li>
          </ul>
          <p>
            Itulah beberapa dari fasilitas yang ada di restoran kami dan pastikan kamu sering sering lihat bagian promo dan event yang akan diadakan di restoran ini.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Why Us</h2>
        <p>Why Choose Our Restaurant</p>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span>01</span>
            <h4>Fresh food</h4>
            <p class="mb-4">Our food is made fresh every day with ingredients. We bring the best taste in our cooking to make your day happier and healthier. No matter which season is going on but giving you extraordinary is a part of our service.<br></p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <span>02</span>
            <h4>Friendly environment</h4>
            <p class="mb-1">Our motto is to make the atmosphere friendly and as efficient as possible. The waiters are patiently and happily take your order and serve the meal in the estimated time. A nice and lovely environment forces you to come back for another date.</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span>03</span>
            <h4>Takeaway facility</h4>
            <p class="mb-5">We’re not limited our options to just have a meal at our place. You’re most welcomed if you want to throw a party at your home and want our best food in YuResto to please your guests.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-makanan">Makanan</li>
            <li data-filter=".filter-minuman">Minuman</li>
            <li data-filter=".filter-spesial">Spesial</li>
          </ul>
        </div>
      </div>



      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <?php
        //panggil data produk
        $new = new Produk();
        $data = $new->dataProduk_makanan();
        //jadikan data produk menjadi array

        foreach ($data as $produk) {
          echo "<div class='col-lg-6 menu-item filter-makanan'>";
          echo "<img src='assets/img/menu/$produk[gambar]' class='menu-img' alt=''>";
          echo "<div class='menu-content'>";
          echo "<a href='#'>$produk[nama]</a><span>Rp" . number_format($produk['harga_jual'], 0, ',', '.') . "</span>";
          echo "</div>";
          echo "<div class='menu-ingredients'>$produk[deskripsi]</div>";
          echo "</div>";
        }
        ?>
        <?php
        //panggil data produk
        $new = new Produk();
        $data = $new->dataProduk_minuman();
        //jadikan data produk menjadi array

        foreach ($data as $produk) {
          echo "<div class='col-lg-6 menu-item filter-minuman'>";
          echo "<img src='assets/img/menu/$produk[gambar]' class='menu-img' alt=''>";
          echo "<div class='menu-content'>";
          echo "<a href='#'>$produk[nama]</a><span>Rp" . number_format($produk['harga_jual'], 0, ',', '.') . "</span>";
          echo "</div>";
          echo "<div class='menu-ingredients'>$produk[deskripsi]</div>";
          echo "</div>";
        }
        ?>
        <?php
        //panggil data produk
        $new = new Produk();
        $data = $new->dataProduk_spesial();
        //jadikan data produk menjadi array

        foreach ($data as $produk) {
          echo "<div class='col-lg-6 menu-item filter-spesial'>";
          echo "<img src='assets/img/$produk[gambar]' class='menu-img' alt=''>";
          echo "<div class='menu-content'>";
          echo "<a href='#'>$produk[nama]</a><span>Rp" . number_format($produk['harga_jual'], 0, ',', '.') . "</span>";
          echo "</div>";
          echo "<div class='menu-ingredients'>$produk[deskripsi]</div>";
          echo "</div>";
        }
        ?>

        <!-- <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Bread Barrel</a><span>Rp50.000</span>
          </div>
          <div class="menu-ingredients">
            Bread
          </div>
        </div> -->

        <!-- <div class="col-lg-6 menu-item filter-starters">
          <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Crab Cake</a><span>Rp125.000</span>
          </div>
          <div class="menu-ingredients">
            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
          </div>
        </div> -->

        <!-- <div class="col-lg-6 menu-item filter-salads">
          <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Caesar Selections</a><span>Rp85.000</span>
          </div>
          <div class="menu-ingredients">
            Salad
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Tuscan Grilled</a><span>Rp230.000</span>
          </div>
          <div class="menu-ingredients">
            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Mozzarella Stick</a><span>Rp60.000</span>
          </div>
          <div class="menu-ingredients">
            Mozzarella sticks are pieces of mozzarella covered with thin dough or breadcrumbs
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Greek Salad</a><span>RP99.000</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Spinach Salad</a><span>Rp88.000</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Lobster Roll</a><span>Rp280.000</span>
          </div>
          <div class="menu-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div> -->

      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= Specials Section ======= -->
  <section id="specials" class="specials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Specials</h2>
        <p>Check Our Specials</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Menu Kemerdekaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Menu Spesial Anak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Menu Spesial Sahur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Menu Spesial Buka Puasa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Menu Spesial Vegan</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Martabak Merah Putih</h3>
                  <p class="fst-italic">Menu spesial yang ada di Hari Kemerdekaan setiap tanggal 17 Agustus.</p>
                  <p>Martabak bernuansa merah putih ini melambangkan semangat merdeka dan juga bisa turut memeriahkan HUT RI di rumah bareng keluarga. Tak cuma cantik dengan topping stroberi dan parutan keju, rasa martabak ini juga sangat lezat dan mantap dengan tekstur yang lembut.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Nasi Tim Ayam</h3>
                  <p class="fst-italic">salah satu menu favorit berbagai kalangan. Selain rasanya nikmat, kandungan gizinya pun sangat bagus untuk masa tumbuh kembang si buah hati.</p>
                  <p>Jika Bunda berpendapat bahwa makan Nasi Tim Ayam hanya untuk orang sakit, itu tidak benar. Ternyata banyak orang sehat pun yang hobi menyantap nasi tim untuk menu sarapan ataupun untuk hidangan sehari-hari.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Ayam Kristal</h3>
                  <p class="fst-italic">Olahan ayam tepung ini memiliki tekstur butiran renyah layaknya kristal.</p>
                  <p>Lapisan luar lebih tebal dan rasanya super enak. Hidangan ini mirip dengan ayam Taiwan atau Korea. Penggemar ayam maupun ayam tepung wajib banget coba. crispy dan renyah ayam benar-benar beda dari biasanya.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Sup Labu Kacang Hijau</h3>
                  <p class="fst-italic">Sup Labu Kacang Hijau yang sangat segar ini cocok bagi kamu pecinta buah labu.</p>
                  <p>Rasa segar buah labu menyatu dengan manisnya rebusan kacang hijau yang meleleh ketika dikunyah. Ditambah dengan rebusan daging dan kaldu nya yang tidak perlu diragukan lagi kelezatannya!</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Waffle Tempe Kriuk</h3>
                  <p class="fst-italic">Buat Kamu yang vegan kami menyediakan menu ini.</p>
                  <p>kekinian yang enak dan renyah abis. Selain praktis, kreasi tempe waffle atau disingkat temffle ini juga lebih sehat karena proses masaknya yang tanpa minyak goreng.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Specials Section -->

  <?php
  require_once 'admin/dbkoneksi.php';
  ?>

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reservation</h2>
        <p>Book a Table</p>
      </div>
      
      <style>
        .php-form {
          width: 100%;
        }

        .php-form .form-group {
          padding-bottom: 8px;
        }

        .php-form input,
        .php-form textarea {
          border-radius: 0;
          box-shadow: none;
          font-size: 14px;
          background: #0c0b09;
          border-color: #625b4b;
          color: white;
        }

        .php-form input {
          height: 44px;
        }

        .php-form textarea {
          padding: 10px 12px;
        }

        .php-form input::-moz-placeholder,
        .php-form textarea::-moz-placeholder {
          color: #a49b89;
        }

        .php-form input::placeholder,
        .php-form textarea::placeholder {
          color: #a49b89;
        }

        .php-form input:focus,
        .php-form textarea:focus {
          border-color: #cda45e;
        }

        .php-form input[type="submit"] {
          background: #cda45e;
          border: 0;
          padding: 10px 35px;
          color: #fff;
          transition: 0.4s;
          border-radius: 50px;
        }

        .php-form input[type="submit"]:hover {
          background: #d3af71;
        }
      </style>

      <form action="checkout.php" method="POST" class="php-form" data-aos="fade-up" data-aos-delay="100" onsubmit="showLoading()">
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal Pemesanan" data-msg="Please enter a valid date">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" placeholder="Nama pemesan" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="alamat_pemesan" id="alamat_pemesan" placeholder="Alamat pemesanan" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="jumlah_pesanan" id="jumlah_pesanan" placeholder="Jumlah pesanan" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-12 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="produk_id" id="produk_id" placeholder="Produk ID" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="deskripsi" rows="5" placeholder="Deskripsi"></textarea>
          <div class="validate"></div>
        </div>
        <div class="text-center mt-3"><input type="submit" name="proses" value="Book a Table">
          <div id="loading" class="d-none"><img src="assets/img/loading.gif" alt="loading"></div>
        </div>

        <script>
          function showLoading() {
            setTimeout(function() {
              document.getElementById("loading").classList.remove("d-none");
            }, 2000); // delay of 2 seconds
          }
        </script>
      </form>

    </div>
  </section><!-- End Book A Table Section -->

  <!-- ======= Carrier Section ======= -->
  <!-- <section id="karir" class="karir">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Carrier</h2>
        <p>Come join and be part of us</p>
      </div>

      <table class="table table=bordered border-primary table-dark table-hover">
        <thead>
          <tr>
            <th>Nama Pekerjaan</th>
            <th>Level</th>
            <th>Apply</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Chef</td>
            <td>Profesional</td>
            <td><a href="mailto:riskkyudha678@gmail.com" class="btn btn-primary btn-sm">Lamar</a></td>
          </tr>
          <tr>
            <td>Waiters</td>
            <td>Fresh Graduate</td>
            <td><a href="mailto:riskkyudha678@gmail.com" class="btn btn-primary btn-sm">Lamar</a></td>
          </tr>
          <tr>
            <td>Supervisor</td>
            <td>Profesional</td>
            <td><a href="mailto:riskkyudha678@gmail.com" class="btn btn-primary btn-sm">Lamar</a></td>
          </tr>
        </tbody>
      </table>
    </div>


    </div>
  </section>End Carrier Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Some photos from Our Restaurant</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Chefs</h2>
        <p>Our Proffesional Chefs</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Master Chef</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>Cook</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Chefs Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.594147044606!2d106.93318681441073!3d-6.185033995522318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b3d6971e01b%3A0x470b469957f2c6fb!2sRusun%20Km%202%20Cakung%20barat!5e0!3m2!1sid!2sid!4v1668914815305!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>JL. Raya Bekasi KM 22, Cakung Barat, DKI Jakarta</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>
                Monday-Saturday:<br>
                11:00 AM - 23:00 PM
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>yudh22122ti@student.nurulfikri.ac.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 882 1478 7091</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->