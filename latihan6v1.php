<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
    <div class="col">
        <h1>Form Registrasi</h1>
        <form action = "proses6v1.php" method = "post" enctype=""><br>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama"name="nama" placeholder="Wajib diisi" required>
    </div>   
    <div class="mb-3">
        <label for="alamat" class="form-label">Isikan Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat"rows="3" placeholder="Wajib diisi" required></textarea>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat"name="tempat" placeholder="Wajib diisi" required>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Lahir</label>
        <input type="text" class="form-control" id="tanggal"name="tanggal" placeholder="Wajib diisi" required>
    </div>
    <div class="mb-3">
        <label for="jenis kelamin" class="form-label">Jenis Kelamin</label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio1" name="jk" value="Laki-laki" >Laki-laki
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio2" name="jk" value="Perempuan">Perempuan
  <label class="form-check-label" for="radio2"></label>
</div>

<div class="mb-3">
        <label for="pendidikan" class="form-label">Pendidikan</label>
        <select class="form-select" aria-label="Default select example" name="pendidikan">
  <option selected>...</option>
  <option value="SMA/SMk" name ="SMA/SMK">SMA/SMK </option>
  <option value="D3" name="D3">D3</option>
  <option value="S1" name="S1">S1</option>
</select>
    </div>
    <pre>
<button type="submit" class="btn btn-outline-dark">Submit</button>  <button type="reset" class="btn btn-outline-dark">Cancel</button>
</pre>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>