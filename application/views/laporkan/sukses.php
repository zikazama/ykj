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

                        <div class="page_single layout_fullwidth_padding">
                            <div class="success_message">
                                <span>Terima Kasih!</span>
                                <img src="images/icons/black/rocket.png" alt="" title="" />
                                <h3>Pelaporan Anda Akan Segera Kami Tanggapi</h3>
                                <a href="<?= base_url('home') ?>" class="open-popup">Kembali Ke Home</a>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div>
</div>