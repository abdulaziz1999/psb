<?php
require_once 'models/Pembayaran.php';
require_once 'host.php';
@$user = $_SESSION['MEMBER'];
$obj = new Pembayaran();
$id = $user['calon_siswa_id'];
$dataPembayaran = $obj->getPembayaran();
$dataSiswa = $obj->getBySiswaPembayaran($id);
?>
<?php if($role == 'admin'):?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Pendaftaran <?= $id;?></h6>
                    <!-- <button type="button" class="btn btn-sm bg-gradient-primary btn-block mb-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModalMessage">
                        <i class='bx bx-plus'></i> Add
                    </button> -->
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N0
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nisn</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Kelamin</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tagihan</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status Bayar</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Metode Pembayaran</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Konfirmasi</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no="1"; foreach($dataPembayaran as $row):?>
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
                                        <?= $row['jk']?>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <?= $row['tagihan']?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $row['status_bayar']?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $row['metode_pembayaran']?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $row['konfirmasi']?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-sm bg-gradient-info" id="<?= $row['id_pembayaran']?>"
                                            onClick="detail(this.id)" data-bs-toggle="modal"
                                            data-bs-target="#editModal"><i class='bx bx-show'></i> Detail</button>
                                        <button class="btn btn-sm bg-gradient-success" id="<?= $row['id_pembayaran']?>"
                                            onClick="edit(this.id)" data-bs-toggle="modal"
                                            data-bs-target="#editModal"><i class='bx bx-edit'></i> Edit</button>
                                        <button class="btn btn-sm bg-gradient-danger" id="<?= $row['id_pembayaran']?>"
                                            onClick="delPem(this.id)" data-bs-toggle="modal"
                                            data-bs-target="#editModal"><i class='bx bx-trash'></i> Delete</button>
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
                    Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="controllers/pembayaranController.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Siswa:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="status" value="active"
                                        id="customRadio1">
                                    <label class="custom-control-label" for="customRadio1">Active</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="status" value="inactive"
                                        id="customRadio2">
                                    <label class="custom-control-label" for="customRadio2">Non Active</label>
                                </div>
                            </div>
                        </div>
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


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="isi_modal">
        </div>
    </div>
</div>

<script>
var url = '<?= $base_url?>';
function edit(id) {
    $.ajax({
        url: url+'/psb/admin/controllers/pembayaranController.php',
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

function detail(id) {
    $.ajax({
        url: url+'/psb/admin/controllers/pembayaranController.php',
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

function delPem(id){
  $.ajax({
        url: url+'/psb/admin/controllers/pembayaranController.php',
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

<?php elseif($role == 'siswa'):?>
    <div class="card shadow-lg mx-4">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?= $base_url.'/psb/admin/assets/img/default.jpg'?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?= $dataSiswa['nama']?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Calon Siswa
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 badge badge-sm bg-gradient-success">Profile</p>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama</label>
                    <input class="form-control" type="text" disabled value="<?= $dataSiswa['nama']?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Mendaftar ke</label>
                    <input class="form-control" type="email" disabled value="<?= $dataSiswa['jenjang']?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">First name</label>
                    <input class="form-control" type="text" value="Jesse">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Last name</label>
                    <input class="form-control" type="text" value="Lucky">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" type="text" value="New York">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" type="text" value="United States">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Postal code</label>
                    <input class="form-control" type="text" value="437300">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">About me</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">About me</label>
                    <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="./assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="<?= $base_url.'/psb/admin/assets/img/default.jpg'?>" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <!-- <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Programmer</a>
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Freelancer</a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
              </div> -->
            </div>
            <!-- <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">23</span>
                      <span class="text-sm opacity-8">Projects</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">7</span>
                      <span class="text-sm opacity-8">Framework</span>
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">5</span>
                      <span class="text-sm opacity-8">L.Programming</span>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="text-center mt-4 mb-2">
                <h5>
                  Abdul Aziz<span class="font-weight-light">, <b>22</b></span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Sukabumi, Jawa Barat
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>software engineer  - DQM
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>STT Terpadu Nurul Fikri
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  <?php endif;?>