<?php

/**
 * Description of Mahasiswa
 *
 * @author nenek
 */
class Mahasiswa {
    public $nim;
    private $nama;
    protected $nilai;
    
    public function __construct($nim, $nama, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nilai = $nilai;
    }
    
    public function NamaMhs() {
        return $this->nama;
    }
    
    protected function StatusNilai() {
        $status = ($this->nilai >= 60) ? "Lulus" : "Gagal";
        return $status;
    }
}
