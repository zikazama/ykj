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
                                    <img src="<?= base_url() ?>assets/poster.png" alt="" title="" />
                                </div>
                                <!-- <div class="swiper-slide">
                                    <img src="<?= base_url() ?>assets/images/page_photo2.jpg" alt="" title="" />
                                </div> -->

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="page_single layout_fullwidth_padding">

                            <blockquote>
                                <h3 style="text-align: center;"><strong>Bagaimana kita dan YUKIJA mendukung UMKM ?</strong></h3>Seperti tujuan YUKIJA yaitu membantu UMKM. Kita bisa membantu UMKM dengan cara memposting jajanan kita ditempat kita membeli jajanan, dengan itu lokasi si penjual akan ikut tersimpan di dalam sistem sehingga ketika user lain ingin membeli jajanan mereka dapat menemukannya.<p>Semakin banyak jajanan yang kita posting semakin banyak pula UMKM akan terbantu. Ayo kita bantu UMKM kita !</p>
                            </blockquote>

                            
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

