<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
$id = $_SESSION['id_user'];

if ($pg == 'suratpengantar') {
    $jenis_usulan = "karpeg_baru";
    $usulan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from usulan WHERE id_user = '$id' and jenis_usulan = '$jenis_usulan'"));
    $id_usulan = $usulan['id_usulan'];
    $today = date("Ymd");
    $tglupload = date("Y-m-d");
    $query = "SELECT max(id_berkas) AS last FROM berkas WHERE id_berkas LIKE '$today%'";
    $hasil = mysqli_query($koneksi, $query);
    $data  = mysqli_fetch_array($hasil);
    $lastNoTransaksi = $data['last'];
    $lastNoUrut = substr($lastNoTransaksi, 8, 4);
    if ($lastNoUrut < 0){
        $nextNoTransaksi = $today . sprintf('%04s', $lastNoUrut);
    }else{
        $nextNoUrut = $lastNoUrut + 1;
        $nextNoTransaksi = $today . sprintf('%04s', $nextNoUrut);
    }

    $ektensi = ['pdf'];
    if ($_FILES['sp']['name'] <> '') {
        $logo = $_FILES['sp']['name'];
        $temp = $_FILES['sp']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "surat pengantar";
        $jenis="karpeg_baru";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/suratpengantar' . $nextNoTransaksi . '.' . $ext;
            $upload = move_uploaded_file($temp,  $dest);
            if ($upload) {
                $data = [
                    'id_berkas'      => $nextNoTransaksi,
                    'id_usulan'      => $id_usulan,
                    'tgl_upload'     => $tglupload,
                    'path'         => $dest,
                    'nama_berkas'         => $namaberkas
                    ,
                    'jenis_berkas' => $jenis
                ];
                $exec = insert($koneksi, 'berkas', $data);
                if ($exec) {
                    echo 'ok';
                } else {
                    echo "Berkas tidak tersimpan ulangi lagi yak";
                }
            } else {
                echo "Berkas tidak tersimpan ulangi lagi yak";
            }
        }
    }
}