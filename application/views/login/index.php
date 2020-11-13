<div class="content-block">
    <h2 style="text-align:center;">LOGIN</h2>
    <?php if($this->session->flashdata('pesan_gagal') != null) { ?>
    <h6 style="text-align: center;color:red"><?= $this->session->flashdata('pesan_gagal') ?></h6>
    <?php } ?>
    <div class="loginform">
        <form id="LoginForm" action="<?= base_url('login/aksi_login') ?>" method="post">
            <input type="email" name="email" value="" class="form_input required" placeholder="Email" />
            <input type="password" name="password" value="" class="form_input required" placeholder="password" />
            <!-- <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Lupa Password?</a></div> -->
            <input type="submit" name="submit" class="form_submit" id="submit" value="MASUK" />
        </form>
        <div class="signup_bottom">
            <p>Tidak punya akun?</p>
            <a href="#" data-popup=".popup-signup" class="open-popup">DAFTAR</a>
        </div>
    </div>
    <div class="close_popup_button">
        <a href="#" class="close-popup" data-popup=".popup-login"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
    </div>
</div>