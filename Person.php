<?php

/**
 * Description of Person
 * Desc to display of biodata
 * @param $nik content of nomor induk
 * @author nenek
 */
class Person {
    public $nama;
    public $nik;
    public $alamat;
    public $tgl_lahir;
    public $jenis_kelamin;
    
    function __construct($nik) {
        $this->nik = $nik;
        $this->nama = 'Dee';
        $this->alamat = 'Jogja';
        $this->tgl_lahir = '4 Juni 1999';
        $this->jenis_kelamin = 'L';
    }

    public function data_nama() {
        return $this->nama;
    }
    
    public function data_nik() {
        return $this->nik;
    }
    
    public function data_alamat() {
        return $this->alamat;
    }
    
    public function data_tglLahir() {
        return $this->tgl_lahir;
    }
    
    public function data_jenisKelamin() {
        return $this->jenis_kelamin;
    }
}
