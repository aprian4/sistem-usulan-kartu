<?php
require("../config/database.php");
require("../config/function.php");
require("../config/functions.crud.php");
session_start();
$id = $_SESSION['id_user'];


    $data = [
        'kontak'              => $_POST['kontak'],
        'tempat_lahir'              => $_POST['tempat_lahir'],
        'tgl_lahir'              => $_POST['tgllahir'],
        'tmt_cpns'              => $_POST['tmt_cpns']
    ];

    $exec = update($koneksi, 'user', $data, ['id_user' => $id]);


    if ($exec) {
        echo 'ok';
    } else {
        echo 'gagal';
    }

