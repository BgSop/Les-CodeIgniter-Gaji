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
                <div class="card-body mb-5">
                    <h4 class="card-title mb-3">Tambah Data Pegawai</h4>
                    <a href="<?php echo site_url('pegawai') ?>" class="btn btn-success mb-3">Kembali</a>
                    <div class="row">
                        <div class="col-md-8">
                            <form action="<?php echo site_url('pegawai/add') ?>" class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Nip</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nip" placeholder="Nip">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Nama
                                        Pegawai</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select name="jabatan" class="form-control">
                                            <?php foreach ($jabatan as $row) : ?>
                                                <option value="<?php echo $row->jabatan_id ?>"><?php echo $row->jabatan_nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <select name="jenis" class="form-control">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea name="alamat" class="form-control" cols="10" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tgl Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" value="<?php echo date('Y-m-d') ?>" class="form-control" name="tgl_lahir" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tgl Masuk</label>
                                    <div class="col-sm-9">
                                        <input type="date" value="<?php echo date('Y-m-d') ?>" class="form-control" name="tgl_masuk" placeholder="Tgl Masuk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">No Rekening</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="norek" placeholder="No Rekening">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3"></label>
                                    <div class=" col-sm-9">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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