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
                    <?php if($postingan != null) { ?>
                    <?php foreach($postingan as $data) { ?>
                    <li><a href="<?= base_url() ?>uploads/jajanan/<?= $data['foto'] ?>" title="<?= $data['judul'] ?>"><img src="<?= base_url() ?>uploads/jajanan/<?= $data['foto'] ?>" alt="image" /></a></li>
                    <?php } ?>
                    <?php } else { ?>
                      <li>Belum ada postingan</li>
                    <?php } ?>
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