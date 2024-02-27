<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

<div class="container mt-5 text-center">
  <h2>Kritik dan Saran / Pertanyaan</h2>
  <form>
    <div class="form-group text-center">
        <input type="text" class="form-control mb-3" id="nama" placeholder="Nama Lengkap">
        <input type="tel" class="form-control mb-3" id="telepon" placeholder="Telepon">
        <input type="email" class="form-control mb-3" id="email" placeholder="Email">
        <textarea class="form-control mb-3" id="pesan" rows="3" placeholder="Pesan"></textarea>
      </div>
      <button type="submit" class="btn btn-success btn-block">Kirim</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
