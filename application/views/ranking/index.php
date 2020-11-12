<div class="panel-overlay"></div>

<?php $this->load->view('template/left-bar') ?>

<?php $this->load->view('template/right-bar') ?>

<div class="views">

    <div class="view view-main">
        <div class="pages">
            <div data-page="features" class="page">
                <div class="page-content">

                <?php $this->load->view('template/header') ?>

                    <div id="pages_maincontent">

                        <h2 class="page_title">Ranking TOP 10</h2>

                        <div class="page_single layout_fullwidth_padding">

                            <ul class="features_list_detailed">

                                <?php foreach($user as $data){ 
                                    $no = 1;
                                    ?>
                                <li>
                                    <div class="feat_small_icon"><img src="<?= $data['foto'] ? base_url().'uploads/profiles/'.$data['foto'] : base_url().'assets/images/avatar3.jpg' ?>" alt="" title="" /></div>
                                    <div class="feat_small_details">
                                        <h4><a href="<?= base_url('profile/user/'.$data['id_user']) ?>"><?= $no.'. '.$data['nama'].' - '.$data['ranking'].' ('.$data['point'].' Poin) ' ?></a></h4>
                                        <a href="<?= base_url('profile/user/'.$data['id_user']) ?>"><?= $data['tentang'] ?></a>
                                    </div>
                                </li>
                                <?php $no++; } ?>

                            </ul>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>