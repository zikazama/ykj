<div class="panel panel-right panel-reveal">
	<div class="user_login_info">

		<div class="user_thumb">

			<div class="user_details">
				<p>Welcome, <span><?= $this->session->userdata('nama') ?></span></p>
			</div>
			<div class="user_avatar"><img src="<?= base_url() ?>assets/images/avatar3.jpg" alt="" title="" /></div>
		</div>

		<nav class="user-nav">
			<ul>
				<li><a href="<?= base_url('setting') ?>"><img src="<?= base_url() ?>assets/images/icons/gray/settings.png" alt="" title="" /><span>Pengaturan Akun</span></a></li>
				<li><a href="<?= base_url('setting/password') ?>"><img src="<?= base_url() ?>assets/images/icons/gray/lock.png" alt="" title="" /><span>Pengaturan Password</span></a></li>
				<li><a href="<?= base_url('profile') ?>"><img src="<?= base_url() ?>assets/images/icons/gray/briefcase.png" alt="" title="" /><span>Profile</span></a></li>
				<li><a href="features.html"><img src="<?= base_url() ?>assets/images/icons/gray/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
				<li><a href="<?= base_url('favorite') ?>"><img src="<?= base_url() ?>assets/images/icons/gray/love.png" alt="" title="" /><span>Favorite Ku</span></a></li>
				<li><a href="<?= base_url('login/aksi_logout') ?>"><img src="<?= base_url() ?>assets/images/icons/gray/lock.png" alt="" title="" /><span>Logout</span></a></li>
			</ul>
		</nav>
	</div>
</div>