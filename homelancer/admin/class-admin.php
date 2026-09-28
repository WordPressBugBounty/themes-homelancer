<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

class HomeLancer_Admin
{


	private static $instance = null;

	private static $dir = HOMELANCER_DIR . 'admin/';
	private static $url = HOMELANCER_URL . 'admin/';

	public static function get_instance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function __construct()
	{
		$this->include_files();

		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));

		add_action('admin_notices', array($this, 'welcome_notice'));

		add_action('admin_menu', array($this, 'register_theme_menu'));
	}

	private function include_files()
	{
		require_once self::$dir . 'includes/class-admin-ajax.php';
		HomeLancer_Ajax::get_instance();
	}

	public function enqueue_admin_assets()
	{
		if (! function_exists('get_current_screen')) {
			return;
		}

		$homelancer_current_screen = get_current_screen();

		$allowed_pages = array(
			'dashboard',
			'themes',
		);

		if ((isset($_GET['page']) && ! empty($_GET['page']) && 'about-homelancer' === $_GET['page']) || in_array($homelancer_current_screen->id, $allowed_pages, true)) {
			wp_enqueue_style('homelancer-admin-style', self::$url . 'css/admin-style.css', array(), HOMELANCER_VERSION, 'all');

			wp_enqueue_script('homelancer-admin-scripts', self::$url . 'js/admin-scripts.js', array('jquery'), HOMELANCER_VERSION, true);
			wp_localize_script(
				'homelancer-admin-scripts',
				'ajaxObj',
				array(
					'ajaxURL'      => admin_url('admin-ajax.php'),
					'welcomeNonce' => wp_create_nonce('homelancer_welcome_nonce'),
					'redirectURL'  => admin_url('themes.php?page=about-homelancer'),
				)
			);
		}
	}

	public function welcome_notice()
	{
		$current_screen  = get_current_screen();
		$allowed_screens = array('dashboard', 'themes');
		if (! in_array($current_screen->id, $allowed_screens, true) || is_network_admin() || ! current_user_can('manage_options') || get_option('homelancer_dismissed_custom_notice')) {
			return;
		}
?>
		<div class="homelancer-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice"
			id="homelancer-welcome-notice">
			<div class="content-holder">
				<div class="notices">
					<figure class="brand-logo">
						<img width="44" height="44" src="<?php echo esc_url(self::$url . 'images/brand_logo.png'); ?>"
							alt="HomeLancer logo" />
					</figure>

					<div>
						<h2 class="notice-heading"><?php esc_html_e('Welcome to HomeLancer! 🚀', 'homelancer'); ?></h2>

						<p><?php esc_html_e('HomeLancer is installed and ready to go. Install the recommended plugins to import Starter Sites, unlock advanced customization, and launch your website faster.', 'homelancer'); ?>
						</p>

						<div class="homelancer-spacer sm"></div>

						<p>
							<i>
								<?php esc_html_e('Recommended Plugins: ✓ Cozy Blocks · ✓ Cozy Essential Addons · ✓ Advanced Import ', 'homelancer'); ?>
							</i>
						</p>

						<div class="homelancer-spacer sm"></div>

						<div class="notice-buttons">
							<?php
							if (homelancer_is_plugin_activated('cozy-addons/cozy-addons.php') && homelancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') && homelancer_is_plugin_activated('advanced-import/advanced-import.php')) {
							?>
								<button class="notice-button">
									<a
										href="<?php echo esc_url(admin_url('site-editor.php')); ?>"><?php esc_html_e('Customize', 'homelancer'); ?></a>
								</button>
								<button class="notice-button notice-button-secondary">
									<a
										href="<?php echo esc_url(admin_url('themes.php?page=about-homelancer')); ?>"><?php esc_html_e('Explore HomeLancer', 'homelancer'); ?></a>
								</button>
							<?php
							} else {
							?>
								<button class="homelancer-install-required-plugins btn notice-button has-spinner">
									<a href="#"><?php esc_html_e('Get Started in a single click →', 'homelancer'); ?></a>
									<span class="spinner homelancer-display-none" id="homelancer-admin-spinner"></span>
								</button>
								<button class="notice-button notice-button-secondary">
									<a
										href="<?php echo esc_url(admin_url('themes.php?page=about-homelancer')); ?>"><?php esc_html_e('Explore HomeLancer', 'homelancer'); ?></a>
								</button>
							<?php
							}
							?>
						</div>
					</div>
				</div>
				<figure class="notice-image">
					<img src="<?php echo esc_url(self::$url . 'images/theme_screen_img.png'); ?>" />
				</figure>
			</div>
		</div>
<?php
	}

	public function register_theme_menu()
	{
		add_theme_page(
			esc_html__('About HomeLancer', 'homelancer'),
			esc_html__('About HomeLancer', 'homelancer'),
			'edit_theme_options',
			'about-homelancer',
			array($this, 'render_admin_dashboard')
		);
	}

	public function render_admin_dashboard()
	{
		require_once self::$dir . 'index.php';
	}
}
