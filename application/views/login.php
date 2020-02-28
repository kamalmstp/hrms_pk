<?php
$system_name  = 'HRMS';
$header_logo  = 'logo.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Creativeitem" />
    <meta name="description" content="<?php echo $system_name; ?>" />
    <meta name="author" content="Creativeitem" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link name="favicon" type="image/x-icon" href="<?php echo base_url();?>uploads/frontend/<?php echo $header_logo;?>" rel="shortcut icon" />
    <title>Login | <?php echo $system_name; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>uploads/frontend/<?php echo $header_logo;?>" />

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/plugins-css.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/typography.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/responsive.css'); ?>" />


    <link rel="stylesheet" href="<?php echo base_url('assets/css/neon-forms.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/entypo/css/entypo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">

</head>

<body>

    <div class="wrapper">

        <section class="gray-bg height-100vh d-flex align-items-center page-section-ptb ">
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-4 col-md-6 login-fancy-bg bg-overlay-black-10" style="background: url(<?php echo base_url();?>assets/login/login_bg.jpg);">
                        <div class="login-fancy pos-r">
                            <div class="text-center">
                                <div style="padding: 25px;" class="d-none d-md-block"></div>
                                <img src="<?php echo base_url().'assets/images/logo1.png'; ?>" height="200" />
                                <h2 class="text-white mb-20"></h2>
                                <!-- <h4 class="text-white mb-20"><?php echo $system_name;?></h4> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 white-bg">
                        <div class="login-fancy pb-40 clearfix" id = "login_area">
                            <h3 class="mb-30">Login</h3>
                            <form action="<?php echo site_url('login/validate_login'); ?>" method="post">
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="name">Username * </label>
                                    <input id="username" class="web form-control" type="text" placeholder="username" name="username" required>
                                </div>
                                <div class="section-field mb-20">
                                    <label class="mb-10" for="Password">Password * </label>
                                    <input id="Password" class="Password form-control" type="password" placeholder="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>

                            <div class="section-field">
                                <div class="remember-checkbox mb-30">
                                    <!-- <a href="<?php echo base_url();?>" class="float-left">
                                        <i class="entypo-left-open"></i><?php echo get_phrase('back_to_website'); ?></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- jquery -->
    <script src="<?php echo base_url('assets/login/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/toastr.js'); ?>"></script>
    <script type="text/javascript">
        function toggleView(elem) {
            if (elem.id === 'forgot_password_button') {
                $('#login_area').hide();
                $('#forgot_password_area').show();
            }else if (elem.id === 'login_button') {
                $('#login_area').show();
                $('#forgot_password_area').hide();
            }
        }
    </script>
    <!-- SHOW TOASTR NOTIFIVATION -->
    <?php if ($this->session->flashdata('flash_message') != ""):?>

    <script type="text/javascript">
    	toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
    </script>

    <?php endif;?>

    <?php if ($this->session->flashdata('error_message') != ""):?>

    <script type="text/javascript">
    	toastr.error('<?php echo $this->session->flashdata("error_message");?>');
    </script>

    <?php endif;?>
</body>
</html>
