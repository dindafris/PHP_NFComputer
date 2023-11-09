<?php
include_once '../models/camaba.php';
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
  <title>Data Mahasiswa Baru</title>
    <?php
    include_once 'head.php';
    ?>
  </head>

  <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
         include_once 'menu/menu_maba.php';
         ?>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- navbar -->
          <?php
          include_once 'menu/navbar.php';
          ?>

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Daftar Mahasiswa Baru</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Nisn</th>
                        <th>Asal Sekolah</th>
                        <th>Tahun Lulus</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      foreach($data as $row){
                        ?>
                        <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $row['nama_lengkap'] ?></strong></td>
                        <td><?= $row['nisn'] ?></td>
                        <td><?= $row['asal_sekolah'] ?></td>
                        <td><?= $row['tahun_lulus'] ?></td>
                        <td>
                      <div class="col">
                      <button
                        type="button"
                        class="btn btn-outline-primary"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="<span>Detail</span>"
                      >
                      <i class="bx bx-detail me-1"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-outline-warning"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="<span>Edit</span>"
                      >
                      <i class="bx bx-edit-alt me-1"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-outline-danger"
                        data-bs-toggle="tooltip"
                        data-bs-offset="0,4"
                        data-bs-placement="top"
                        data-bs-html="true"
                        title="<span>Hapus</span>"
                      >
                      <i class="bx bx-trash me-1"></i>
                      </button>
                    </div>
                        </td>
                        </tr>
                      <?php
                      }
                      ?>
                      <!-- <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->



            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
