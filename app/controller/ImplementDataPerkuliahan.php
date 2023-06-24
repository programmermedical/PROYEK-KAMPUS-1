<?php
// require '../../config/config.php';
include '../../database/config.php';
require 'InterfaceDataPerkuliahan.php';

class implementDataPerkuliahan extends Config implements InterfaceDataPerkuliahan
{
    public function insertDataPerkuliahan()
    {
    }
    public function updateDataPerkuliahan()
    {
    }
    public function deleteDataPerkuliahan()
    {
    }
    public function readDataPerkuliahan($query)
    {
        // $query = 'SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, matakuliah.ta_awal, matakuliah.ta_akhir, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id';

        $querys = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($querys)) {
            $result[] = $row;
        }
        return $result;
        // $result = mysqli_fetch_assoc($querys);
        // return $result;
    }
}
