<?php
require_once 'InterfaceDataPerkuliahan.php';

class Config
{
    private $hostname = 'localhost',
        $username = 'root',
        $password = 'root',
        $database = 'db_kampus11';
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        if ($this->conn == false) die("koneksi tidak bisa terhubung ke" . $this->conn . mysqli_connect_error());
        // $this->conn = mysqli_connect("localhost", "root", "root", "db_kampus1");
    }
}


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



    public function updateDataPerkuliahan(DataPerkuliahan $Dp)
    {
        // $query = "UPDATE prodi SET nama_prodi = ?, sesi = ?, kelas = ?, tingkat = ? WHERE id = ?";
        // $stmt = mysqli_prepare($this->conn, $query);
        // $stmt->bind_param("sisii", $prodi, $sesi, $kelas, $tingkat, $id);
        // $id = $Dp->getId();
        // $prodi = $Dp->getDataProdi();
        // $sesi = $Dp->getSesi();
        // $kelas = $Dp->getKelas();
        // $tingkat = $Dp->getTingkat();
        // if ($stmt->execute()) {
        //     $prodi_id = $stmt->insert_id;
        //     $query2 = "UPDATE matakuliah SET nama_matkul = ?, nama_dosen = ?, waktu = ? WHERE prodi_id = '$prodi_id'";
        //     $stmt2 = mysqli_prepare($this->conn, $query2);
        //     $stmt2->bind_param("sss", $matkul, $dosen, $waktu);
        //     $matkul = $Dp->getDataMatkul();
        //     $dosen = $Dp->getDataDosen();
        //     $waktu = $Dp->getWaktu();
        //     if ($stmt2->execute()) {
        //         $query3 = "UPDATE ruangan SET ruangan = 'Ruangan 2' WHERE prodi_id = '$prodi_id'";
        //         $stmt3 = mysqli_prepare($this->conn, $query3);
        //         // $stmt3->bind_param('s', $ruangan);
        //         $ruangan = $Dp->getRuangan();
        //         $stmt3->execute();
        //         $stmt3->close();
        //         $stmt2->close();
        //         $stmt->close();
        //     }
        // }

        // $newQuery = "UPDATE prodi, matakuliah, ruangan SET prodi.nama_prodi = ?, prodi.sesi = ?, prodi.kelas = ?, prodi.tingkat = ?, matakuliah.nama_matkul = ?, matakuliah.nama_dosen = ?, matakuliah.waktu = ?, ruangan.ruangan = ? WHERE prodi.id = $prodi_id AND matakuliah.id = $mataKuliah_id AND ruangan.id = $ruangan_id";

        // $newQuery = "SELECT prodi.nama_prodi, prodi.sesi, prodi.kelas, prodi.tingkat, matakuliah.nama_matkul, matakuliah.nama_dosen, matakuliah.waktu, ruangan.ruangan FROM ruangan INNER JOIN prodi ON prodi.id = ruangan.prodi_id INNER JOIN matakuliah ON matakuliah.id = ruangan.matakuliah_id"

        $query = "UPDATE prodi, matakuliah, ruangan SET prodi.nama_prodi = ?, prodi.sesi = ?, prodi.kelas = ?, prodi.tingkat = ?, matakuliah.nama_matkul = ?, matakuliah.nama_dosen = ?, matakuliah.waktu = ?, ruangan.ruangan = ? WHERE prodi.id = ? AND matakuliah.id = ? AND ruangan.id = ?";

        $stmt = mysqli_prepare($this->conn, $query);
        $stmt->bind_param("sisissssiii", $prodi, $sesi, $kelas, $tingkat, $matkul, $dosen, $waktu, $ruangan, $prodi_id, $matkul_id, $ruangan_id);
        $prodi = $Dp->getDataProdi();
        $sesi = $Dp->getSesi();
        $kelas = $Dp->getKelas();
        $tingkat = $Dp->getTingkat();
        $matkul = $Dp->getDataMatkul();
        $dosen = $Dp->getDataDosen();
        $waktu = $Dp->getWaktu();
        $ruangan = $Dp->getRuangan();
        $prodi_id = $_GET['P_id'];
        $matkul_id = $_GET['M_id'];
        $ruangan_id = $_GET['R_id'];
        $stmt->execute();
        $stmt->close();

        // var_dump($prodi, $tingkat, $kelas, $matkul, $ruangan);
    }

    public function updateDataProdi(DataPerkuliahan $Dp)
    {
        $query = "UPDATE prodi, matakuliah SET prodi.nama_prodi = ?, prodi.sesi = ?, prodi.kelas = ?, prodi.tingkat = ?, matakuliah.nama_matkul = ?, matakuliah.nama_dosen = ?, matakuliah.waktu = ? WHERE prodi.id = ? AND matakuliah.id = ? ";

        $stmt = mysqli_prepare($this->conn, $query);
        $stmt->bind_param("sisisssii", $prodi, $sesi, $kelas, $tingkat, $matkul, $dosen, $waktu, $prodi_id, $matkul_id);
        $prodi = $Dp->getDataProdi();
        $sesi = $Dp->getSesi();
        $kelas = $Dp->getKelas();
        $tingkat = $Dp->getTingkat();
        $matkul = $Dp->getDataMatkul();
        $dosen = $Dp->getDataDosen();
        $waktu = $Dp->getWaktu();
        $prodi_id = $_GET['P_id'];
        $matkul_id = $_GET['M_id'];
        $stmt->execute();
        $stmt->close();
    }

    public function deleteDataPerkuliahan($M_id)
    {
        $query = "DELETE FROM matakuliah WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        $stmt->bind_param('i', $id);
        $id = $M_id;
        $stmt->execute();

        if (!$stmt) {
            header('location: ../dataPerkuliahan.php?gagalhapus');
            // echo "<script>document.location.href='../dataPerkuliahan.php'; alert('gagal menghapus data!!')</script>";
        } else {
            // echo "<script>document.location.href='../dataPerkuliahan.php'; alert('data berhasil dihapus!!')</script>";
            header('location: ../dataPerkuliahan.php?hapus');
        }
    }

    public function deleteDataPerkuliahanProdi($M_id)
    {
        $query = "DELETE FROM matakuliah WHERE matakuliah.id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        $stmt->bind_param('i', $id);
        $id = $M_id;
        $stmt->execute();

        if (!$stmt) {
            header('location: ../dataPerkuliahan.php?gagalhapus');
            // echo "<script>document.location.href='../dataPerkuliahan.php'; alert('gagal menghapus data!!')</script>";
        } else {
            // echo "<script>document.location.href='../dataPerkuliahan.php'; alert('data berhasil dihapus!!')</script>";
            header('location: ../dataPerkuliahan.php?hapus');
        }
    }
    public function readDataPerkuliahan($query)
    {
        // $query = '';

        $querys = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($querys)) {
            $result[] = $row;
        }
        return $querys;
        // $result = mysqli_fetch_assoc($querys);
        // return $result;
    }

    public function InsertAll(DataPerkuliahan $Dp)
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
            if ($stmt2->execute()) {
                $mataKuliah_id = $stmt2->insert_id;
                $query = "INSERT INTO ruangan (prodi_id, mataKuliah_id, ruangan) VALUES (?,?,?)";
                $stmt3 = mysqli_prepare($this->conn, $query);
                $stmt3->bind_param('iis', $prodi_id, $mataKuliah_id, $ruangan);
                $ruangan = $Dp->getRuangan();
                $stmt3->execute();
                $stmt3->close();
                // $this->conn->close();
            }
        }
    }

    public function InsertDataProdi(DataPerkuliahan $dP)
    {
        if ($this->conn->connect_errno) {
            die('Koneksi error : ' . $this->conn->connect_errno . ' - ' . $this->conn->connect_error);
        }

        $query = "INSERT INTO prodi (nama_prodi, sesi, kelas, tingkat) VALUES (?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $stmt->bind_param('sisi', $prodi, $sesi, $kelas, $tingkat);
        $prodi = $dP->getDataProdi();
        $sesi = $dP->getSesi();
        $kelas = $dP->getKelas();
        $tingkat = $dP->getTingkat();
        if ($stmt->execute()) {
            $query = "INSERT INTO matakuliah (prodi_id, nama_matkul, nama_dosen, waktu) VALUES (?,?,?,?)";
            $stmt2 = mysqli_prepare($this->conn, $query);
            $stmt2->bind_param('isss', $prodi_id, $matkul, $dosen, $waktu);
            $prodi_id = $stmt->insert_id;
            $matkul = $dP->getDataMatkul();
            $dosen = $dP->getDataDosen();
            $waktu = $dP->getWaktu();
            $stmt2->execute();
            $stmt2->close();
            $stmt->close();
        }
    }
}
