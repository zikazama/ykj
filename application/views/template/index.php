<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/apple-touch-icon.png" />
    <link rel="apple-touch-startup-image" href="<?= base_url() ?>assets/images/apple-touch-startup-image-640x920.png">
    <title>YKJ</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/icon.png">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet">
   
</head>

<body id="mobile_wrap">

   

    <!-- Login Popup -->
   <?php if(isset($konten)){
       $this->load->view($konten);
   } ?>

    <!-- Register Popup -->
    <div class="popup popup-signup">
        <div class="content-block">
            <h4>DAFTAR</h4>
            <div class="loginform">
                <form id="RegisterForm" method="post" action="<?= base_url() ?>register/aksi_register">
                    <input type="text" name="nama" value="" class="form_input required" placeholder="Nama" />
                    <input type="text" name="email" value="" class="form_input required" placeholder="Email" />
                    <input type="password" name="password" value="" class="form_input required" placeholder="Password" />
                    <input type="text" name="whatsapp" value="" class="form_input required" placeholder="Nomor Whatsapp" />
                    <input type="submit" name="submit" class="form_submit" id="submitregister" value="SIGN UP" />
                </form>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup" data-popup=".popup-signup"><img src="<?= base_url() ?>assets/images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot">
        <div class="content-block">
            <h4>LUPA PASSWORD</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                    <input type="submit" name="submit" class="form_submit" id="submitforgot" value="RESEND PASSWORD" />
                </form>
                <div class="signup_bottom">
                    <p>Silahkan periksa email anda untuk mendapatkan instruksi selanjutnya.</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup" data-popup=".popup-forgot"><img src="<?= base_url() ?>assets/images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

    <!-- Social Icons Popup -->
    <div class="popup popup-social">
        <div class="content-block">
            <h4>Social Share</h4>
            <p>Share icons solution that allows you share and increase your social popularity.</p>
            <ul class="social_share">
                <li><a href="http://twitter.com/"><img src="<?= base_url() ?>assets/images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
                <li><a href="http://www.facebook.com/"><img src="<?= base_url() ?>assets/images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
                <li><a href="http://plus.google.com"><img src="<?= base_url() ?>assets/images/icons/black/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
                <li><a href="http://www.dribbble.com/"><img src="<?= base_url() ?>assets/images/icons/black/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
                <li><a href="http://www.linkedin.com/"><img src="<?= base_url() ?>assets/images/icons/black/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
                <li><a href="http://www.pinterest.com/"><img src="<?= base_url() ?>assets/images/icons/black/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
            </ul>
            <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/black/menu_close.png" alt="" title="" /></a></div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/js/swiper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/swiper.custom.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.custom.js"></script>
</body>

</html>