<?php

include 'Person.php';

$nik = 124536;
$data_person = new Person($nik);

echo 'Nama : '.$data_person->data_nama();
echo "<br />";
echo "NIK : ".$nik;
echo "<br />";
echo "Alamat : ".$data_person->data_alamat();
echo "<br />";
echo "Tanggal Lahir : ".$data_person->data_tglLahir();
echo "<br />";
echo "Jenis Kelamin : ".$data_person->data_jenisKelamin();
    