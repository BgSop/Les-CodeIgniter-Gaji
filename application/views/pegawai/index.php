<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <?php $this->load->view('_partials/top-bar'); ?>

        <?php $this->load->view('_partials/side-bar'); ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Pegawai</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('home') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Data pegawai</h5>
                    <div class="table-responsive">
                        <a href="<?php echo site_url('pegawai/add') ?>" class="btn btn-primary m-b-10"> Tambah Data</a>
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Tmp/Tgl Lahir</th>
                                    <th>Tgl Masuk</th>
                                    <th>No Rek</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pegawai as $no => $row) : ?>
                                    <tr>
                                        <td width="10px"><?php echo ++$no ?></td>
                                        <td><?php echo $row->pegawai_nip ?></td>
                                        <td><?php echo $row->pegawai_nama ?></td>
                                        <td><?php echo $row->jabatan_nama ?></td>
                                        <td><?php echo $row->pegawai_jenis_kelamin ?></td>
                                        <td><?php echo $row->pegawai_alamat ?></td>
                                        <td><?php echo $row->pegawai_tmp_tgl_lahir ?></td>
                                        <td><?php echo $row->pegawai_tgl_masuk ?></td>
                                        <td><?php echo $row->pegawai_no_rek ?></td>
                                        <td width="160px">
                                            <a href="<?php echo site_url('pegawai/update/' . $row->pegawai_id) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('pegawai/delete/' . $row->pegawai_id) ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- End Wrapper -->
    <?php $this->load->view('_partials/footer'); ?>

    <?php $this->load->view('_partials/scripts'); ?>

</body>

</html>