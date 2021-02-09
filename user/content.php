<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php
if ($pg == '') {
    include "home.php";
} elseif ($pg == 'usulan') {
    include "user/mod_usul/usulan.php";
} elseif ($pg == 'karpeg_baru') {
    include "user/mod_karpeg/karpeg_baru.php";
} elseif ($pg == 'karpeg_pengganti') {
    include "user/mod_karpeg/karpeg_pengganti.php";
} elseif ($pg == 'karis_baru') {
    include "user/mod_karis/karis_baru.php"; 
}elseif ($pg == 'karis_pengganti') {
    include "user/mod_karis/karis_pengganti.php"; 
} elseif ($pg == 'karsu_baru') {
    include "user/mod_karsu/karsu_baru.php"; 
} elseif ($pg == 'karsu_pengganti') {
    include "user/mod_karsu/karsu_pengganti.php"; 
} elseif ($pg == 'idcard_pengganti') {
    include "user/mod_idcard/idcard_pengganti.php"; 
} elseif ($pg == 'idcard_baru') {
    include "user/mod_idcard/idcard_baru.php"; 
} elseif ($pg == 'riwayat') {
    include "user/mod_usul/riwayat.php"; 
} elseif ($pg == 'upload_karpeg_baru') {
    include "user/mod_karpeg/upload_karpeg_baru.php"; 
} elseif ($pg == 'upload_karpeg_pengganti') {
    include "user/mod_karpeg/upload_karpeg_pengganti.php"; 
}elseif ($pg == 'cltn') {
    include "user/mod_cltn/cltn.php"; 
}elseif ($pg == 'cltn_perpanjang') {
    include "user/mod_cltn/cltn_perpanjang.php"; 
}elseif ($pg == 'cltn_aktif') {
    include "user/mod_cltn/cltn_aktif.php"; 
}