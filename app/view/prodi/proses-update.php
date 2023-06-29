<?php
require_once '../../controller/ImplementDataPerkuliahan.php';
require_once '../../controller/DataPerkuliahan.php';

$implements = new implementDataPerkuliahan();

if (isset($_POST['submit'])) {
    $col_prodi = htmlspecialchars($_POST["col_prodi"]);
    $col_tingkat = htmlspecialchars($_POST["col_tingkat"]);
    $col_kelas = htmlspecialchars($_POST["col_kelas"]);
    $col_matkul = htmlspecialchars($_POST["col_matkul"]);
    $col_sesi = htmlspecialchars($_POST["col_sesi"]);
    $col_waktu = htmlspecialchars($_POST["col_waktu"]);
    $col_dosen = htmlspecialchars($_POST["col_dosen"]);;
    $col_ProdiId = $_GET['P_id'];
    $col_MatkulId = $_GET['M_id'];


    $implements = new implementDataPerkuliahan();
    $dP = new DataPerkuliahan();
    $dP->setId($col_ProdiId);
    $dP->setMatkulId($col_MatkulId);
    $dP->setDataProdi($col_prodi);
    $dP->setTingkat($col_tingkat);
    $dP->setKelas($col_kelas);
    $dP->setDataMatkul($col_matkul);
    $dP->setSesi($col_sesi);
    $dP->setWaktu($col_waktu);
    $dP->setDataDosen($col_dosen);
    $implements->updateDataProdi($dP);
    header('location:dataPerkuliahan.php?berhasil');
}
