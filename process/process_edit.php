<?php 

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$noid = $_POST['noid'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];

// pengecekan data
if (empty($email) || empty($nohp) || empty($nohp) || empty($alamat) || empty($nama)) {
    header("Location: " . base_url . 'dashboard.php?page=edit&id='.$id . '&emptyform=true');
}else{

mysqli_query($koneksi, " UPDATE pegawai SET nama='$nama', noid='$noid', nohp='$nohp', email='$email',alamat='$alamat' WHERE id='$id'");

header("Location:" . base_url . 'dashboard.php?page=home&status=success');
}

?>