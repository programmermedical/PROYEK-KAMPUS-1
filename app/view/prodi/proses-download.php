<?php
require_once '../../../app/controller/Dokumen.php';

if (!$_GET['url']) {
    header('location: index.php');
} else {
    $url = $_GET['url'];
    $dokumen = new Dokumen();
    $cek = $dokumen->download($url);
    if ($cek >= 0) {
        $notif = true;
    } else {
        $notif = false;
    }
}
