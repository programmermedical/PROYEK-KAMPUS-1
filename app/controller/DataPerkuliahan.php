<?php

class DataPerkuliahan
{
    private
        $prodiId,
        $matkulId,
        $ruanganId,
        $dataDosen,
        $dataMatkul,
        $dataProdi,
        $sesi,
        $waktu,
        $kelas,
        $tingkat,
        $ruangan;



    public function getProdiId()
    {
        return $this->prodiId;
    }

    public function setProdiId($prodiId)
    {
        $this->prodiId = $prodiId;
    }
    public function getMatkulId()
    {
        return $this->matkulId;
    }

    public function setMatkulId($matkulId)
    {
        $this->matkulId = $matkulId;
    }
    public function getRuanganId()
    {
        return $this->ruanganId;
    }

    public function setRuanganId($ruanganId)
    {
        $this->ruanganId = $ruanganId;
    }
    public function getDataDosen()
    {
        return $this->dataDosen;
    }

    public function setDataDosen($dataDosen)
    {
        $this->dataDosen = $dataDosen;
    }

    public function getDataMatkul()
    {
        return $this->dataMatkul;
    }

    public function setDataMatkul($dataMatkul)
    {
        $this->dataMatkul = $dataMatkul;
    }

    public function getDataProdi()
    {
        return $this->dataProdi;
    }

    public function setDataProdi($dataProdi)
    {
        $this->dataProdi = $dataProdi;
    }

    public function getSesi()
    {
        return $this->sesi;
    }

    public function setSesi($sesi)
    {
        $this->sesi = $sesi;
    }

    public function getWaktu()
    {
        return $this->waktu;
    }

    public function setWaktu($waktu)
    {
        $this->waktu = $waktu;
    }

    public function getKelas()
    {
        return $this->kelas;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getTingkat()
    {
        return $this->tingkat;
    }

    public function setTingkat($tingkat)
    {
        $this->tingkat = $tingkat;
    }

    public function getRuangan()
    {
        return $this->ruangan;
    }

    public function setRuangan($ruangan)
    {
        $this->ruangan = $ruangan;
    }
}
