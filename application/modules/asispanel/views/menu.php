<?php $uri3 = $this->uri->segment(3); ?>
<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try {
			ace.settings.loadState('main-container')
		} catch (e) {}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try {
				ace.settings.loadState('sidebar')
			} catch (e) {}
		</script>


		<ul class="nav nav-list">
			<li class="">
				<a href="<?php echo base_url().$app; ?>">
					<i class="menu-icon fa fa-home"></i>
					<span class="menu-text"> Beranda </span>
				</a>
				<b class="arrow"></b>
			</li>
			<li class="<?php if($uri3 == 'user') echo 'active'; ?>">
				<a href="<?php echo base_url().$app; ?>master/user">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text"> Master User </span>
				</a>
				<b class="arrow"></b>
			</li>

			<li class="<?php if($uri3 == 'jabatan') echo 'active'; ?>">
				<a href="<?php echo base_url().$app; ?>master/jabatan">
					<i class="menu-icon fa fa-bookmark"></i>
					<span class="menu-text"> Master Jabatan </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="<?php if($uri3 == 'sekolah') echo 'active'; ?>">
				<a href="<?php echo base_url().$app; ?>master/sekolah">
					<i class="menu-icon fa fa-bank"></i>
					<span class="menu-text"> Identitas Sekolah </span>
				</a>
				<b class="arrow"></b>
			</li>



		</ul>
		<!-- /.nav-list -->

		<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
			<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content-inner">

			<div class="page-content">