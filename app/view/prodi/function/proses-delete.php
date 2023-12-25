<?php
require_once '../../../controller/ImplementDataPerkuliahan.php';
// require_once '../../../controller/DataPerkuliahan.php';

$id = $_GET['M_id'];
// $implements = new DataPerkuliahan();
$implements = new implementDataPerkuliahan();
$implements->deleteDataPerkuliahanProdi($id);
