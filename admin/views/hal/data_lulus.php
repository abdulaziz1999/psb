<?php
require_once 'models/Siswa.php';

$obj = new Siswa();

$dataSiswa = $obj->getSiswa();
?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Siswa Lulus</h6>
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
                      <!-- <th class="text-secondary opacity-7"></th> -->
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
                        <?= $row['jk']?>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <?= $row['tmp_lahir'],$row['tgl_lahir']?>
                      </td>
                      <td class="align-middle text-center">
                        <?= $row['alamat']?>
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
