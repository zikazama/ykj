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

                        <h2 class="page_title">Tentang</h2>

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
                               <h3 style="text-align: center;"><strong>Apa itu YUKIJA ?</strong></h3>YUKIJA yaitu singkatan dari Yuk Kita Jajan adalah sebuah platform digital yang bertujuan sebagai media membagikan jajanan. Platform ini bisa digunakan untuk semua orang. Selain bisa berbagi foto jajanan, platform ini menantang para pecinta jajanan atau food blogger/vlogger untuk membagikan jajanan nya kepada orang-orang. Para user akan diberikan ranking sesuai dengan point yang mereka peroleh. Mereka bisa mendapatkan point dengan cara mengupload jajanan mereka sesering mungkin.&nbsp;<p>Adapaun tujuan utama YUKIJA :</p>
<ul>
    <li>Sebagai media sharing jajanan</li>
    <li>Tempat menemukan jajanan terdekat karena jajanan yang muncul hanya radius &lt;= 10 KM</li>
    <li>Membantu UMKM dalam meningkatkan penjualan di masa pandemi ini</li>
</ul>
                            </blockquote>

                            
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

