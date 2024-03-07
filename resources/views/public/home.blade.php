<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/style/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  @include('layouts\navbar')

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="build/assets/home1.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
                <h2>Ayo Liburan Di</h2>
                <h1>Desa<br>Kembang Belor</h1>
                <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
                <button class="btn btn-success" href="#wisata">Ayo Jelajahi</button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="build/assets/home2.jpg" alt="Second slide">
            <div class="carousel-caption d-md-flex justify-content-center align-items-center">
              <div class="text-center">
                  <h2>Ayo Liburan Di</h2>
                  <h1>Desa<br>Kembang Belor</h1>
                  <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
                  <button class="btn btn-success" href="#jelajah">Ayo Jelajahi</button>
              </div>
          </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="build/assets/home3.jpg" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <h2>Ayo Liburan Di</h2>
                <h1>Desa<br>Kembang Belor</h1>
                <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
                <button class="btn btn-success" href="#jelajah">Ayo Jelajahi</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"></button>
</div>

<div class="container">
  <div id="jelajah"></div>
  <section class="mt-5">
    <h1 class="text-center mb-5">Selamat Datang Di kembangbelor</h1>
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div style="position: relative; padding-bottom: 45%; /* 3:4 aspect ratio */ height: 0; overflow: hidden; border-radius: 10px;">
                <iframe src="https://www.youtube.com/embed/7YCwQmwOevM?si=BQuUkOzHd0mf7TyJ" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" title="YouTube video player" allowfullscreen></iframe>
            </div>
        </div>
    </div>
  </section>
</div>


<div class="container">
  <section class="mt-5 position-center">
      <h1 class="text-center mb-5">Tentang Desa</h1>
      <div class="background-container"></div>
      <div class="row card-container">
          <div class="col-md-3">
              <div class="card mb-4">
                  <div class="card-body text-center">
                      <i class="bi bi-house-door display-4 mb-3"></i>
                      <h3 class="card-title">Sejarah Desa</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card mb-4">
                  <div class="card-body text-center">
                      <i class="bi bi-tree display-4 mb-3"></i>
                      <h3 class="card-title">Wisata Alam</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card mb-4">
                  <div class="card-body text-center">
                      <i class="bi bi-people display-4 mb-3"></i>
                      <h3 class="card-title">Kehidupan Masyarakat</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card mb-4">
                  <div class="card-body text-center">
                      <i class="bi bi-hand-thumbs-up display-4 mb-3"></i>
                      <h3 class="card-title">Testimonial</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
              <div id="wisata"></div>
            </div>
      </div>
  </section>
</div>


<div class="container my-5">
  <div class="row">
    <h1 class="text-center mb-5">Wisata Terbaru</h1>
    <div class="col-md-4">
      <div class="card wisata-card">
        <img src="build/assets/wisata1.jpg" class="card-img-top wisata-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Klurak Eco Park</h5>
          <p class="card-text">Sebuah tempat yang berada di alam yang memiliki kolam renang dengan suasana yang sejuk.</p>
          <a href="#" class="btn btn-green">Jelajahi</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card wisata-card">
        <img src="build/assets/wisata2.jpg" class="card-img-top wisata-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Bernah De Vallei</h5>
          <p class="card-text">Tempat yang cocok untuk melakukan kegiatan outdor bersama keluarga maupun teman terdekat.</p>
          <a href="#" class="btn btn-green">jelajahi</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card wisata-card">
        <img src="build/assets/wisata3.jpg" class="card-img-top wisata-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Bernah Camping Ground</h5>
          <p class="card-text">Lokasi yang berada di tengah hutan menjadikan suasana yang cocok untuk mendirikan tenda dan membuat api unggun.</p>
          <a href="#" class="btn btn-green">jelajahi</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container marketing">
<h1 class="text-center mb-5">Review Pengunjung</h1>

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="build/assets/review1.png" alt="Your Image">
            <h3>shatierra.she</h3>
            <p>Yeay jalan-jalan naik motor sama papa bunda ✨.</p>
            <p><a class="btn btn-secondary" href="https://www.instagram.com/p/Cx-WjODvgKN/?utm_source=ig_web_copy_link">Lihat Detail &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="build/assets/review2.png" alt="Your Image">
        <h3>imroncr.22</h3>
        <p>RAN ON ADVOCACY di @bernahdevalleipacet bersama @putraputrinusantarajawatimur.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/p/C34x2xyrkJy/?utm_source=ig_web_copy_link">Lihat Detail &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="build/assets/review3.png" alt="Your Image">
        <h3>_rizqiyahftr30</h3>
        <p>Love your self, because menjadi yang terbaik dimata manusia itu ngga akan ada habisnya.</p>
        <p><a class="btn btn-secondary" href="https://www.instagram.com/p/C4DyQkpPWKC/?utm_source=ig_web_copy_link">Lihat Detail &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
</div>

@include('layouts\footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
