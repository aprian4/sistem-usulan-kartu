<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();

$path = $_POST['path'];
?>
<iframe src="mod_kerpeg/<?= $path ?>" width="600" height="400"></iframe>