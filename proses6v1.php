<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
error_reporting(0);
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];
$pend= $_POST['pendidikan'];
?>
<div class="container">
<div class="row">
<div class="col">
<table class="table table-success table-striped-column">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tempat lahir</th>
      <th scope="col">Tanggal lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Pendidikan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $nama ?></th>
      <td><?php echo $alamat ?></td>
      <td><?php echo $tempat ?></td>
      <td><?php echo $tanggal ?></td>
      <td><?php echo $jk ?></td>
      <td><?php echo $pend ?></td>
    </tr>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>