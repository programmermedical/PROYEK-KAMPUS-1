<?php
// include '../../../controller/InterfaceDataPerkuliahan.php';
// require_once '../../controller/ImplementDataPerkuliahan.php';
// require_once '../../../controller/ReadData.php';
require_once '../../controller/ReadData.php';

if ($id = $_GET['P_id']) {
    $implements = new implementDataPerkuliahan();
    $implements = new ReadData();

    $query = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id ORDER BY waktu ASC";

    $rst = $implements->readSingleData($id);
    $result = mysqli_fetch_assoc($rst);
}
