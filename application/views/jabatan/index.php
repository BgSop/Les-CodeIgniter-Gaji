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
                        <h4 class="page-title">Jabatan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('home') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Jabatan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Data Jabatan</h5>
                    <div class="table-responsive">
                        <a href="<?php echo site_url('jabatan/add') ?>" class="btn btn-primary m-b-10"> Tambah Data</a>
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Jabatan</th>
                                    <th>Nama Jabatan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jabatan as $no => $row) : ?>
                                    <tr>
                                        <td width="10px"><?php echo ++$no ?></td>
                                        <td><?php echo $row->jabatan_kode ?></td>
                                        <td><?php echo $row->jabatan_nama ?></td>
                                        <td>Rp. <?php echo number_format($row->jabatan_gapok) ?></td>
                                        <td width="160px">
                                            <a href="<?php echo site_url('jabatan/update/' . $row->jabatan_id) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('jabatan/delete/' . $row->jabatan_id) ?>" class="btn btn-danger">Hapus</a>
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