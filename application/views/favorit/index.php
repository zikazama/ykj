<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">
        <div class="pages">
            <div data-page="blog" class="page">
                <div class="page-content">

                    <?php $this->load->view('template/header') ?>

                    <div id="pages_maincontent">

                        <h2 class="page_title">Jajanan Yang Disukai</h2>
                        <div class="page_single layout_fullwidth_padding">

                            <?php if ($this->session->flashdata('pesan_sukses') != null) { ?>
                                <h6 style="text-align: center;color:green"><?= $this->session->flashdata('pesan_sukses') ?></h6>
                            <?php } ?>
                            <?php if ($this->session->flashdata('pesan_gagal') != null) { ?>
                                <h6 style="text-align: center;color:red"><?= $this->session->flashdata('pesan_gagal') ?></h6>
                            <?php } ?>


                            <ul class="posts" id="tempatPost">
                                
                            <?php if($postingan != null) { ?>
                            <?php foreach($postingan as $data) { ?>
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>uploads/jajanan/<?= $data['foto_jajanan'] ?>" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html"><?= $data['judul'] ?></a></div>
                                                    <h2><a href="blog-single.html"><?= $data['caption'] ?></a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="<?= base_url('favorite/komentar/'.$data['id_post']) ?>" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <?php if($data['like'] == 0) { ?>
                                            <a href="<?= base_url('favorite/like/'.$data['id_post']) ?>"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <?php } else if($data['like'] == 1) { ?>
                                                <a href="<?= base_url('favorite/dislike/'.$data['id_post']) ?>"><img src="<?= base_url() ?>assets/images/icons/white/dislike.png" alt="" title="" /></a>
                                            <?php } ?>
                                            <a href="<?= base_url('laporkan/index/'.$data['id_post']) ?>"><img src="<?= base_url() ?>assets/images/icons/white/report.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                            <?php } else  {?>
                                <div style="align-content: center;">
                                    <h3>Anda belum menyukai jajanan satupun</h3>
                                </div>
                            <?php } ?>
                                
                            </ul>

                            <!-- <div id="loadMore" class="btn btn--full">LOAD MORE</div> -->
                            <div id="showLess">END</div>


                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>