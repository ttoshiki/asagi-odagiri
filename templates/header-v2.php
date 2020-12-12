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
				<a href="https://twitter.com/asagiod"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_twitter.png" alt="twitter" class="header-icon-twitter"></a>
			</li>
			<li class="header-icon-item">
				<a href="https://www.facebook.com/odagiriasagi"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_fb.png" alt="facebook" class="header-icon-facebook"></a>
			</li>
			<li class="header-icon-item">
				<a href="https://ameblo.jp/asagiblog/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_blog.png" alt="blog" class="header-icon-blog"></a>
			</li>
			<li class="header-icon-item">
				<a href="https://www.youtube.com/channel/UCyrgqU5j3E5l33mU3wpzkjg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_youtube.png" alt="youtube" class="header-icon-youtube"></a>
			</li>
		</ul>
		<span class="header__trigger" href="#" id="trigger">
			<span></span>
			<span></span>
			<span></span>
		</span>
		<div class="header__hammenuWrapper">
			<div class="header__hammenuInner">
				<ul class="header__hammenuList">
					<li class="header__hammenuItem"><a href="<?php echo home_url(); ?>">TOP</a></li>
					<li class="header__hammenuItem"><a href="<?php echo home_url('/#prof'); ?>">PROFILE</a></li>
					<li class="header__hammenuItem"><a href="<?php echo home_url('/#book'); ?>">BOOK</a></li>
					<li class="header__hammenuItem"><a href="<?php echo home_url('/#media'); ?>">MEDIA</a></li>
					<li class="header__hammenuItem"><a href="<?php echo home_url('/#sns'); ?>">SNS</a></li>
				</ul>
				<ul class="header-icon-list">
					<li class="header-icon-item">
						<a href="https://twitter.com/asagiod">
							<picture><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_twitter.png" alt="twitter" class="header-icon-twitter"></picture>
							<span class="header-icon-text">Twitter</span>
						</a>
					</li>
					<li class="header-icon-item">
						<a href="https://www.facebook.com/odagiriasagi">
							<picture><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_fb.png" alt="facebook" class="header-icon-facebook"></picture>
							<span class="header-icon-text">Facebook</span>
						</a>
					</li>
					<li class="header-icon-item">
						<a href="https://ameblo.jp/asagiblog/">
							<picture><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_blog.png" alt="blog" class="header-icon-blog"></picture>
							<span class="header-icon-text">Blog</span>
						</a>
					</li>
					<li class="header-icon-item">
						<a href="https://www.youtube.com/channel/UCyrgqU5j3E5l33mU3wpzkjg">
							<picture><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon_youtube.png" alt="youtube" class="header-icon-youtube"></picture>
							<span class="header-icon-text">Youtube</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<?php if ('flyout' === Avada()->settings->get('mobile_menu_design')) : ?>
			</div>
		<?php endif; ?>
	</div>
</div>
