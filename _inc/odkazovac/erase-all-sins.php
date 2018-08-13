<?php
require_once '../functions.php';
$data = [];

save_file($data);

header("Location: /odkazovac.php");
die();
?>