<?php
session_start();
require "config/database.php";
require "config/function.php";
require "config/functions.crud.php";


if (isset($_SESSION['id_user'])) {
    $user = mysqli_fetch_array(mysqli_query($koneksi, "select * from user where id_user='$_SESSION[id_user]' and level = '1'"));
      include "index2.php";
} else {
  include "login.php";
}

?>