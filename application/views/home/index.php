<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

	<div class="view view-main">



		<div class="pages">

			<div data-page="index" class="page homepage">
				<div class="page-content">

					<div class="navbar navbar--fixed navbar--fixed-top">
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

					<!-- Slider -->
					<div class="swiper-container slidertoolbar">
						<div class="swiper-wrapper">

							<div class="swiper-slide" style="background-image:url(<?= base_url() ?>assets/images/slide1.jpg);">

								<div class="slider-caption">

									<h2 data-swiper-parallax="-100%">Mobile UI KIT</h2>
									<p data-swiper-parallax="-30%">Design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.</p>
									<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">READ MORE</a>
								</div>
							</div>

							<div class="swiper-slide" style="background-image:url(<?= base_url() ?>assets/images/slide2.jpg);">

								<div class="slider-caption">

									<h2 data-swiper-parallax="-100%" class="title--white">Multipurpose</h2>
									<p data-swiper-parallax="-30%" class="text--white">You can design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.</p>
									<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">READ MORE</a>
								</div>

							</div>
							<div class="swiper-slide" style="background-image:url(<?= base_url() ?>assets/images/slide3.jpg);">

								<div class="slider-caption">

									<h2 data-swiper-parallax="-100%" class="title--white">Web &amp; Native</h2>
									<p data-swiper-parallax="-30%" class="text--white">You can design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality.</p>
									<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">READ MORE</a>
								</div>

							</div>
						</div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>

					<div class="swiper-container-toolbar swiper-toolbar">
						<div class="swiper-pagination-toolbar"></div>
						<div class="swiper-wrapper">
							<div class="swiper-slide toolbar-icon">
								<a href="#" data-panel="right" class="open-panel"><img src="<?= base_url() ?>assets/images/icons/blue/user.png" alt="" title="" /></a>
								<a href="shop.html"><img src="<?= base_url() ?>assets/images/icons/blue/shop.png" alt="" title="" /></a>
								<a href="#" data-popup=".popup-social" class="open-popup"><img src="<?= base_url() ?>assets/images/icons/blue/twitter.png" alt="" title="" /></a>
								<a href="photos.html"><img src="<?= base_url() ?>assets/images/icons/blue/photos.png" alt="" title="" /></a>
								<a href="contact.html"><img src="<?= base_url() ?>assets/images/icons/blue/contact.png" alt="" title="" /></a>
							</div>
							<div class="swiper-slide toolbar-icon">
								<a href="features.html"><img src="<?= base_url() ?>assets/images/icons/blue/features.png" alt="" title="" /></a>
								<a href="music.html"><img src="<?= base_url() ?>assets/images/icons/blue/music.png" alt="" title="" /></a>
								<a href="#" data-popup=".popup-login" class="open-popup"><img src="<?= base_url() ?>assets/images/icons/blue/lock.png" alt="" title="" /></a>
								<a href="videos.html"><img src="<?= base_url() ?>assets/images/icons/blue/video.png" alt="" title="" /></a>
								<a href="tel:12345678"><img src="<?= base_url() ?>assets/images/icons/blue/phone.png" alt="" title="" /></a>
							</div>

						</div>
					</div>


				</div>
			</div>
		</div>



	</div>
</div>