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

    <div class="container">
        <div class=" row mb-5 mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class=" text-center login-title">Masuk Administrator</h1>
                <div class="account-wall">
                    <form class="form-signin" method="POST" action="<?php echo site_url('login') ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-- End Wrapper -->
    <?php $this->load->view('_partials/footer'); ?>

    <?php $this->load->view('_partials/scripts'); ?>

</body>

</html>