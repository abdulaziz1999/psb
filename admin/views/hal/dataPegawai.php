<?php
require_once 'models/Pegawai.php';
//ciptakan object dari class Produk
$obj = new Pegawai();
//panggil method tampilkan data
$rs = $obj->dataPegawai();
?>
<div class="row">
    <div class="col-6">
        <a href="index.php?hal=formPegawai" class="btn btn-primary">Tambah</a>
    </div>
    <div class="col-6">
        <h3>Data Pegawai</h3>
    </div>
</div>
<?php
if(isset($member)){
?>
<?php } ?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
  $no = 1;
  foreach($rs as $row){  
  ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nip']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['agama']; ?></td>
            <td><?= $row['nama_divisi']; ?></td>
            <td><img src="assets/images/<?= $row['foto']; ?>" width="50" height="50" alt=""></td>
            <td>
                <form method="POST" action="controllers/pegawaiController.php">
                      <a href="index.php?hal=detailPegawai&id=<?= $row['id_pegawai']; ?>" class="btn btn-info">Detail</a>
                      <?php $role = @$member['role'];
                          if(isset($member)){
                        ?>
                          <a href="index.php?hal=formEditPegawai&id=<?= $row['id_pegawai']; ?>" class="btn btn-warning">Ubah</a>
                        <?php if($role != 'staff'){ ?>
                      <button name="proses" value="hapus" onclick="return confirm('Anda Yakin Data diHapus?')" class="btn btn-danger">Hapus</button>
                      <?php } ?>
                      <input type="hidden" name="idx" value="<?= $row['id_pegawai']; ?>" />
                      <?php } ?>
                </form>
            </td>
        </tr>
        <?php 
  $no++;
  }
  ?>
    </tbody>
</table>