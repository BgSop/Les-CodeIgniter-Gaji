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
                        <h4 class="page-title">Lembur</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('home') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Lembur</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body mb-5">
                    <h4 class="card-title mb-3">Tambah Data Lembur</h4>
                    <a href="<?php echo site_url('lembur') ?>" class="btn btn-success mb-3">Kembali</a>
                    <div class="row">
                        <div class="col-md-8">
                            <form action="<?php echo site_url('lembur/add') ?>" class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Nama Pegawai</label>
                                    <div class="col-sm-9">
                                        <select name="pegawai_id" class="form-control">
                                            <?php foreach ($pegawai as $row) : ?>
                                                <option value="<?php echo $row->pegawai_id ?>"><?php echo $row->pegawai_nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Menit Lembur</label>
                                    <div class="col-sm-9">
                                        <input onkeyup="cariBonus()" id="menit" type="number" class="form-control" name="menit" placeholder="Menit Lembur">
                                    </div>
                                </div>
                                <script>
                                    function cariBonus() {
                                        $menit = document.getElementById('menit').value;
                                        document.getElementById('bonus').value = $menit * 15;
                                    }
                                </script>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Bonus</label>
                                    <div class="col-sm-9">
                                        <input id="bonus" readonly type="number" class="form-control" name="bonus" placeholder="Bonus">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <button type="submit" style="position: right" class="btn btn-primary">Simpan</button>
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