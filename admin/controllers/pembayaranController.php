<?php
require_once '../config/database.php';
require_once '../models/Pembayaran.php';
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
$obj = new Pembayaran();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_pembayaran');
    break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_pembayaran');
    break;
    case 'edit':
        $detailTa = $obj->getByPembayaran($_POST['id']);
        include_once '../views/hal/form_edit_pembayaran.php';
    break;
    case 'detail':
        $detailTa = $obj->getByPembayaran($_POST['id']);
        include_once '../views/hal/form_detail_pembayaran.php';
    break;
    case 'delete':
        $id_del = $_POST['id'];
        $urldel = 'controllers/pembayaranController.php';
        include_once '../views/hal/modal_delete.php';
    break;
    case 'hapus':
        $id[] = $_POST['idx'];
        $obj->hapus($id);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_pembayaran');
    break;
    default://tombol batal
        header('Location:http://localhost/psb/admin/dash.php?hal=data_pembayaran');
    break;
}

