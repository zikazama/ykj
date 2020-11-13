<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">
        <div class="pages">
            <div data-page="features" class="page">
                <div class="page-content">

                    <?php $this->load->view('template/header') ?>

                    <div id="pages_maincontent">

                        <h2 class="page_title">PROFILE</h2>

                        <div class="page_single layout_fullwidth_padding">

                            <ul class="features_list_detailed">

                                <li>
                                    <div class="feat_small_icon"><img src="<?= base_url() ?>assets/images/icons/black/user.png" alt="" title="" /></div>
                                    <div class="feat_small_details">
                                        <h4> <a href="#" class="open-popup">Nama</a></h4>
                                        <a href="#" class="open-popup"><?= $user['nama'] ?></a>
                                    </div>
                                </li>

                                <!-- <li>
                                    <div class="feat_small_icon"><img src="<?= base_url() ?>assets/images/icons/black/contact.png" alt="" title="" /></div>
                                    <div class="feat_small_details">
                                        <h4><a href="#">Email</a></h4>
                                        <a href="#"><?= $user['email'] ?></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="feat_small_icon"><img src="<?= base_url() ?>assets/images/icons/black/phone.png" alt="" title="" /></div>
                                    <div class="feat_small_details">
                                        <h4><a href="tel:<?= $user['whatsapp'] ?>" class="external">Whatsapp</a></h4>
                                        <a href="tel:<?= $user['whatsapp'] ?>" class="external"><?= $user['whatsapp'] ?></a>
                                    </div>
                                </li> -->

                                <li>
                                    <div class="feat_small_icon"><img src="<?= base_url() ?>assets/images/icons/black/tabs.png" alt="" title="" /></div>
                                    <div class="feat_small_details">
                                        <h4> <a href="#">Ranking - <?= $user['ranking'] ?></a></h4>
                                        <a href="#"><?= $user['point'] ?> Poin</a>
                                    </div>
                                </li>

                            </ul>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>