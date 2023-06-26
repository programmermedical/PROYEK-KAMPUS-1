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
    $col_dosen = htmlspecialchars($_POST["col_dosen"]);
    // $col_ruangan = 'Ruangan 1';
    $col_ruangan = htmlspecialchars($_POST["col_ruangan"]);
    $col_ProdiId = $_GET['P_id'];
    $col_MatkulId = $_GET['M_id'];
    $col_RuanganId = $_GET['R_id'];
    // $col_id = htmlspecialchars($_POST['col_id']);

    $implements = new implementDataPerkuliahan();
    $dP = new DataPerkuliahan();
    $dP->setProdiId($col_ProdiId);
    $dP->setMatkulId($col_MatkulId);
    $dP->setRuanganId($col_RuanganId);
    $dP->setDataProdi($col_prodi);
    $dP->setTingkat($col_tingkat);
    $dP->setKelas($col_kelas);
    $dP->setDataMatkul($col_matkul);
    $dP->setSesi($col_sesi);
    $dP->setWaktu($col_waktu);
    $dP->setDataDosen($col_dosen);
    $dP->setRuangan($col_ruangan);
    $implements->updateDataPerkuliahan($dP);
    header('location:dataPerkuliahan.php?berhasil');
}
