<?php
/**
 * Header-v2 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if (! defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>
<div class="fusion-header-sticky-height"></div>
<div class="fusion-header">
	<div class="fusion-row">
		<?php avada_logo(); ?>
		<?php avada_main_menu(); ?>
		<ul class="header-icon-list">
			<li class="header-icon-item">
				<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_twitter.png" alt="twitter" class="header-icon-twitter"></a>
			</li>
			<li class="header-icon-item">
				<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_fb.png" alt="facebook" class="header-icon-facebook"></a>
			</li>
			<li class="header-icon-item">
				<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_blog.png" alt="blog" class="header-icon-blog"></a>
			</li>
			<li class="header-icon-item">
				<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_youtube.png" alt="youtube" class="header-icon-youtube"></a>
			</li>
		</ul>
		<?php if ('flyout' === Avada()->settings->get('mobile_menu_design')) : ?>
			</div>
		<?php endif; ?>
	</div>
</div>
