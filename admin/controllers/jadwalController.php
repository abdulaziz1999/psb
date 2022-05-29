<?php
require_once '../config/database.php';
require_once '../models/Jadwal.php';
require_once '../models/Tahunajar.php';
//1.tangkap request element form
@$tgl = $_POST['tgl'];
@$kategori = $_POST['kategori'];
@$kuota = $_POST['kuota'];
@$info = $_POST['info'];
@$idtahunajar = $_POST['idtahunajar'];
$tombol = $_POST['proses'];
//2.menyimpan data2 di atas sebuah array
$data = [
     $tgl,
     $kategori,
     $kuota,
     $info,
     $idtahunajar
];
//3.proses
$obj = new Jadwal();
$objta = new Tahunajar();
switch ($tombol) {
    case 'simpan':
        print_r($data);
        $obj->simpan($data);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_jadwal');
    break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_jadwal');
    break;
    case 'edit':
        $dataTahunajar = $objta->getTahunajar();
        $detailTa = $obj->getByJadwal($_POST['id']);
        include_once '../views/hal/form_edit_jadwal.php';
    break;
    case 'detail':
        $dataTahunajar = $objta->getTahunajar();
        $detailTa = $obj->getByJadwal($_POST['id']);
        include_once '../views/hal/form_detail_jadwal.php';
    break;
    case 'delete':
        $id_del = $_POST['id'];
        $urldel = 'controllers/jadwalController.php';
        include_once '../views/hal/modal_delete.php';
    break;
    case 'hapus':
        $id[] = $_POST['idx'];//tangkap hidden field u/ ? ke-1
        $obj->hapus($id);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_jadwal');
    break;
    default://tombol batal
        header('Location:http://localhost/psb/admin/dash.php?hal=data_jadwal');
        break;
}
