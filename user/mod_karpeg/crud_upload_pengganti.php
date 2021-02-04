<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
$id = $_SESSION['id_user'];

if ($pg == 'suratpengantar') {
    $jenis_usulan = "karpeg_pengganti";
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
        $jenis="karpeg_pengganti";
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

if ($pg == 'skcpns') {
    $jenis_usulan = "karpeg_pengganti";
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
    if ($_FILES['skcpns']['name'] <> '') {
        $logo = $_FILES['skcpns']['name'];
        $temp = $_FILES['skcpns']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "SK CPNS";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/skcpns' . $nextNoTransaksi . '.' . $ext;
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
if ($pg == 'skpns') {
    $jenis_usulan = "karpeg_pengganti";
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
    if ($_FILES['skpns']['name'] <> '') {
        $logo = $_FILES['skpns']['name'];
        $temp = $_FILES['skpns']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "SK PNS";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/skpns' . $nextNoTransaksi . '.' . $ext;
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


if ($pg == 'sttpp') {
    $jenis_usulan = "karpeg_pengganti";
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
    if ($_FILES['sttpp']['name'] <> '') {
        $logo = $_FILES['sttpp']['name'];
        $temp = $_FILES['sttpp']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "STTPP";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/sttpp' . $nextNoTransaksi . '.' . $ext;
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

if ($pg == 'foto') {
    $jenis_usulan = "karpeg_pengganti";
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

    $ektensi = ['jpg'];
    if ($_FILES['foto']['name'] <> '') {
        $logo = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "FOTO";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/foto' . $nextNoTransaksi . '.' . $ext;
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


if ($pg == 'lampiranx') {
    $jenis_usulan = "karpeg_pengganti";
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
    if ($_FILES['lampiranx']['name'] <> '') {
        $logo = $_FILES['lampiranx']['name'];
        $temp = $_FILES['lampiranx']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "Lampiran X";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/lampiranx' . $nextNoTransaksi . '.' . $ext;
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


if ($pg == 'lampiranxi') {
    $jenis_usulan = "karpeg_pengganti";
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
    if ($_FILES['lampiranxi']['name'] <> '') {
        $logo = $_FILES['lampiranxi']['name'];
        $temp = $_FILES['lampiranxi']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "Lampiran XI";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/lampiranxi' . $nextNoTransaksi . '.' . $ext;
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


if ($pg == 'kehilangan') {
    $jenis_usulan = "karpeg_pengganti";
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
    if ($_FILES['kehilangan']['name'] <> '') {
        $logo = $_FILES['kehilangan']['name'];
        $temp = $_FILES['kehilangan']['tmp_name'];
        $ext = explode('.', $logo);
        $ext = end($ext);
        $namaberkas = "Surat Kehilangan";
        $jenis="karpeg_pengganti";
        //$siswa = fetch($koneksi, 'daftar', ['id_daftar' => $id]);
        if (in_array($ext, $ektensi)) {
            $dest = 'berkas_karpeg/kehilangan' . $nextNoTransaksi . '.' . $ext;
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

if ($pg == 'hapus') {
    $id_berkas = $_POST['id_berkas'];
    delete($koneksi, 'berkas', ['id_berkas' => $id_berkas]);
}

if ($pg == 'kirim') {
    $karpeg_pengganti = "karpeg_pengganti";
    $usulan = mysqli_fetch_array(mysqli_query($koneksi, "select * from usulan where id_user = '$id' and jenis_usulan = '$karpeg_pengganti'"));
    $id_usulan = $usulan['id_usulan'];
     $data = [
        'status'              => '3'
    ];
    $exec = update($koneksi, 'usulan', $data, ['id_usulan' => $id_usulan]);
    
    if ($exec) {
        echo 'ok';
    } else {
        echo 'gagal';
    }
}