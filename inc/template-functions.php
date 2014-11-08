<?php
/**
 * Custom template functions for this theme.
 *
 * @package nsi
 */


/**
 * Register Socail Menu
 */
add_action( 'init', 'social_register_nav_menus' );

function social_register_nav_menus() {
	register_nav_menu( 'social', __( 'Social', 'nsi' ) );
}


/**
 * Register Footer Menu
 */
add_action( 'init', 'footer_register_nav_menus' );

function footer_register_nav_menus() {
	register_nav_menu( 'footer', __( 'Footer', 'nsi' ) );
}


//======================
//fx shortcode
//======================
function custom_button_shortcode( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'link' => 'http://www.nsifood.com/company/contact-us/',
	), $atts );	
	return '<a class="bt-bustom" href="' . esc_attr($a['link']) . '">'. $content .'</a>';
}
add_shortcode( 'custom_button', 'custom_button_shortcode' );


//======================
//fx Menu Nav
//======================

class Menu_With_Description extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span class="sub-item">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</span><span class="sub-description">' . $item->description . '</span>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

//======================
//fx menuicons styles
//======================
function add_menu_icons_styles(){
?>
 
<style>
#menu-posts-home-slider .wp-menu-image:before {
	content: "\f161";
}
#menu-posts-job .wp-menu-image:before {
	content: "\f338";
}
#menu-posts-best-sellers .wp-menu-image:before {
	content: "\f174";
}

#menu-posts-superfood-products .dashicons-admin-post:before,
#menu-posts-freezedried-products .dashicons-admin-post:before,
#menu-posts-nuts-fruits-products .dashicons-admin-post:before
{
	content: "\f511";
}

</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );
