<?php
if ($_GET['id'] <> '5448dfhcr27467576c78a50vi98j0ruv0w') {
    die('Ip anda sudah tercatat disistem ini');
}
session_start();
require "config/database.php";
//require "../config/function.php";


$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysqli_query($koneksi, "select * from user where nip='$username' and password = '$password' and status='1'");
$ceklogin = mysqli_num_rows($query);
$user = mysqli_fetch_array($query);
if ($ceklogin == 1) {
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['level'] = $user['level'];
        echo "ok";
    
} else {
    echo "oo";
}
