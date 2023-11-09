<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 2 PHP</title>
</head>

<body>
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <label class="form-label" for="namaPegawai">Nama Pegawai</label>
                <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="namaPegawai" />
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="agama">Agama</label>
                <select class="form-select" id="agama" aria-label="Agama" name="agama">
                    <option value="Pilih Agama">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" data-sb-validations="" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" data-sb-validations="" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="" />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belum" type="radio" name="status" value="Belum" data-sb-validations="" />
                    <label class="form-check-label" for="belum">Belum</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
                <input class="form-control" id="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" name="jumlahAnak" />
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah Anak is required.</div>
            </div>
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="proses">Kirim</button>
            </div>
        </form>
        <?php

        if (isset($_POST['tombol']) || isset($_POST['namapegawai']) || isset($_POST['agama']) || isset($_POST['jabatan']) || isset($_POST['status']) || isset($_POST['jumlahAnak'])) {

            $nama = $_POST['namaPegawai'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumlahAnak = $_POST['jumlahAnak'];
            $tombol = $_POST['proses'];
            $gp = 0;

            switch ($jabatan) {
                case 'Manager':
                    $gp = 20000000;
                    break;
                case 'Asisten':
                    $gp = 15000000;
                    break;
                case 'Kabag':
                    $gp = 10000000;
                    break;
                case 'Staff':
                    $gp = 4000000;
                    break;
            }


            if ($status == "Menikah" && $jumlahAnak <= 2) {
                $tKeluarga = 0.05 * $gp;
            } else if ($status == "Menikah" && $jumlahAnak <= 5) {
                $tKeluarga = 0.1 * $gp;
            } else if ($status == 'Menikah' && $jumlahAnak > 5) {
                $tKeluarga = 0.15 * $gp;
            } else {
                $tKeluarga = 0;
            }
            $tJabatan = 0.2 * $gp;
            $gk = $gp + $tJabatan + $tKeluarga;
            $zaprof = ($agama == 'Islam' && $gk > 6000000) ?  (0.025 * $gk) : 0;
            $thp = $gk - $zaprof;
        ?>
        
              
                    <table class="table mt-5">
                        <tr class="table-info">
                            <td>Nama Pegawai</td>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Agama</td>
                            <td><?= $agama ?></td>
                        </tr>
                        <tr tr class="table-info">
                            <td>Jabatan</td>
                            <td><?= $jabatan ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Status</td>
                            <td><?= $status ?></td>
                        </tr>
                        <tr tr class="table-info">
                            <td>Jumlah Anak</td>
                            <td><?= $jumlahAnak ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Gaji Pokok</td>
                            <td><?= number_format($gp, 2, ',', '.'); ?></td>
                        </tr>
                        <tr tr class="table-info">
                            <td>Tunjangan Jabatan</td>
                            <td><?= number_format($tJabatan, 2, ',', '.'); ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Tunjangan Keluarga</td>
                            <td><?= number_format($tKeluarga, 2, ',', '.'); ?></td>
                        </tr>
                        <tr tr class="table-info">
                            <td>Gaji Kotor</td>
                            <td><?= number_format($gk, 2, ',', '.'); ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <td>Zakat Profesi</td>
                            <td><?= number_format($zaprof, 2, ',', '.'); ?></td>
                        </tr>
                        <tr class="table-info">
                            <td>Take Home Pay</td>
                            <td> <?= number_format($thp, 2, ',', '.'); ?></td>
                        </tr>
                    </table>
        <?php }
        ?>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
