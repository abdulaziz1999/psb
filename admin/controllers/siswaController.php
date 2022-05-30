<?php
require_once '../config/database.php';
require_once '../models/Siswa.php';
require_once '../views/hal/host.php';
//1.tangkap request element form
@$nisn = $_POST['nisn'];
@$nama = $_POST['nama'];
@$jk = $_POST['jk'];
@$no_hp = $_POST['no_hp'];
@$tmp_lahir = $_POST['tmp_lahir'];
@$tgl_lahir = $_POST['tgl_lahir'];
@$foto = $_POST['foto'];
@$alamat = $_POST['alamat'];

@$tahun_ajar_id = $_POST['tahun_ajar_id'];
@$jadwaltes_id = $_POST['jadwaltes_id'];
@$jenjang = $_POST['jenjang'];
@$asal_sekolah = $_POST['asal_sekolah'];
$tombol = $_POST['proses'];
//2.menyimpan data2 di atas sebuah array
$data = [
    $nisn,
    $nama,
    $jk,
    $no_hp,
    $tmp_lahir,
    $tgl_lahir,
    $foto,
    $alamat
];
$obj = new Siswa();
$idtes = $obj->idjadwaltes($jenjang);
$data2  = [
    'tahun_ajar_id' => $obj->idtahunajar(),
    'jadwaltes_id'  => $idtes,
    'jenjang'       => $jenjang,
    'asal_sekolah'  => $asal_sekolah
];

switch ($tombol) {
    case 'simpan':
        $obj->simpan($data,$data2);
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_siswa');
    break;
    case 'ubah':
        $data[] = $_POST['idx'];//tangkap hidden field u/ ? ke-8
        $obj->ubah($data);
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_siswa');
    break;
    case 'edit':
        $detailTa = $obj->getBySiswa($_POST['id']);
        include_once '../views/hal/form_edit_siswa.php';
    break;
    case 'detail':
        $detailTa = $obj->getBySiswa($_POST['id']);
        include_once '../views/hal/form_detail_siswa.php';
    break;
    case 'delete':
        $id_del = $_POST['id'];
        $urldel = 'controllers/siswaController.php';
        include_once '../views/hal/modal_delete.php';
    break;
    case 'hapus':
        $id[] = $_POST['idx'];//tangkap hidden field u/ ? ke-1
        $obj->hapus($id);
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_siswa');
    break;
    default://tombol batal
        header('Location:'.$base_url.'/psb/admin/dash.php?hal=data_siswa');
        break;
}
