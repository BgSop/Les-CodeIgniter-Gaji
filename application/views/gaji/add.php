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
                <div class="card-body mb-5">
                    <h4 class="card-title mb-3">Tambah Data Gaji</h4>
                    <a href="<?php echo site_url('Gaji') ?>" class="btn btn-success mb-3">Kembali</a>
                    <div class="row">
                        <div class="col-md-8">
                            <form action="<?php echo site_url('Gaji/add') ?>" class="form-horizontal" method="POST">
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Pegawai</label>
                                    <div class="col-sm-9">
                                        <select onchange="cariJabatan()" id="pegawai" name="pegawai" class="form-control">
                                            <?php foreach ($pegawai as $row) : ?>
                                                <option value="<?php echo $row->pegawai_id ?>"><?php echo $row->pegawai_nama ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input readonly id="jabatan" type="text" class="form-control" name="jabatan" placeholder="jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Gaji Pokok</label>
                                    <div class="col-sm-9">
                                        <input readonly id="gapok" type="text" class="form-control" name="gapok" placeholder="Gaji Pokok">
                                    </div>
                                </div>
                                <script>
                                    function cariJabatan() {
                                        var pegawaiTerpilih = document.getElementById('pegawai').selectedIndex;
                                        var dataPegawai = <?php echo json_encode($pegawai); ?>;
                                        var dataTerpilih = dataPegawai[pegawaiTerpilih];
                                        document.getElementById("jabatan").value = dataTerpilih.jabatan_nama;
                                        document.getElementById("gapok").value = dataTerpilih.jabatan_gapok;
                                    }
                                    cariJabatan();
                                </script>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Total Menit Lembur</label>
                                    <div class="col-sm-9">
                                        <input onkeyup="cariBonus()" id="menit" type="number" class="form-control" name="menit" placeholder="Menit Lembur">
                                    </div>
                                </div>
                                <script>
                                    function cariBonus() {
                                        $menit = document.getElementById('menit').value;
                                        $gapok = document.getElementById('gapok').value;
                                        $hasil = document.getElementById('bonus').value = $menit * 200;
                                        document.getElementById('total').value = parseInt($hasil) + parseInt($gapok);
                                    }
                                    cariBonus();
                                </script>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Bonus</label>
                                    <div class="col-sm-9">
                                        <input id="bonus" readonly type="number" class="form-control" name="bonus" placeholder="Bonus">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Tgl Transfer</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="tgltf" placeholder="Tanggal Transfer">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Total</label>
                                    <div class="col-sm-9">
                                        <input id="total" readonly type="number" class="form-control" name="total" placeholder="Total">
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