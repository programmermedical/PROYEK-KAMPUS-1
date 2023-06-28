<?php
require_once '../../../controller/ImplementDataPerkuliahan.php';
// require_once '../../../controller/DataPerkuliahan.php';

$id = $_GET['id'];
// $implements = new DataPerkuliahan();
$implements = new implementDataPerkuliahan();
$implements->deleteDataPerkuliahan($id);
