<?php
include '../../controller/ImplementDataPerkuliahan.php';

$implements = new implementDataPerkuliahan();
$query = "SELECT prodi.id, prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id ORDER BY waktu ASC";
$result = $implements->readDataPerkuliahan($query);

// edit
$id = $_GET['id'];
