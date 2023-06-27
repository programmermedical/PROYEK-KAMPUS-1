<?php
require_once '../../controller/Dokumen.php';

$id = $_GET['id'];
$implements = new Dokumen();
$implements->deleteDok($id);
