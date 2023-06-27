<?php

require_once '../../controller/config.php';
require_once '../../controller/Upload.php';

// $kode = $_POST['kode'];
$ekstensiAccept = ['word', 'pdf'];
$nama = $_POST['nama'];
$namaFile = $_FILES['berkas']['name'];
$x = explode(".", $namaFile);
$ekstensiFile = strtolower(end($x));
$ukuranFile = $_FILES['berkas']['size'];
$file_tmp = $_FILES['berkas']['tmp_name'];

$dirUpload = 'dokumen/';
$linkBerkas = $dirUpload . $namaFile;

if (in_array($ekstensiFile, $ekstensiAccept) == TRUE) :
    if ($ukuranFile < 1080 * 1080) :
        $upload = move_uploaded_file($file_tmp, $linkBerkas);
        $dataArr = array(
            'nama' => $nama,
            'namaFile' => $namaFile,
            'size' => $ukuranFile,
            'berkas' => $linkBerkas
        );
    endif;

    $insertData = new Upload();
    $insertData->uploadData($dataArr);
    if ($upload && ($insertData == 1)) {
        header('location: dataPerkuliahan.php?berhasil');
    } else {
        header('location: dataPerkuliahan.php?gagal');
    }
endif;