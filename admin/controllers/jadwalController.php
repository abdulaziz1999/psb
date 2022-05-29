<?php
require_once '../config/database.php';
require_once '../models/Siswa.php';
//1.tangkap request element form
$tahun_ajar = $_POST['tahun_ajar'];
$status = $_POST['status'];
//2.menyimpan data2 di atas sebuah array
$data = [
    $tahun_ajar, //? 1
    $status, //? 2
];
//3.proses
$obj = new Siswa();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
    break;
    case 'ubah':
        $data[] = $_POST['idx'];//tangkap hidden field u/ ? ke-8
        $obj->ubah($data);
    break;
    case 'hapus':
        $id[] = $_POST['idx'];//tangkap hidden field u/ ? ke-1
        $obj->hapus($id);
    break;
    default://tombol batal
        header('Location:http://localhost/appku/index.php?hal=dataPegawai');
        break;
}

//4.landing page
header('Location:http://localhost/appku/index.php?hal=dataPegawai');