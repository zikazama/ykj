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

                        <h2 class="page_title">PEMBERITAHUAN</h2>

                        <div class="page_single layout_fullwidth_padding">

                            <ul class="features_list_detailed">

                                <?php if ($notifikasi != null) { ?>
                                    <?php foreach ($notifikasi as $data) { ?>
                                        <li>
                                            <div class="feat_small_icon"><img src="<?= base_url() ?>assets/images/icons/black/contact.png" alt="" title="" /></div>
                                            <div class="feat_small_details">
                                                <h4> <a href="<?= base_url("postinganku/index/$data[id_post]") ?>" class="open-popup"><?= $data['isi_notifikasi'] ?></a></h4>
                                                <a href="#" class="open-popup"></a>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } else { ?>
                                    <div class="feat_small_icon"><img src="<?= base_url() ?>assets/images/icons/black/contact.png" alt="" title="" /></div>
                                    <div class="feat_small_details">
                                        <h4> <a href="#" class="open-popup">Tidak Ada Pemberitahuan</a></h4>
                                        <a href="#" class="open-popup"></a>
                                    </div>
                                <?php } ?>



                            </ul>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>