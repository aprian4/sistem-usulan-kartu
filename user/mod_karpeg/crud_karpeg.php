<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
$id = $_SESSION['id_user'];

if($pg == 'karpeg_baru'){
$usulan = mysqli_fetch_array(mysqli_query($koneksi, "select * from usulan where id_user = '$id' and jenis_usulan = 'karpeg_baru'"));
$id_usulan = $usulan['id_usulan'];

    $data = [
        'id_usulan'              => $id_usulan
    ];
    $data2 = [
        'status'              => '2'
    ];

    $data3 = [
        'kontak'              => $_POST['kontak'],
        'tempat_lahir'              => $_POST['tempat_lahir'],
        'tgl_lahir'              => $_POST['tgllahir'],
        'tmt_cpns'              => $_POST['tmt_cpns']
    ];

    $exec = insert($koneksi, 'karpeg', $data);
    $exec2 = update($koneksi, 'usulan', $data2, ['id_usulan' => $id_usulan]);
    $exec3 = update($koneksi, 'user', $data3, ['id_user' => $id]);


    if ($exec) {
        echo 'ok';
    } else {
        echo 'gagal';
    }
}

if($pg == 'karpeg_pengganti'){
$usulan = mysqli_fetch_array(mysqli_query($koneksi, "select * from usulan where id_user = '$id' and jenis_usulan = 'karpeg_pengganti'"));
$id_usulan = $usulan['id_usulan'];

     $data = [
        'id_usulan'              => $id_usulan
    ];
    $data2 = [
        'status'              => '2'
    ];

    $data3 = [
        'kontak'              => $_POST['kontak'],
        'tempat_lahir'              => $_POST['tempat_lahir'],
        'tgl_lahir'              => $_POST['tgllahir'],
        'tmt_cpns'              => $_POST['tmt_cpns']
    ];

    $exec = insert($koneksi, 'karpeg', $data);
    $exec2 = update($koneksi, 'usulan', $data2, ['id_usulan' => $id_usulan]);
    $exec3 = update($koneksi, 'user', $data3, ['id_user' => $id]);


    if ($exec) {
        echo 'ok';
    } else {
        echo 'gagal';
    }
}

if($pg == 'batal'){
$jenis_usulan = $_GET['jenis'];
$usulan = mysqli_fetch_array(mysqli_query($koneksi, "select * from usulan where id_user = '$id' and jenis_usulan = '$jenis_usulan'"));
$id_usulan = $usulan['id_usulan'];


delete($koneksi, 'usulan', ['id_usulan' => $id_usulan]);

header("Location: ../../");
}