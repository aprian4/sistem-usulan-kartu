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
}elseif ($pg == 'karis') {
    include "user/mod_usul/karis.php"; 
} elseif ($pg == 'karsu') {
    include "user/mod_usul/karsu.php";  
} elseif ($pg == 'karsu') {
    include "user/mod_usul/idcard.php"; 
} elseif ($pg == 'cltn') {
    include "user/mod_usul/cltn.php"; 
} elseif ($pg == 'riwayat') {
    include "user/mod_usul/riwayat.php"; 
} elseif ($pg == 'upload_karpeg') {
    include "user/mod_karpeg/upload_karpeg.php"; 
} elseif ($pg == 'upload_karpeg_pengganti') {
    include "user/mod_karpeg/upload_karpeg_pengganti.php"; 
}