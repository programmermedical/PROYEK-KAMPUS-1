<?php
// include '../../../controller/config.php';
include '../../controller/ImplementDataPerkuliahan.php';
include '../../controller/ReadData.php';

$implements = new implementDataPerkuliahan();

$query1 = "SELECT * FROM tahunajaran";
$result1 = $implements->readDataPerkuliahan($query1);

$query2 = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id ORDER BY prodi.nama_prodi ASC";
$result2 = $implements->readDataPerkuliahan($query2);

$implements2 = new ReadData();
$result3 = $implements2->readDataProdi('s1 farmasi');;
