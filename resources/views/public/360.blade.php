<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="build/style/kritik.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  @include('layouts\navbar')


  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="build/assets/home2.jpg" alt="Your Image">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Kembangbelor</h1>
                    <p>Sebuah Desa Di kecamatan pacet dengan beragam wisatanya.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="build/assets/home1.jpg" alt="Your Image">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Bernah De Vallei.</h1>
                    <p>Tempat wisata yang cocok untuk kegiatan outdoor segala kalangan.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="build/assets/home3.jpg" alt="Your Image">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Camping Ground.</h1>
                    <p>Dengan Suasana alam yang asri nan sejuk.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    </button>
</div>


<div class="container mt-2 text-center">
  <h2 class="text-center mb-5">Upload Foto 360 anda di Kembangbelor</h2>
  
 
      <form>
        <div class="form-group text-center">
          <input type="text" class="form-control mb-3" id="nama_lengkap" placeholder="Nama Lengkap">
          <input type="text" class="form-control mb-3" id="nama_lokasi" placeholder="Nama Lokasi">
          <input class="form-control mb-3" type="file" id="formFile">
          <textarea class="form-control mb-3" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block mb-3">Kirim</button>
      </form>

  
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  @include('layouts\footer')

</body>
</html>
