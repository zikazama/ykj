<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">
        <div class="pages">
            <div data-page="form" class="page">
                <div class="page-content">

                   <?php $this->load->view('template/header') ?>

                    <div id="pages_maincontent">

                        <h2 class="page_title">FORM SETTING</h2>
                        <?php if ($this->session->flashdata('pesan_sukses') != null) { ?>
                            <h6 style="text-align: center;color:green"><?= $this->session->flashdata('pesan_sukses') ?></h6>
                        <?php } ?>
                        <?php if ($this->session->flashdata('pesan_gagal') != null) { ?>
                            <h6 style="text-align: center;color:red"><?= $this->session->flashdata('pesan_gagal') ?></h6>
                        <?php } ?>
                        <div class="page_single layout_fullwidth_padding">

                            <div class="contactform">
                                <form class="" id="CustomForm" method="post" action="<?= base_url('setting/aksi_ubah_akun') ?>" enctype="multipart/form-data">
                                    <div class="form_row">
                                        <label>Nama:</label>
                                        <input type="text" name="nama" value="<?= $user['nama'] ?>" class="form_input" />
                                    </div>

                                    <div class="form_row">
                                        <label>Email:</label>
                                        <input type="text" name="email" value="<?= $user['email'] ?>" class="form_input required email" />
                                    </div>

                                    <div class="form_row">
                                        <label>Tentang Saya:</label>
                                        <input type="text" name="tentang" value="<?= $user['tentang'] ?>" class="form_input required email" />
                                    </div>

                                    <div class="form_row">
                                        <div style="margin:auto"><img style="margin: auto;" src="<?= $user['foto'] ? base_url().'uploads/profiles/'.$user['foto'] : base_url().'assets/images/avatar3.jpg' ?>" alt="" title="" /></div>
                                        <label>Foto:</label>
                                        <input type="file" name="foto" value="" class="form_input required foto" />
                                    </div>

                                    <input type="submit" name="submit" class="form_submit" id="submit" value="Perbarui Akun" />
                                </form>
                            </div>



                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</div>