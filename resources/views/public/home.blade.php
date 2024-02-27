<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="build/assets/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
      </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Wisata</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kritik dan Saran</a></li>
          <li class="nav-item"><a class="nav-link" href="#">360</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="build/assets/home1.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
                <h2>Ayo Liburan Di</h2>
                <h1>Desa<br>Kembang Belor</h1>
                <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
                <button class="btn btn-success">Ayo Jelajahi</button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="build/assets/home2.jpg" alt="Second slide">
            <div class="carousel-caption d-md-flex justify-content-center align-items-center">
              <div class="text-center">
                  <h2>Ayo Liburan Di</h2>
                  <h1>Desa<br>Kembang Belor</h1>
                  <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
                  <button class="btn btn-success">Ayo Jelajahi</button>
              </div>
          </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="build/assets/home3.jpg" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <h2>Ayo Liburan Di</h2>
                <h1>Desa<br>Kembang Belor</h1>
                <p>Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</p>
                <button class="btn btn-success">Ayo Jelajahi</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"></button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"></button>
</div>



<div class="container">
  <section class="mt-5">
      <h1 class="text-center mb-5">Tentang Desa</h1>
      <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body text-center">
                      <i class="bi bi-house-door display-4 mb-3"></i>
                      <h3 class="card-title">Sejarah Desa</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body text-center">
                      <i class="bi bi-tree display-4 mb-3"></i>
                      <h3 class="card-title">Wisata Alam</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body text-center">
                      <i class="bi bi-people display-4 mb-3"></i>
                      <h3 class="card-title">Kehidupan Masyarakat</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris tellus, laoreet in felis sit amet, bibendum maximus velit.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>


<div class="container">
  <section class="mt-5 position-relative">
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
          <h5 class="card-title">Heading 1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-green">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card wisata-card">
        <img src="build/assets/wisata2.jpg" class="card-img-top wisata-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Heading 2</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-green">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card wisata-card">
        <img src="build/assets/wisata3.jpg" class="card-img-top wisata-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Heading 3</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-green">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="container-fluid py-4 footer-container">
  <div class="container text-center">
      <ul class="nav justify-content-center">
        <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Wisata</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kritik Saran</a></li>
        <li class="nav-item"><a class="nav-link" href="#">360</a></li>
      </ul>
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="#" class="text-muted" title="Twitter"><i class="bi bi-youtube"></i></a></li>
        <li class="list-inline-item"><a href="#" class="text-muted" title="Instagram"><i class="bi bi-instagram"></i></a></li>
        <li class="list-inline-item"><a href="#" class="text-muted" title="Facebook"><i class="bi bi-facebook"></i></a></li>
      </ul>
      <hr class="my-4">
      <p class="text-muted">2024 &copy; Politeknik Negeri Jember</p>
  </div>
</footer>



    









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
