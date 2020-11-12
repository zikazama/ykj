<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

  <div class="view view-main">
    <div class="pages">
      <div data-page="photos" class="page">
        <div class="page-content">

          <?php $this->load->view('template/header') ?>


          <div id="pages_maincontent">

            <h2 class="page_title">ALBUM JAJANAN</h2>

            <div class="page_single layout_fullwidth">




              <div class="tabs tabs--photos">

                <input type="radio" name="tabs" class="tabradio" id="tabone" checked="checked">
                <label class="tablabel tablabel--13" for="tabone"><?= $user['nama'] ?></label>
                <div class="tab">
                  <ul id="photoslist" class="photo_gallery_13">
                    <li><a href="<?= base_url() ?>assets/images/photos/photo1.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo1.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo2.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo2.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo3.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo3.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo4.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo4.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo5.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo5.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo6.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo6.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo7.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo7.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo8.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo8.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo9.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo9.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo10.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo10.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo11.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo11.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo12.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo12.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo13.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo13.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo14.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo14.jpg" alt="image" /></a></li>
                    <li><a href="<?= base_url() ?>assets/images/photos/photo15.jpg" title="Photo title"><img src="<?= base_url() ?>assets/images/photos/photo15.jpg" alt="image" /></a></li>
                    <div class="clearleft"></div>
                  </ul>
                </div>

                


              </div>



            </div>




            <div class="clearleft"></div>
          </div>


        </div>
      </div>
    </div>

  </div>
</div>