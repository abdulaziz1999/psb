<?php
require_once 'models/Siswa.php';
require_once 'host.php';

$obj = new Siswa();

$dataSiswa = $obj->getSiswa();
?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Pendaftar</h6>
              <!-- <button type="button" class="btn btn-sm bg-gradient-primary btn-block mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">
                        <i class='bx bx-plus'></i> Add
                    </button> -->
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N0</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nisn</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTL</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no="1"; foreach($dataSiswa as $row):?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <?= $no++?>
                          </div>
                        </div>
                      </td>
                      <td>
                        <?= $row['nisn']?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?= $row['nama']?>
                      </td>
                      <td class="align-middle text-center">
                        <?= $row['jk'] == 'P' ? 'Perempuan' : ''?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?= $row['tmp_lahir'].', '.$row['tgl_lahir']?>
                      </td>
                      <td class="align-middle text-center">
                        <?= $row['alamat']?>
                      </td>
                      <td class="align-middle text-center">
                          <button class="btn btn-sm bg-gradient-info" id="<?= $row['id_siswa']?>" onClick="detailJad(this.id)" data-bs-toggle="modal" data-bs-target="#editJadModal"><i class='bx bx-show'></i> Detail</button>
                          <button class="btn btn-sm bg-gradient-success" id="<?= $row['id_siswa']?>" onClick="editJad(this.id)" data-bs-toggle="modal" data-bs-target="#editJadModal"><i class='bx bx-edit'></i> Edit</button>
                          <button class="btn btn-sm bg-gradient-danger" id="<?= $row['id_siswa']?>" onClick="deleleJad(this.id)" data-bs-toggle="modal" data-bs-target="#editJadModal"><i class='bx bx-trash'></i> Delete</button>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bolder text-primary text-gradient" id="exampleModalLabel">Add
                    Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="controllers/siswaController.php" >
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NISN :</label>
                        <input type="number" class="form-control" name="nisn" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama :</label>
                        <input type="text" class="form-control" name="nama" id="recipient-name" required>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="jk" value="P"
                                        id="customRadio1">
                                    <label class="custom-control-label" for="customRadio1">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="jk" value="L"
                                        id="customRadio2">
                                    <label class="custom-control-label" for="customRadio2">Laki-laki</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tempat Lahir :</label>
                        <input type="text" class="form-control" name="tmp_lahir" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tgl Lahir :</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nohp :</label>
                        <input type="text" class="form-control" name="no_hp" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Alamat :</label>
                      <textarea name="alamat" class="form-control" id="message-text" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Foto :</label>
                        <input type="text" class="form-control" name="foto" id="recipient-name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="proses" value="simpan" class="btn bg-gradient-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editJadModal" tabindex="-1" role="dialog" aria-labelledby="editJadModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="isi_modal">
        </div>
    </div>
</div>


<script>
var url = '<?= $base_url?>';
function editJad(id) {
    $.ajax({
        url: url+'/psb/admin/controllers/siswaController.php',
        type: 'POST',
        data: {
            id: id,
            proses: 'edit'
        },
        cache: false,
        beforeSend: function() {
            $('#isi_modal').html(
                '<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>'
                );
        },
        success: function(html) {
            $('#isi_modal').html(html);
        }
    })
}

function detailJad(id) {
    $.ajax({
        url: url+'/psb/admin/controllers/siswaController.php',
        type: 'POST',
        data: {
            id: id,
            proses: 'detail'
        },
        cache: false,
        beforeSend: function() {
            $('#isi_modal').html(
                '<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>'
                );
        },
        success: function(html) {
            $('#isi_modal').html(html);
        }
    })
}

function deleleJad(id){
  $.ajax({
        url: url+'/psb/admin/controllers/siswaController.php',
        type: 'POST',
        data: {
            id: id,
            proses: 'delete'
        },
        cache: false,
        beforeSend: function() {
            $('#isi_modal').html(
                '<div class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>'
                );
        },
        success: function(html) {
            $('#isi_modal').html(html);
        }
    })
}
   
</script>