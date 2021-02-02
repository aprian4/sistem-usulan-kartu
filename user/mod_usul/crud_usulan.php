<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
$id = $_SESSION['id_user'];
$today = date("Ymd");
    $data = [
        'id_user'              => $id,
        'jenis_usulan'              => $_POST['jenis_usulan'],
        'tgl_usulan'              => $today,
        'status'              => '1'

    ];
    $exec = insert($koneksi, 'usulan', $data);

if($_POST['jenis_usulan'] == 'karpeg_baru'){
    if ($exec) {
        echo 'karpeg_baru';
    } else {
        echo 'gagal';
    }

} else if($_POST['jenis_usulan'] == 'karpeg_pengganti'){
    if ($exec) {
        echo 'karpeg_pengganti';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'karpeg_pengganti'){
    if ($exec) {
        echo 'karpeg_pengganti';
    } else {
        echo 'gagal';
    }
}

