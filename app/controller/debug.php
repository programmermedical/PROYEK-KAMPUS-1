<?php

include 'ImplementDataPerkuliahan.php';
include 'DataPerkuliahan.php';


$implements = new implementDataPerkuliahan();

// $debug = $implements->readDataPerkuliahan();

// $cek = mysqli_fetch_assoc($debug);
// var_dump($cek);

$dP = new DataPerkuliahan();
$dP->setDataProdi('testi prodi');
$dP->setSesi('1');
$dP->setKelas('testi kelas');
$dP->setTingkat('1');
$dP->setDataMatkul('testi matkul');
$dP->setDataDosen('testi dosen');
$dP->setWaktu('testi 00:00');
$implements->insertDataPerkuliahan($dP);


// var_dump($implements);
