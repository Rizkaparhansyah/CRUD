<?php 
require_once('function/helper.php');

session_start();

$page = isset($_GET['page']) ? $_GET['page'] :false;

if ($_SESSION['id'] == null) {
    header("Location: ". base_url);
    exit();
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url . 'dashboard.php?page=home' ?>">Belajar CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url . 'dashboard.php?page=home' ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url . 'dashboard.php?page=create' ?>">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url . 'process/process_logout.php'; ?>">Logout</a>
        </li>
      
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      Sosial Media
    </a>
 </li>
 </ul>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header bg-primary">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Sosmed</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="dropdown mt-3">
          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Dropdown button
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="nav-link color-dark" aria-current="page" href="https://instagram.com/iyain.kaa">instagram</a></li>
            <li><a class="nav-link" href="https://www.facebook.com/iyainkaa">Facebook</a></li>
            <li><a class="nav-link" href="https://www.linkedin.com/in/rizka-Parhansyah-3445b8243">Linkedin</a></li>
            <li><a class="nav-link" href="https://alvo.chat/48a">WhatsApp</a></li>
            <li><a class="nav-link" href="https://t.me/iyain_kaa">Telegram</a></li>
          </ul>
        </div>
      </div>
    </div>

    </div>
  </div>
</nav>
<div class="content">
  <div class="container">
    <div class="sub-content mt-5">
      <?php 
      $filename = "page/$page.php";
      if (file_exists($filename)){
        include_once($filename);
      }
      else {
        echo "404";
      }
      
      ?>
    </div>
  </div>
</div>
<!-- //ini tombol gabut -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>