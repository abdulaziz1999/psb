<?php 
@$user = $_SESSION['MEMBER'];
?>
  <?php if($role == 'admin'):?>
  <div class="container-fluid py-4">
      <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-8">
                              <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Pendaftar</p>
                                  <h5 class="font-weight-bolder">
                                      3
                                  </h5>
                                  <p class="mb-0">
                                      <span class="text-success text-sm font-weight-bolder">+55%</span>
                                      since yesterday
                                  </p>
                              </div>
                          </div>
                          <div class="col-4 text-end">
                              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-8">
                              <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">SMP</p>
                                  <h5 class="font-weight-bolder">
                                      4
                                  </h5>
                                  <p class="mb-0">
                                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                                      since last week
                                  </p>
                              </div>
                          </div>
                          <div class="col-4 text-end">
                              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-8">
                              <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">SMA</p>
                                  <h5 class="font-weight-bolder">
                                      1
                                  </h5>
                                  <p class="mb-0">
                                      <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                      since last quarter
                                  </p>
                              </div>
                          </div>
                          <div class="col-4 text-end">
                              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6">
              <div class="card">
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-8">
                              <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Lunas</p>
                                  <h5 class="font-weight-bolder">
                                      4
                                  </h5>
                                  <p class="mb-0">
                                      <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                  </p>
                              </div>
                          </div>
                          <div class="col-4 text-end">
                              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-lg-7 mb-lg-0 mb-4">
              <div class="card z-index-2 h-100">
                  <div class="card-header pb-0 pt-3 bg-transparent">
                      <h6 class="text-capitalize">Jumlah Pendaftar</h6>
                      <p class="text-sm mb-0">
                          <i class="fa fa-arrow-up text-success"></i>
                          <span class="font-weight-bold">4% more</span> in 2021
                      </p>
                  </div>
                  <div class="card-body p-3">
                      <div class="chart">
                          <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-5">
              <div class="card card-carousel overflow-hidden h-100 p-0">
                  <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                      <div class="carousel-inner border-radius-lg h-100">
                          <div class="carousel-item h-100 active" style="background-image: url('./assets/img/carousel-1.jpg');
        background-size: cover;">
                              <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                  <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                  </div>
                                  <h5 class="text-white mb-1">Get started with Argon</h5>
                                  <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                              </div>
                          </div>
                          <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-2.jpg');
        background-size: cover;">
                              <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                  <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                  </div>
                                  <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                  <p>That’s my skill. I’m not really specifically talented at anything except for the
                                      ability to learn.</p>
                              </div>
                          </div>
                          <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-3.jpg');
        background-size: cover;">
                              <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                  <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                      <i class="ni ni-trophy text-dark opacity-10"></i>
                                  </div>
                                  <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                  <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                              </div>
                          </div>
                      </div>
                      <button class="carousel-control-prev w-5 me-3" type="button"
                          data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next w-5 me-3" type="button"
                          data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  </div>
              </div>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-lg-7 mb-lg-0 mb-4">
              <div class="card ">
                  <div class="card-header pb-0 p-3">
                      <div class="d-flex justify-content-between">
                          <h6 class="mb-2">Sales by Country</h6>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table align-items-center ">
                          <tbody>
                              <tr>
                                  <td class="w-30">
                                      <div class="d-flex px-2 py-1 align-items-center">
                                          <div>
                                              <img src="./assets/img/icons/flags/US.png" alt="Country flag">
                                          </div>
                                          <div class="ms-4">
                                              <p class="text-xs font-weight-bold mb-0">Country:</p>
                                              <h6 class="text-sm mb-0">United States</h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                          <h6 class="text-sm mb-0">2500</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                                          <h6 class="text-sm mb-0">$230,900</h6>
                                      </div>
                                  </td>
                                  <td class="align-middle text-sm">
                                      <div class="col text-center">
                                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                          <h6 class="text-sm mb-0">29.9%</h6>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="w-30">
                                      <div class="d-flex px-2 py-1 align-items-center">
                                          <div>
                                              <img src="./assets/img/icons/flags/DE.png" alt="Country flag">
                                          </div>
                                          <div class="ms-4">
                                              <p class="text-xs font-weight-bold mb-0">Country:</p>
                                              <h6 class="text-sm mb-0">Germany</h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                          <h6 class="text-sm mb-0">3.900</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                                          <h6 class="text-sm mb-0">$440,000</h6>
                                      </div>
                                  </td>
                                  <td class="align-middle text-sm">
                                      <div class="col text-center">
                                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                          <h6 class="text-sm mb-0">40.22%</h6>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="w-30">
                                      <div class="d-flex px-2 py-1 align-items-center">
                                          <div>
                                              <img src="./assets/img/icons/flags/GB.png" alt="Country flag">
                                          </div>
                                          <div class="ms-4">
                                              <p class="text-xs font-weight-bold mb-0">Country:</p>
                                              <h6 class="text-sm mb-0">Great Britain</h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                          <h6 class="text-sm mb-0">1.400</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                                          <h6 class="text-sm mb-0">$190,700</h6>
                                      </div>
                                  </td>
                                  <td class="align-middle text-sm">
                                      <div class="col text-center">
                                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                          <h6 class="text-sm mb-0">23.44%</h6>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="w-30">
                                      <div class="d-flex px-2 py-1 align-items-center">
                                          <div>
                                              <img src="./assets/img/icons/flags/BR.png" alt="Country flag">
                                          </div>
                                          <div class="ms-4">
                                              <p class="text-xs font-weight-bold mb-0">Country:</p>
                                              <h6 class="text-sm mb-0">Brasil</h6>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                          <h6 class="text-sm mb-0">562</h6>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="text-center">
                                          <p class="text-xs font-weight-bold mb-0">Value:</p>
                                          <h6 class="text-sm mb-0">$143,960</h6>
                                      </div>
                                  </td>
                                  <td class="align-middle text-sm">
                                      <div class="col text-center">
                                          <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                          <h6 class="text-sm mb-0">32.14%</h6>
                                      </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <div class="col-lg-5">
              <div class="card">
                  <div class="card-header pb-0 p-3">
                      <h6 class="mb-0">Categories</h6>
                  </div>
                  <div class="card-body p-3">
                      <ul class="list-group">
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex align-items-center">
                                  <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                      <i class="ni ni-mobile-button text-white opacity-10"></i>
                                  </div>
                                  <div class="d-flex flex-column">
                                      <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                      <span class="text-xs">250 in stock, <span class="font-weight-bold">346+
                                              sold</span></span>
                                  </div>
                              </div>
                              <div class="d-flex">
                                  <button
                                      class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                              </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex align-items-center">
                                  <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                      <i class="ni ni-tag text-white opacity-10"></i>
                                  </div>
                                  <div class="d-flex flex-column">
                                      <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                                      <span class="text-xs">123 closed, <span class="font-weight-bold">15
                                              open</span></span>
                                  </div>
                              </div>
                              <div class="d-flex">
                                  <button
                                      class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                              </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex align-items-center">
                                  <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                      <i class="ni ni-box-2 text-white opacity-10"></i>
                                  </div>
                                  <div class="d-flex flex-column">
                                      <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                                      <span class="text-xs">1 is active, <span class="font-weight-bold">40
                                              closed</span></span>
                                  </div>
                              </div>
                              <div class="d-flex">
                                  <button
                                      class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                              </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                              <div class="d-flex align-items-center">
                                  <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                      <i class="ni ni-satisfied text-white opacity-10"></i>
                                  </div>
                                  <div class="d-flex flex-column">
                                      <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                                      <span class="text-xs font-weight-bold">+ 430</span>
                                  </div>
                              </div>
                              <div class="d-flex">
                                  <button
                                      class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                          class="ni ni-bold-right" aria-hidden="true"></i></button>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
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
                <?= $user['nama']?>
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
            <section id="about" class="about">
              <div class="container bg-gray-100 rounded" data-aos="fade-up">
                <div class="section-title">
                  <h2>About</h2>
                  <p>Personal Biography.</p>
                </div>
                <div class="row">
                  <!-- <div class="col-lg-4">
                    <img src="assets/img/profile-3.jpg" class="img-fluid rounded-circle border border-primary" alt="">
                  </div> -->
                  <div class="col-lg-12 pt-4 pt-lg-0 content">
                    <h3>Full Stack Web Developer</h3>
                    <p class="fst-italic">
                      I'm <b>Abdul Aziz</b> Student STT Terpadu Nurul Fikri.
                    </p>
                    <div class="row">
                      <div class="col-lg-6">
                        <ul>
                          <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>4 July 1999</span></li>
                          <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>aziz.kampuskode.com</span></li>
                          <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 896-6900-1989</span></li>
                          <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bogor, Indonesia</span></li>
                        </ul>
                      </div>
                      <div class="col-lg-6">
                        <ul>
                          <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                          <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                          <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>abdu19010ti@student.nurulfikri.ac.id</span></li>
                          <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                        </ul>
                      </div>
                    </div>
                    <p>
                      My name is Abdul Aziz, my educational background is high school in Kalimantan, then I got a scholarship to study at the information and communication technology boarding school in Depok to study IT while being a student at the boarding school. 
                      And now I continue my studies at STT Terpadu Nurul Fikri majoring in Informatics Engineering. 
                      I took weekend classes because I am currently also working at the Darul Quran Mulia Islamic Boarding School Foundation.
                    </p>
                  </div>
                </div>

              </div>
            </section>
              <!-- <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Username</label>
                    <input class="form-control" type="text" value="lucky.jesse">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email address</label>
                    <input class="form-control" type="email" value="jesse@example.com">
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
              </div> -->
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
                    <img src="https://abdulaziz1999.github.io/assets/img/profile-3.jpg" class="rounded-circle img-fluid border border-2 border-white">
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