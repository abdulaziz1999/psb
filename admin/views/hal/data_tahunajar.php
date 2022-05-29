<?php
require_once 'models/Tahunajar.php';

$obj = new Tahunajar();

$dataTahunajar = $obj->getTahunajar();
?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Tahunajar</h6>
              <a href="" class="btn btn-sm btn-info"><i class='bx bx-plus'></i> Add</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tahunajar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Act</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no="1"; foreach($dataTahunajar as $row):?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
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
                        <a href="" class="btn btn-sm btn-info"><i class='bx bx-eye'></i> Detail</a>
                        <a href="" class="btn btn-sm btn-success"><i class='bx bx-edit'></i> Edit</a>
                        <a href="" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i> Delete</a>
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
