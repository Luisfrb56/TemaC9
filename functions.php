0
/**
 * Register our sidebars and widgetized areas.
 *
 */
function luis_widgets_init() {

	register_sidebar( array(
		'name'          => 'Prueba',
		'id'            => 'Luisfr',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'luis_widgets_init' );
?>