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
}else if($_POST['jenis_usulan'] == 'karis_baru'){
    if ($exec) {
        echo 'karis_baru';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'karis_pengganti'){
    if ($exec) {
        echo 'karis_pengganti';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'karsu_baru'){
    if ($exec) {
        echo 'karsu_baru';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'karsu_pengganti'){
    if ($exec) {
        echo 'karsu_pengganti';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'idcard_baru'){
    if ($exec) {
        echo 'idcard_baru';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'idcard_pengganti'){
    if ($exec) {
        echo 'idcard_pengganti';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'cltn'){
    if ($exec) {
        echo 'cltn';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'cltn_perpanjang'){
    if ($exec) {
        echo 'cltn_perpanjang';
    } else {
        echo 'gagal';
    }
}else if($_POST['jenis_usulan'] == 'cltn_aktif'){
    if ($exec) {
        echo 'cltn_aktif';
    } else {
        echo 'gagal';
    }
}



