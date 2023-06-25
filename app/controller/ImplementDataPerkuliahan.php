<?php
// require 'config.php';
include 'database/config.php';
require 'InterfaceDataPerkuliahan.php';

class implementDataPerkuliahan extends Config implements InterfaceDataPerkuliahan
{
    public function insertDataPerkuliahan(DataPerkuliahan $Dp)
    {
        if ($this->conn->connect_errno) {
            die('Koneksi error : ' . $this->conn->connect_errno . ' - ' . $this->conn->connect_error);
        }

        $query = "INSERT INTO prodi (nama_prodi, sesi, kelas, tingkat) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $stmt->bind_param("sisi", $prodi, $sesi, $kelas, $tingkat);
        $prodi = $Dp->getDataProdi();
        $sesi = $Dp->getSesi();
        $kelas = $Dp->getKelas();
        $tingkat = $Dp->getTingkat();
        if ($stmt->execute()) {
            $query2 = "INSERT INTO matakuliah (prodi_id, nama_matkul, nama_dosen, waktu) VALUES (?,?,?,?)";
            $stmt2 = mysqli_prepare($this->conn, $query2);
            $stmt2->bind_param("isss", $prodi_id, $matkul, $dosen, $waktu);
            $prodi_id = $stmt->insert_id;
            $matkul = $Dp->getDataMatkul();
            $dosen = $Dp->getDataDosen();
            $waktu = $Dp->getWaktu();
            $stmt2->execute();
            // if ($stmt2->execute()) {
            //     $id_perkuliahan = $stmt2->insert_id;
            //     $cek = "SELECT prodi_id FROM matakuliah WHERE prodi_id = '$id_perkuliahan'";
            //     $query = mysqli_query($this->conn, $cek);
            //     $result = mysqli_fetch_assoc($query);
            //     $rest = $result['prodi_id'];
            //     if ($rest == $id_perkuliahan) {
            //         mysqli_close($this->conn);
            //         $stmt->close();
            //         $stmt2->close();
            //         die();
            //     } else {
            //         $del = "DELETE FROM prodi WHERE id = '$prodi_id'";
            //         mysqli_query($this->conn, $del);
            //     }
            // }
            $stmt->close();
            $stmt2->close();
            // die();
        }

        // if (!$stmt) {
        //     die('Querry Error : ' . mysqli_errno($this->conn));
        // } else {
        //     echo "Penambahan " . mysqli_stmt_affected_rows($stmt);
        // }

        // $stmt1 = mysqli_prepare($this->conn, "INSERT INTO prodi VALUES (?,?,?,?,?)");
        // $stmt1->bind_param("isisi", $id, $prodi, $sesi, $kelas, $tingkat);
        // $stmt2 = mysqli_prepare($this->conn, "INSERT INTO matakuliah VALUES (?,?,?,?,?)");
        // $stmt2->bind_param("iisss", $id, $id_prodi, $matkul, $dosen, $waktu);
        // $id  = null;
        // $prodi = $Dp->getDataProdi();
        // $sesi = $Dp->getSesi();
        // $kelas = $Dp->getKelas();
        // $tingkat = $Dp->getTingkat();
        // mysqli_stmt_execute($stmt);
        // mysqli_stmt_close($stmt);
        // mysqli_close($conn);
    }
    public function updateDataPerkuliahan(DataPerkuliahan $dP)
    {
    }
    public function deleteDataPerkuliahan()
    {
    }
    public function readDataPerkuliahan($query)
    {
        // $query = '';

        $querys = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($querys)) {
            $result[] = $row;
        }
        return $result;
        // $result = mysqli_fetch_assoc($querys);
        // return $result;
    }
}
