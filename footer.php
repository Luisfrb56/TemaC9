<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
					<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
			<!-- Lo de abajo agrega el sidebar en el  footer en este caso-->	
			<?php dynamic_sidebar( 'funcion' ); ?>
			<!-- Lo de abajo agrega un menu al footer en este caso-->
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	
			
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
