<?php

// include 'ImplementDataPerkuliahan.php';
// include 'DataPerkuliahan.php';
// include 'database/config.php.php';
include 'database/manualconfig.php';


// $implements = new implementDataPerkuliahan();

/ public $cetak = new implementDataPerkuliahan;
// public function __construct($row)
// {
//     $get = $this->cetak->readDataPerkuliahan();
//     foreach ($get as $gets) {
//         $gets[$row];
//     }
// }

// class Cetak extends implementDataPerkuliahan
// {
//     public function cetak()
//     {
//     }
// }

// $debug = $implements->readDataPerkuliahan();

// $cek = mysqli_fetch_assoc($debug);
// var_dump($cek);

// $dP = new DataPerkuliahan();
// $dP->setDataProdi('testi prodi');
// $dP->setSesi('1');
// $dP->setKelas('testi kelas');
// $dP->setTingkat('1');
// $dP->setDataMatkul('testi matkul');
// $dP->setDataDosen('testi dosen');
// $dP->setWaktu('testi 00:00');
// $implements->insertDataPerkuliahan($dP);


// var_dump($implements);

$cek = "SELECT prodi_id FROM matakuliah WHERE prodi_id = '14'";
$query = mysqli_query($conn, $cek);
$result = mysqli_fetch_assoc($query);
if ($result['prodi_id'] == 14) {
    echo $result['prodi_id'];
}
