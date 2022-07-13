<?php 
require_once ('../function/helper.php');
require_once ('../function/koneksi.php');

// menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);
//membuat session
        session_start();
        $_SESSION ['id'] = $row['id'];
        header("Location:" . base_url . 'dashboard.php?page=home'); 
} else {
    header("Location: " . base_url );
}