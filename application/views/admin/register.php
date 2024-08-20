

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Digiboard</title>
    
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/')?>assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/')?>assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/')?>assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/')?>assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="<?php echo base_url('assets/admin/')?>assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="<?php echo base_url('assets/admin/')?>assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Registration</h3>
                <form action="<?php echo base_url(); ?>admin/adminRegister" method="post">
               
                
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input type="text" class="form-control rounded-end" name="name" placeholder="name">
                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                </div>

                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control" name="desgination" placeholder="Full Name">
                </div>

                
                <button type="submit" class="btn btn-primary w-100 login-btn">Sign up</button>
            </form>

            <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>



                <div class="other-option">
                    <p>Or continue with</p>
                    <div class="social-box d-flex justify-content-center gap-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    
    <script src="<?php echo base_url('assets/admin/')?>assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url('assets/admin/')?>assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?php echo base_url('assets/admin/')?>assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/admin/')?>assets/js/main.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>
</html>