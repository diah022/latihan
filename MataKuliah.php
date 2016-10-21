<?php

include 'Mahasiswa.php';

class MataKuliah extends Mahasiswa {
    public $matakuliah;
    public $dosen;
    public $status;
    
    public function Matkul($matkul, $dosen) {
        $this->matakuliah = $matkul;
        $this->dosen = $dosen;
    }
    
    // Mengambil property dari class turunan
    public function NilaiMhs() {
        return $this->nilai;
    }
    
    public function Grade() {
        if ($this->nilai >= 70){
            $grade = "A";
        } elseif ($this->nilai >= 60){
            $grade = "B";
        } elseif ($this->nilai >= 50){
            $grade = "C";
        } elseif ($this->nilai >= 40){
            $grade = "D";
        } else {
            $grade = "E";
        }
        
        return $grade;
    }
    
    public function StatusNilaiMhs() {
        $this->status = $this->StatusNilai();
        return $this->status;
    }
}

$data_mhs = new MataKuliah(124325, "Diah", 77);
$data_mhs->Matkul("Pemrograman Web Dinamis", "Wahyu Widodo");

echo "NIK : ".$data_mhs->nim;
echo "<br />";
echo 'Nama : '.$data_mhs->NamaMhs();
echo "<br />";
echo "Mata Kuliah : ".$data_mhs->matakuliah;
echo "<br />";
echo "Dosen : ".$data_mhs->dosen;
echo "<br />";
echo "Nilai : ".$data_mhs->NilaiMhs();
echo "<br />";
echo "Grade : ".$data_mhs->Grade();
echo "<br />";
echo "Status : ".$data_mhs->StatusNilaiMhs();