<?php

class ReadData extends implementDataPerkuliahan
{

    private $query1,
        $query2;

    // public function __construct($prodi) {
    //     $this->query = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu FROM matakuliah INNER JOIN prodi ON prodi.id = matakuliah.prodi_id WHERE nama_prodi = '$prodi' ORDER BY waktuASC;";
    // }

    public function readDataProdi($prodi)
    {
        $this->query1 = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu FROM matakuliah INNER JOIN prodi ON prodi.id = matakuliah.prodi_id WHERE nama_prodi = '$prodi' ORDER BY waktu ASC;";

        if ($querys = parent::readDataPerkuliahan($this->query1)) {
            return  $querys;
        } else {
            "Table $prodi tidak tersedia!!";
        }
    }

    // public function readNamaProdi($prodi)
    // {
    //     $this->query1 = "SELECT nama_prodi FROM prodi WHERE nama_prodi = '$prodi'";
    //     $this->query2 = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu FROM matakuliah INNER JOIN prodi ON prodi.id = matakuliah.prodi_id WHERE nama_prodi = '$prodi' ORDER BY waktu ASC;";

    //     if ($query = mysqli_query($this->conn, $this->query1)) {
    // $result = mysqli_fetch_assoc($query);
    // foreach ($result as $rest) {
    //     // $prodi = $rest;
    // }
    // return $prodi;
    //     if ($query2 = mysqli_query($this->conn, $this->query2)) {
    //         $result = mysqli_fetch_assoc($query2);
    //         foreach ($result as $rest) {
    //         }
    //     }
    // } else {
    //     "Tabel $prodi tidak tersedia!!";
    // }
    // return $result;
    // }
}
