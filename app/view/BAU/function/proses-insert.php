<?php
include '../../../controller/ImplementDataPerkuliahan.php';
include '../../../controller/DataPerkuliahan.php';

if (isset($_POST["submit"])) {
    $col_prodi = htmlspecialchars($_POST["col_prodi"]);
    $col_tingkat = htmlspecialchars($_POST["col_tingkat"]);
    $col_kelas = htmlspecialchars($_POST["col_kelas"]);
    $col_matkul = htmlspecialchars($_POST["col_matkul"]);
    $col_sesi = htmlspecialchars($_POST["col_sesi"]);
    $col_waktu = htmlspecialchars($_POST["col_waktu"]);
    $col_dosen = htmlspecialchars($_POST["col_prodi"]);
    $col_ruangan = htmlspecialchars($_POST["col_ruangan"]);

    $implements = new implementDataPerkuliahan();
    $dP = new DataPerkuliahan();
    $dP->setDataProdi($col_prodi);
    $dP->setTingkat($col_tingkat);
    $dP->setKelas($col_kelas);
    $dP->setDataMatkul($col_matkul);
    $dP->setSesi($col_sesi);
    $dP->setWaktu($col_waktu);
    $dP->setDataDosen($col_dosen);
    $dP->setRuangan($col_ruangan);
    $implements->insertDataPerkuliahan($dP);
} else {
    header('location:../insert.php?gagal');
}
header('location:../insert.php?berhasil');

// var_dump($col_prodi, $col_tingkat, $col_kelas, $col_matkul, $col_sesi, $col_waktu, $col_dosen, $col_ruangan);
