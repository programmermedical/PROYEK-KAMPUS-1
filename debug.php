<?php
include 'app/controller/ImplementDataPerkuliahan.php';
include 'app/controller/Dokumen.php';

$implements1 = new implementDataPerkuliahan();

$query1 = "SELECT * FROM tahunajaran";
$result1 = $implements1->readDataPerkuliahan($query1);

$query2 = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id";

$result2 = $implements1->readDataPerkuliahan($query2);

$download = new Dokumen();
$download->selectDokumen();

$select = $download->selectDokumen();
$dokumen = mysqli_fetch_assoc($select);

$berkas = $dokumen['berkas'];
$x = explode("/", $berkas);
$xpl = end($x);

echo $xpl;
