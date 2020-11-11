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

									<h2 data-swiper-parallax="-100%">Apa itu Yuk Kita Jajan ?</h2>
									<p data-swiper-parallax="-30%">Yuk Kita Jajan adalah platform untuk membagikan info makanan khususnya jajanan dan pedagang kaki lima. </p>
									<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">Lebih Lanjut</a>
								</div>
							</div>

							<div class="swiper-slide" style="background-image:url(<?= base_url() ?>assets/images/slide2.jpg);">

								<div class="slider-caption">

									<h2 data-swiper-parallax="-100%" class="title--white">Upload dan Bagikan Jajananmu Hari Ini dan Dukung UMKM</h2>
									<p data-swiper-parallax="-30%" class="text--white">Dengan membagikan jajanan yang kamu beli hari ini kamu akan mendapatkan point dan sudah mendukung UMKM.</p>
									<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">Lebih Lanjut</a>
								</div>

							</div>
							<div class="swiper-slide" style="background-image:url(<?= base_url() ?>assets/images/slide3.jpg);">

								<div class="slider-caption">

									<h2 data-swiper-parallax="-100%" class="title--white">Bagaimana Cara Membagikan Jajanan ?</h2>
									<p data-swiper-parallax="-30%" class="text--white">Untuk mengetahui caranya silahkan klik lebih lanjut.</p>
									<a href="about.html" class="slider-caption__more" data-swiper-parallax="-60%">Lebih Lanjut</a>
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
								<a href="features.html"><img src="<?= base_url() ?>assets/images/icons/blue/features.png" alt="" title="" /></a>
								<a href="#" data-popup=".popup-social" class="open-popup"><img src="<?= base_url() ?>assets/images/icons/blue/twitter.png" alt="" title="" /></a>
								<a href="photos.html"><img src="<?= base_url() ?>assets/images/icons/blue/photos.png" alt="" title="" /></a>
				
							</div>
							

						</div>
					</div>


				</div>
			</div>
		</div>



	</div>
</div>