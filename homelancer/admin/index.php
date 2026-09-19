<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require HOMELANCER_DIR . 'admin/sections/header.php';
?>
<div id="homelancer-dashboard">
	<div id="getting-started" class="tab-content is-active">
		<?php require HOMELANCER_DIR . 'admin/sections/banner.php'; ?>
	
		<div class="homelancer-spacer"></div>
	
		<div class="cols-wrapper">
			<div class="col-item">
				<?php require HOMELANCER_DIR . 'admin/sections/getting-started.php'; ?>
	
				<div class="homelancer-spacer"></div>
	
				<?php require HOMELANCER_DIR . 'admin/sections/theme-demos.php'; ?>
	
			</div>
			<aside class="col-item">
				<?php require HOMELANCER_DIR . 'admin/sections/sidebar.php'; ?>
			</aside>
		</div>
	
		<div class="homelancer-spacer"></div>
	
		<?php
		require HOMELANCER_DIR . 'admin/sections/branding.php';

		if ( ! homelancer_premium_access() ) {
			?>
			<div class="homelancer-spacer"></div>
			<?php
			require HOMELANCER_DIR . 'admin/sections/upsell.php';
		}
		?>
	</div>

	<div id="starter-sites" class="tab-content">
		<div class="cols-wrapper">
			<div class="col-item">
				<?php require HOMELANCER_DIR . 'admin/sections/starter-sites.php'; ?>
			</div>
			<aside class="col-item">
				<?php require HOMELANCER_DIR . 'admin/sections/sidebar.php'; ?>
			</aside>
		</div>
	</div>

	<div id="free-vs-pro" class="tab-content">
		<?php require HOMELANCER_DIR . 'admin/sections/free-vs-pro.php'; ?>
	</div>

	<div id="activate-licence" class="tab-content">
		<?php require HOMELANCER_DIR . 'admin/sections/activate-licence.php'; ?>
	</div>

	<div class="homelancer-spacer"></div>
	
	<?php require HOMELANCER_DIR . 'admin/sections/faq.php'; ?>

	<div class="homelancer-spacer"></div>

	<?php require HOMELANCER_DIR . 'admin/sections/helper-links.php'; ?>
</div>