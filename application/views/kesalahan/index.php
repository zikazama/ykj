<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">

        <div class="pages">
            <div data-page="about" class="page">
                <div class="page-content">

                
                <?php if($this->session->userdata('nama') != null) { $this->load->view('template/header'); } ?>


                    <div id="pages_maincontent">

                        <h2 class="page_title">KESALAHAN</h2>

                       

                        <div class="page_single layout_fullwidth_padding">

                            <blockquote>
                               Maaf halaman yang anda maksud tidak ditemukan silahkan klik <a href="<?= base_url() ?>" style="color:blue">Kembali</a>.
                            </blockquote>


                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>