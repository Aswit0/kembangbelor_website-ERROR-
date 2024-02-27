<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <form>
        <div class="form-group">
          <input type="text" class="form-control mb-3" id="nama_lengkap" placeholder="Nama Lengkap">
          <input type="text" class="form-control mb-3" id="nama_lokasi" placeholder="Nama Lokasi">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="fileUpload" accept="image/*" multiple>
            <label class="custom-file-label" for="fileUpload">Drag and drop file(s) here or click to upload</label>
          </div>
          <textarea class="form-control mb-3" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Kirim</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Add event listener to handle file input change
  document.getElementById('fileUpload').addEventListener('change', function(event) {
    var fileList = event.target.files;
    var fileNameList = Array.from(fileList).map(function(file) {
      return file.name;
    });
    var fileLabel = document.querySelector('.custom-file-label');
    fileLabel.textContent = fileNameList.join(', ');
  });
</script>

</body>
</html>
