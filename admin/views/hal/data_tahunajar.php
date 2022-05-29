<?php
require_once 'models/Tahunajar.php';
require_once 'host.php';

$obj = new Tahunajar();

$dataTahunajar = $obj->getTahunajar();
// $detail = $obj->getByTahunajar($id);
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h5 class="text-center mb-2"><b>Data Tahunajar</b></h5>
                    <button type="button" class="btn btn-sm bg-gradient-primary btn-block mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">
                        <i class='bx bx-plus'></i> Add
                    </button>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tahunajar</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no="1"; foreach($dataTahunajar as $row):?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1 text-center">
                                            <div class="d-flex flex-column justify-content-center">
                                                <?= $no++?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <?= $row['tahun_ajar']?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?= $row['status']?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <button class="btn btn-sm bg-gradient-info" id="<?= $row['id_tahun_ajar']?>" onClick="detail(this.id)" data-bs-toggle="modal" data-bs-target="#editModal"><i class='bx bx-show'></i> Detail</button>
                                        <button class="btn btn-sm bg-gradient-success" id="<?= $row['id_tahun_ajar']?>" onClick="edit(this.id)" data-bs-toggle="modal" data-bs-target="#editModal"><i class='bx bx-edit'></i> Edit</button>
                                        <button class="btn btn-sm bg-gradient-danger" id="<?= $row['id_tahun_ajar']?>" onClick="delTa(this.id)" data-bs-toggle="modal" data-bs-target="#editModal"><i class='bx bx-trash'></i> Delete</button>
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
                    Tahunajar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="controllers/tahunajarController.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tahun Ajar:</label>
                        <input type="text" class="form-control" name="tahun_ajar" id="recipient-name">
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
        url: url+'/psb/admin/controllers/tahunajarController.php',
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
        url: url+'/psb/admin/controllers/tahunajarController.php',
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

function delTa(id){
  $.ajax({
        url: url+'/psb/admin/controllers/tahunajarController.php',
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
