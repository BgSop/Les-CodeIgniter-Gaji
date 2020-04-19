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
                <div class="card-body mb-5">
                    <h4 class="card-title mb-3">Update Data Jabatan</h4>
                    <a href="<?php echo site_url('jabatan') ?>" class="btn btn-success mb-3">Kembali</a>
                    <div class="row">
                        <div class="col-md-8">
                            <form action="<?php echo site_url('jabatan/prosesUpdate') ?>" class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Kode Jabatan</label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo $jabatan->jabatan_id ?>" name="id" type="hidden">
                                        <input value="<?php echo $jabatan->jabatan_kode ?>" type="text" class="form-control" name="kode" placeholder="Kode Jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Nama Jabatan</label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo $jabatan->jabatan_nama ?>" type="text" class="form-control" name="nama" placeholder="Nama Jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Gaji Pokok</label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo $jabatan->jabatan_gapok ?>" type="number" class="form-control" name="gapok" placeholder="Gaji Pokok">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <button type="submit" style="position: right" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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