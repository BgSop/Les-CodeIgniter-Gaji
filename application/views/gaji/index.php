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
                        <h4 class="page-title">Gaji</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('home') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gaji</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Data Gaji</h5>
                    <div class="table-responsive">
                        <a href="<?php echo site_url('Gaji/add') ?>" class="btn btn-primary m-b-10"> Tambah Data</a>
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No Rekening</th>
                                    <th>Gaji Pokok</th>
                                    <th>Bonus Lembur</th>
                                    <th>Total</th>
                                    <th>Tgl Transfer</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Gaji as $no => $row) :
                                ?>
                                    <tr>
                                        <td width="10px"><?php echo ++$no ?></td>
                                        <td><?php echo $row->pegawai_nip ?></td>
                                        <td><?php echo $row->pegawai_nama ?></td>
                                        <td><?php echo $row->jabatan_nama ?></td>
                                        <td><?php echo $row->pegawai_no_rek ?></td>
                                        <td>Rp. <?php echo number_format($row->jabatan_gapok) ?></td>
                                        <td>Rp. <?php echo number_format($row->gaji_lembur) ?></td>
                                        <td>Rp. <?php echo number_format($row->gaji_total) ?></td>
                                        <td><?php echo $row->gaji_tgl_transfer ?></td>
                                        <td width="160px">
                                            <a href="<?php echo site_url('Gaji/delete/' . $row->gaji_id) ?>" class="btn btn-danger">Hapus</a>
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