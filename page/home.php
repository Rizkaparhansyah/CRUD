<?php 
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
$status = isset($_GET['status']) ? $_GET['status'] : false;
?>

<?php if ($process == 'success') : ?>
  <div class="alert alert-success" role="alert">
    Data Berhasil Ditambahkan
  </div>
<?php endif; ?>

  <!-- <div class="alert alert-success" role="alert">
    Data Berhasil Dihapus
  </div> -->
<!-- <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php if ($status == 'success') : ?>
  <div class="container">
    <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <script>
    $('.toast').toast('show');
  </script>
  <?php endif; ?> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>





<!-- mengambil data -->

<?php 

$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>

<div class="container-fluid">
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="bg-primary">No</th>
            <th scope="col" class="bg-primary">Nama</th>
            <th scope="col" class="bg-primary">Nomor ID</th>
            <th scope="col" class="bg-primary">Nomor HP</th>
            <th scope="col" class="bg-primary">Email</th>
            <th scope="col" class="bg-primary">Alamat</th>
            <th scope="col" class="bg-primary">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($pegawai as $p): ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['noid'] ?></td>
            <td><?= $p['nohp'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['alamat'] ?></td>
            <td>
              <a class="btn btn-danger badge" href="<?= base_url . 'process/process_delete.php?id=' . $p['id'] ?>">Delete</a>
              <a class="btn btn-info badge" href="<?= base_url . 'dashboard.php?page=edit&id=' . $p['id']; ?>">Edit</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
 </div>

