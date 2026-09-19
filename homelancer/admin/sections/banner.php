<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<div class="homelancer-banner section">
	<div class="inner-wrap">
		<p class="section-pill"><?php esc_html_e('Welcome to HomeLancer', 'homelancer'); ?></p>
		<div class="homelancer-spacer xs"></div>
		<h1 class="banner-heading"><?php esc_html_e('Launch your home services or local business website', 'homelancer'); ?> <mark><?php esc_html_e('without starting from scratch', 'homelancer'); ?></mark></h1>

		<ul class="getting-started-timeline">
			<li class="timeline-item complete"><span class="counter"><?php esc_html_e('1', 'homelancer'); ?></span> <?php esc_html_e('Setup', 'homelancer'); ?></li>
			<li class="separator"></li>
			<?php
			$classes   = array();
			$classes[] = 'timeline-item';
			$classes[] = homelancer_is_plugin_activated('cozy-addons/cozy-addons.php') && homelancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && homelancer_is_plugin_activated('advanced-import/advanced-import.php') ? 'complete' : '';
			?>
			<li class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', array_values($classes)))); ?>"><span class="counter"><?php esc_html_e('2', 'homelancer'); ?></span> <?php esc_html_e('Import Starter Site', 'homelancer'); ?></li>
			<li class="separator"></li>
			<li class="timeline-item"><span class="counter"><?php esc_html_e('3', 'homelancer'); ?></span> <?php esc_html_e('Customize', 'homelancer'); ?></li>
			<li class="separator"></li>
			<li class="timeline-item"><span class="counter"><?php esc_html_e('4', 'homelancer'); ?></span> <?php esc_html_e('Launch', 'homelancer'); ?></li>
		</ul>

		<div class="homelancer-spacer sm"></div>

		<?php
		if (! homelancer_is_plugin_activated('cozy-addons/cozy-addons.php') || ! homelancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') || ! homelancer_is_plugin_activated('advanced-import/advanced-import.php')) {
		?>
			<button class="homelancer-install-required-plugins btn btn-primary has-spinner">
				<a><?php esc_html_e('Get Started →', 'homelancer'); ?></a>
				<span class="spinner homelancer-display-none" id="homelancer-admin-spinner"></span>
			</button>
		<?php
		} elseif (homelancer_is_plugin_activated('cozy-addons/cozy-addons.php') && homelancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && homelancer_is_plugin_activated('advanced-import/advanced-import.php')) {
		?>
			<button class="btn btn-primary">
				<a href="<?php echo esc_url(admin_url('themes.php?page=advanced-import')); ?>"><?php esc_html_e('Import Starter Site →', 'homelancer'); ?></a>
			</button>
		<?php
		}
		?>
	</div>
	<figure class="banner-image">
		<img height="330" src="<?php echo esc_url(HOMELANCER_URL . 'admin/images/dashboard-banner.png'); ?>" />
	</figure>
</div>