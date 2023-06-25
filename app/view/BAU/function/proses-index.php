<?php

// $conn = mysqli_connect("localhost", "root", "root", "project");
// $query = mysqli_query($conn, "SELECT * FROM data ORDER BY `prodi` ASC, `jam` ASC");
// $row = mysqli_fetch_assoc($query);
include '../../controller/ImplementDataPerkuliahan.php';
include '../../controller/ReadData.php';

$implements = new implementDataPerkuliahan();

$query1 = "SELECT * FROM tahunajaran";
$result1 = $implements->readDataPerkuliahan($query1);

$query2 = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id";
$result2 = $implements->readDataPerkuliahan($query2);

$implements2 = new ReadData();
// $query3 = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu FROM matakuliah INNER JOIN prodi ON prodi.id = matakuliah.prodi_id WHERE nama_prodi = 's1 farmasi' ORDER BY waktu ASC;";
$result3 = $implements2->readDataProdi('s1 farmasi');;
