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

                        <h2 class="page_title">Cari Jajanan Sekitar</h2>
                        <div class="page_single layout_fullwidth_padding">

                            <a href="<?= base_url('jajan/upload') ?>">
                                <div id="loadMore" class="btn btn--full">Posting Jajanan</div>
                            </a>

                            <hr>
                            <div class="contactform">
                                <form class="" id="CustomForm" method="post" action="#">
                                    <div class="form_row">
                                        <label>Cari Jajanan:</label>
                                        <input type="text" name="keyword_jajanan" value="" class="form_input" />
                                    </div>
                                    <input type="submit" name="submit" class="form_submit" id="submit" value="Cari" />
                                </form>
                            </div>

                            <ul class="posts">
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>assets/images/photos/photo8.jpg" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">DESIGN</a></div>
                                                    <h2><a href="blog-single.html">Design is not just what it looks like and feels like.</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>assets/images/photos/photo2.jpg" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">NEWS</a></div>
                                                    <h2><a href="blog-single.html">Fashion fades, only style remains the same.</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>assets/images/photos/photo1.jpg" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">CODING</a></div>
                                                    <h2><a href="blog-single.html">Good design is making something memorable.</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>assets/images/photos/photo4.jpg" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">UI/UX LAYOUTS</a></div>
                                                    <h2><a href="blog-single.html">Design is not just what it looks like and feels like.</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>assets/images/photos/photo6.jpg" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">DESIGN</a></div>
                                                    <h2><a href="blog-single.html">Design is not just what it looks like and feels like.</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>assets/images/photos/photo5.jpg" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">NEWS</a></div>
                                                    <h2><a href="blog-single.html">Fashion fades, only style remains the same.</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div id="loadMore" class="btn btn--full">LOAD MORE</div>
                            <div id="showLess">END</div>


                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>