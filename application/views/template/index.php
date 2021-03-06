<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="dicoding:email" content="fauzi190198@gmail.com">
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/icon.png" />
    <link rel="apple-touch-startup-image" href="<?= base_url() ?>icon.png">
    <!-- HTML Meta Tags -->
    <title>YUKIJA</title>
    <meta name="description" content="YUKIJA adalah platform jajan digital untuk mencari jajanan dan membantu UMKM">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="YUKIJA">
    <meta itemprop="description" content="YUKIJA adalah platform jajan digital untuk mencari jajanan dan membantu UMKM">
    <meta itemprop="image" content="https://yukija.tech/assets/poster.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://yukija.tech">
    <meta property="og:type" content="website">
    <meta property="og:title" content="YUKIJA">
    <meta property="og:description" content="YUKIJA adalah platform jajan digital untuk mencari jajanan dan membantu UMKM">
    <meta property="og:image" content="https://yukija.tech/assets/poster.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="YUKIJA">
    <meta name="twitter:description" content="YUKIJA adalah platform jajan digital untuk mencari jajanan dan membantu UMKM">
    <meta name="twitter:image" content="https://yukija.tech/assets/poster.png">

    <!-- Meta Tags Generated via http://heymeta.com -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/icon.png">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/simplelightbox.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet">

</head>

<body id="mobile_wrap">



    <!-- Login Popup -->
    <?php if (isset($konten)) {
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
                <form id="ForgotForm" method="post" action="<?= base_url('login/aksi_lupa_password') ?>">
                    <input type="text" name="email" value="" class="form_input required" placeholder="email" />
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
            <h4>Bagikan</h4>
            <p>Dukung UMKM kita dengan cara membagikan YUKIJA kepada teman-teman.</p>
            <ul class="social_share">
                <li><a href="https://twitter.com/share?url=<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
                <li><a id="wa" href="#"><img src="<?= base_url() ?>assets/images/icons/black/wa.png" alt="" title="" /><span>WHATSAPP</span></a></li>
            </ul>
            <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/black/menu_close.png" alt="" title="" /></a></div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/js/swiper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/simple-lightbox.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/swiper.custom.js"></script> -->
    <script src="<?= base_url() ?>assets/js/jquery.custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#wa').click(function() {
                var imageURL = '<?= base_url() ?>';
                var fakeLink = document.createElement('a');
                fakeLink.setAttribute('href', 'whatsapp://send?text=' + encodeURI(imageURL));
                fakeLink.setAttribute('data-action', 'share/whatsapp/share');
                fakeLink.click();
            });
        });
    </script>
    <?php if (isset($js)) {
        $this->load->view($js);
    } ?>
</body>

</html>