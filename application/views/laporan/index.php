<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>


<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <center>
                    <img width="150px" src="<?php echo base_url('assets/images/big/auth-bg.jpg'); ?>" alt="">
                </center>
            </div>
            <div class="col-md-9">
                <h2>Pay Roll</h2>
                <p>
                    Telp. (0751) 4488888 | Website : <a href="http://www.google.com/"><i>payroll.com</i></a><br>
                    Jl. Prof. Dr. Hamka No.2a, Air Tawar Timur 25132
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 mb-5 mt-5">
                <h2>Data Laporan Gaji </h2>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>No Rekening</th>
                                <th>Gaji Pokok</th>
                                <th>Bonus Lembur</th>
                                <th>Total</th>
                                <th>Tgl Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($laporan as $no => $row) : ?>
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
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <h6 class="mb-5"><?php echo date('d F Y') ?>
                    <br>
                    <br>
                    Pimpinan
                    <br>
                    <br>
                    <br>
                    <br>
                    ........................
                </h6>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>


    <?php $this->load->view('_partials/scripts'); ?>

    <script>
        window.print();
    </script>
</body>

</html>