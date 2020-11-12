<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">

        <div class="pages">
            <div data-page="about" class="page">
                <div class="page-content">

                <?php $this->load->view('template/header') ?>


                    <div id="pages_maincontent">

                        <h2 class="page_title">Dukung UMKM</h2>

                        <!-- Slider -->
                        <div class="swiper-container-pages">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="<?= base_url() ?>assets/images/page_photo.jpg" alt="" title="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= base_url() ?>assets/images/page_photo2.jpg" alt="" title="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?= base_url() ?>assets/images/page_photo3.jpg" alt="" title="" />
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="page_single layout_fullwidth_padding">

                            <blockquote>
                                This mobile template that can be used to create a mobile website, a mobile web app, or even a native mobile app. The design is using a full width layout that works perfectly on tablets and desktop also. <span>SINDEVO.COM</span>
                            </blockquote>

                            
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

