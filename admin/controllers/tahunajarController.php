<?php
require_once '../config/database.php';
require_once '../models/Tahunajar.php';
require_once '../views/hal/host.php';
//1.tangkap request element form
@$tahun_ajar = $_POST['tahun_ajar'];
@$status = $_POST['status'];
$tombol  = $_POST['proses'];
//2.menyimpan data2 di atas sebuah array
$data = [
    $tahun_ajar, //? 1
    $status, //? 2
];
//3.proses
$obj = new Tahunajar();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_tahunajar');
    break;
    case 'ubah':
        $data[] = $_POST['idx'];//tangkap hidden field u/ ? ke-8
        $obj->ubah($data);
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_tahunajar');
    break;
    case 'edit':
        $detailTa = $obj->getByTahunajar($_POST['id']);
        include_once '../views/hal/form_editTa.php';
    break;
    case 'detail':
        $detailTa = $obj->getByTahunajar($_POST['id']);
        include_once '../views/hal/form_detailTa.php';
    break;
    case 'delete':
        $id_del = $_POST['id'];
        $urldel = 'controllers/tahunajarController.php';
        include_once '../views/hal/modal_delete.php';
    break;
    case 'hapus':
        $id[] = $_POST['idx'];//tangkap hidden field u/ ? ke-1
        $obj->hapus($id);
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_tahunajar');
    break;
    default://tombol batal
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_tahunajar');
        break;
}
