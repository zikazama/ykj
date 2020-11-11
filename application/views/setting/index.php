<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">
        <div class="pages">
            <div data-page="form" class="page">
                <div class="page-content">

                    <div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
                        <div class="navbar__col navbar__col--icon navbar__col--icon-left">
                            <a href="#" data-panel="left" class="open-panel"><img src="<?= base_url() ?>assets/images/icons/white/menu.png" alt="" title="" /></a>
                        </div>
                        <div class="navbar__col navbar__col--title navbar__col--title-centered">
                            <a href="<?= base_url() ?>">Yuk Kita Jajan</a>
                        </div>
                        <div class="navbar__col navbar__col--icon navbar__col--icon-right">
                            <a href="#" data-panel="right" class="open-panel"><img src="<?= base_url() ?>assets/images/icons/white/user.png" alt="" title="" /></a>
                        </div>
                    </div>

                    <div id="pages_maincontent">

                        <h2 class="page_title">FORM SETTING</h2>
                        <?php if ($this->session->flashdata('pesan_sukses') != null) { ?>
                            <h6 style="text-align: center;color:green"><?= $this->session->flashdata('pesan_sukses') ?></h6>
                        <?php } ?>
                        <?php if ($this->session->flashdata('pesan_gagal') != null) { ?>
                            <h6 style="text-align: center;color:red"><?= $this->session->flashdata('pesan_gagal') ?></h6>
                        <?php } ?>
                        <div class="page_single layout_fullwidth_padding">

                            <div class="contactform">
                                <form class="" id="CustomForm" method="post" action="">
                                    <div class="form_row">
                                        <label>Nama:</label>
                                        <input type="text" name="nama" value="" class="form_input" />
                                    </div>

                                    <div class="form_row">
                                        <label>Email:</label>
                                        <input type="text" name="email" value="" class="form_input required email" />
                                    </div>

                                    <div class="form_row">
                                        <div style="margin:auto"><img style="margin: auto;" src="<?= base_url() ?>assets/images/avatar3.jpg" alt="" title="" /></div>
                                        <label>Foto:</label>
                                        <input type="file" name="foto" value="" class="form_input required email" />
                                    </div>

                                    <input type="submit" name="submit" class="form_submit" id="submit" value="Send" />
                                </form>
                            </div>



                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>