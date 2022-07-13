<?php 

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$noid = $_POST['noid'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

// pengecekan data
if (empty($email) || empty($nohp) || empty($nohp) || empty($alamat) || empty($nama)) {
    header("Location: " . base_url . 'dashboard.php?page=create&process=failed');
}else{

mysqli_query($koneksi, "INSERT INTO pegawai(nama,noid, nohp, email, alamat) VALUES ('$nama','$noid','$nohp','$email','$alamat')");

header("Location:" . base_url . 'dashboard.php?page=home&process=success');
}

?>