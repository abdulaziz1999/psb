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
        header('Location:http://localhost/psb/admin/dash.php?hal=data_ortu');
    break;
    case 'ubah':
        $data[] = $_POST['idx'];//tangkap hidden field u/ ? ke-8
        $obj->ubah($data);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_ortu');
    break;
    case 'edit':
        $detailTa = $obj->getByPembayaran($_POST['id']);
        include_once '../views/hal/form_edit_ortu.php';
    break;
    case 'detail':
        $detailTa = $obj->getByPembayaran($_POST['id']);
        include_once '../views/hal/form_detail_ortu.php';
    break;
    case 'delete':
        $id_del = $_POST['id'];
        $urldel = 'controllers/ortuController.php';
        include_once '../views/hal/modal_delete.php';
    break;
    case 'hapus':
        $id[] = $_POST['idx'];//tangkap hidden field u/ ? ke-1
        $obj->hapus($id);
        header('Location:http://localhost/psb/admin/dash.php?hal=data_ortu');
    break;
    default://tombol batal
        header('Location:http://localhost/psb/admin/dash.php?hal=data_ortu');
        break;
}
