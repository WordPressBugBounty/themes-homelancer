<div class="theme-demos boxed-layout flex-layout flex-center">
	<figure class="featured-image">
		<img height="280" src="<?php echo esc_url(HOMELANCER_URL . 'admin/images/theme-demo.png'); ?>" />
	</figure>
	<div>
		<p class="section-pill"><?php esc_html_e('Theme Demos', 'homelancer'); ?></p>
		<h2 class="section-title">
			<?php esc_html_e('Explore Complete Website Demos', 'homelancer'); ?></h2>

		<div class="homelancer-spacer sm"></div>

		<p><?php esc_html_e('Explore complete HomeLancer website demos—ideal for launching a fresh site with everything included. For a cleaner, more focused setup, Starter Templates are the smarter choice for both new and existing websites. Import just the design you need, without extra content.', 'homelancer'); ?>
		</p>

		<p><strong style="color:var(--homelancer-admin--heading)"><?php esc_html_e('*Note: This feature should only be used with a fresh installation of WordPress.', 'homelancer'); ?></strong></p>

		<div class="homelancer-spacer sm"></div>

		<?php
		if (homelancer_is_plugin_activated('cozy-addons/cozy-addons.php') && homelancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && homelancer_is_plugin_activated('advanced-import/advanced-import.php')) {
		?>
			<button class="btn btn-primary-accent">
				<a
					href="<?php echo esc_url(admin_url('themes.php?page=advanced-import')); ?>"><?php esc_html_e('Import Demo →', 'homelancer'); ?></a>
			</button>
		<?php
		} else {
		?>
			<button id="install-required-plugins" class="btn btn-primary-alt has-spinner">
				<a rel="noopener"><?php esc_html_e('Install & Activate required plugins', 'homelancer'); ?></a>
				<span class="spinner homelancer-display-none" id="homelancer-admin-spinner"></span>
			</button>
		<?php
		}
		?>
	</div>
</div>