<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

    <div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<div class="footer-menus">

					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => 'footer-menu',
							'fallback_cb'     => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'social',
							'container_class' => 'social-menu',
							'fallback_cb'     => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

				</div>

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

	</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
