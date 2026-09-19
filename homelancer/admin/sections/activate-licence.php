<div class="section">
	<h2 class="section-title"><?php esc_html_e( 'Activate Licence', 'homelancer' ); ?></h2>

	<div class="homelancer-spacer sm"></div>
	<?php
	if ( homelancer_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
		if ( homelancer_premium_access() ) {
			?>
	<div class="info-text tone-success has-icon">
		<i class="icon">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="16" height="16" rx="8" fill="#0EB188" />
				<path d="M5.08594 8.83301L6.54427 10.2913L10.9193 5.70801" stroke="white" stroke-linecap="round"
					stroke-linejoin="round" />
			</svg>
		</i>
		<span><?php esc_html_e( 'WooHoo! Pro plan activated. Happy building.', 'homelancer' ); ?></span>
	</div>
			<?php

		} else {
			// Prepare Freemius template variables
			$VARS = array(
				'id'         => cc_fs()->get_id(),
				'slug'       => cc_fs()->get_slug(),
				'public_key' => cc_fs()->get_public_key(),
				'is_plugin'  => true,
				'is_theme'   => false,
			);

			$account_url = menu_page_url( '_cozy_companions-account', false );

			// Render Freemius opt-in screen inline
			ob_start();
			require COZY_ADDONS_PLUGIN_DIR . 'freemius/templates/connect.php';
			echo ob_get_clean();

			if ( strlen( $account_url ) > 0 ) {
				?>
	<div class="account__management">
		<p><?php esc_html_e( 'License key already entered? Manage your account here.', 'homelancer' ); ?></p>
		<a href="<?php echo esc_url( $account_url ); ?>"><?php esc_html_e( 'Manage Account', 'homelancer' ); ?></a>
	</div>
				<?php
			}
		}
	} else {
		$recommended_plugins = array(
			'cozy-addons' => array(
				'name'        => 'Cozy Blocks',
				'description' => 'Your complete website-building toolkit with advanced customization, custom blocks, sections, and templates.',
				'file'        => 'cozy-addons/cozy-addons.php',
			),
		);

		?>
		<p><?php esc_html_e( 'Cozy Blocks is your companion plugin for managing your license, unlocking Pro features, and powering advanced site-building tools — all from one place.', 'homelancer' ); ?></p>
		<div class="cols-grid cols-3">
		<?php
		foreach ( $recommended_plugins as $slug => $plugin_data ) {
			?>
		<div class="plugin-card-layout">
			<figure class="plugin-logo">
				<img src="<?php echo esc_url( HOMELANCER_URL . "admin/images/{$slug}.png" ); ?>" />
			</figure>

			<h3 class="plugin-title"><?php echo esc_html( $plugin_data['name'] ); ?></h3>

			<p><?php echo esc_html( $plugin_data['description'] ); ?></p>

				<?php
					$classes   = array();
					$classes[] = homelancer_is_plugin_installed( $plugin_data['file'] ) && homelancer_is_plugin_activated( $plugin_data['file'] ) ? 'homelancer-disabled' : 'homelancer-install-plugin';
					$classes[] = 'btn';
					$classes[] = homelancer_is_plugin_installed( $plugin_data['file'] ) && homelancer_is_plugin_activated( $plugin_data['file'] ) ? 'btn-secondary' : 'btn-primary';
					$classes[] = 'has-spinner';
					$classes[] = 'is-full-width';
				?>
			<button
				class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', array_values( $classes ) ) ) ); ?>"
				data-plugin-slug="<?php echo esc_attr( $slug ); ?>">
				<a
					href="#getting-started"><?php echo homelancer_is_plugin_installed( $plugin_data['file'] ) && homelancer_is_plugin_activated( $plugin_data['file'] ) ? esc_html__( 'Activated', 'homelancer' ) : esc_html__( 'Install & Activate', 'homelancer' ); ?></a>
				<span class="spinner homelancer-display-none" id="homelancer-admin-spinner"></span>
			</button>
		</div>
			<?php
		}
		?>
		</div>
		<?php
	}
	?>
</div>

<?php
if ( ! homelancer_premium_access() ) {
	?>
<div class="homelancer-spacer"></div>

<div class="section">
	<?php
			require HOMELANCER_DIR . 'admin/sections/refund-banner.php';
	?>
</div>
	<?php
}
?>