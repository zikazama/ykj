<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">
        <div class="pages">
            <div data-page="blogsingle" class="page">
                <div class="page-content">

                    <?php $this->load->view('template/header') ?>

                    <div id="pages_maincontent">

                        <a href="<?= base_url('jajan/direct') ?>" class="backto"><img src="<?= base_url() ?>assets/images/icons/black/back.png" alt="" title="" /></a>
                        <h2 class="blog_title"><?= $postingan['judul'] ?></h2>

                        <!-- Slider -->
                        <div class="swiper-container-pages">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="<?= base_url() ?>uploads/jajanan/<?= $postingan['foto_jajanan'] ?>" alt="" title="" />
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="page_single layout_fullwidth_padding">
                            <div class="post_single">
                                <p>
                                    <?= $postingan['caption'] ?>
                                </p>
                                <span class="post_date"> <?= $postingan['tanggal_post'] ?></span>
                                <span class="post_author"> <a href="#"> <?= $postingan['nama'] ?></a></span>
                                <span class="post_comments"><a href="#"><?= $jumlah_komentar ?></a></span>
                            </div>
                            
                            <iframe width="100%" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDLPKsfATfhZXgndiwLwxDsBy3V84R19tI
    &q=<?= $postingan['latitude'] ?>,<?= $postingan['longitude'] ?>" allowfullscreen>
                            </iframe>
                            <a href="https://maps.google.com/?q=<?= $postingan['latitude'] ?>,<?= $postingan['longitude'] ?>" class="btn btn--full open-popup">Tunjukan Tempat Di Maps</a>
                            <div class="tabs">

                                <input type="radio" name="tabs" class="tabradio" id="tabtwo" checked="checked">
                                <label class="tablabel tablabel--12" for="tabtwo">Komentar</label>
                                <div class="tab">
                                    <ul class="comments">

                                        <?php if ($komentar != null) { ?>
                                            <?php foreach ($komentar as $data) { ?>
                                                <li class="comment_row">
                                                    <div class="comm_avatar"><img src="<?= $data['foto'] ? base_url() . 'uploads/profiles/' . $data['foto'] : base_url() . 'assets/images/avatar3.jpg' ?>" alt="" title="" border="0" /></div>
                                                    <div class="comm_content">
                                                        <p><?= $data['isi_komentar'] ?>, dikomentari oleh <a href="#"><?= $data['nama'] ?></a></p>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <li class="comment_row">

                                                <div class="comm_content">
                                                    <p>Belum ada komentar</p>
                                                </div>
                                            </li>
                                        <?php } ?>

                                        <div class="clear"></div>
                                    </ul>
                                </div>
                                <?php if ($this->session->flashdata('pesan_sukses') != null) { ?>
                                    <h6 style="text-align: center;color:green"><?= $this->session->flashdata('pesan_sukses') ?></h6>
                                <?php } ?>
                                <br><br>
                                <input type="radio" name="tabs" class="tabradio" id="tabone">
                                <label class="tablabel tablabel--12" for="tabone">Beri Komentar</label>
                                <div class="tab">
                                    <div class="contactform">
                                        <form id="CommentForm" method="post" action="<?= base_url('jajan/aksi_komentar/' . $this->uri->segment(3) . '/' . $this->uri->segment(4) . '/' . $this->uri->segment(5)) ?>>">
                                            <label>Komentar:</label>
                                            <textarea name="komentar" id="Comment" class="form_textarea" rows="" cols=""></textarea>
                                            <input type="submit" name="submit" class="form_submit" id="submit" value="Kirim Komentar" />
                                        </form>
                                    </div>
                                </div>



                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>