<?php
/**
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */


/**
 * Enable support for Post Thumbnails on posts and pages
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'timeline', 525, 150, true); //Imatge pel TimeLine True perquè retalli la imatge!!
add_image_size( 'tl-post', 750, 250, true);

//Add menu support and register main menu
if ( function_exists( 'register_nav_menus' ) ) {
   register_nav_menus(
   array(
   'main_menu' => 'Main Menu'
   )
   );
}


// filter the Gravity Forms button type
add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return "<button class='button btn' id='gform_submit_button_{$form["id"]}'><span>Envia</span></button>";
}

/**
 * Register widgetized area and update sidebar with default widgets
 */
function bootstrap_widgets_init() {
	register_sidebar(array(
	    'name' => 'Primer Timeline',
	    'id'   => 'primer-tl',
	    'description'   => 'Widget superior del Timeline',
	    'before_widget' => '<li class="timeline-inverted tlamunt4"><div class="timeline-badge success"><i class="glyphicon glyphicon-calendar"></i></div><div class="timeline-panel %2$s" id="%1$s"><div class="timeline-body">',
	    'after_widget'  => '</div></li>',
	    'before_title'  => '<div class="timeline-heading"><h4 class="timeline-title">',
	    'after_title'   => '</h4></div><div class="timeline-body">'
  	));
	register_sidebar(array(
	    'name' => 'Segon Timeline',
	    'id'   => 'segon-tl',
	    'description'   => 'Segon widget del Timeline',
	    'before_widget' => '<li class=" "><div class="timeline-panel %2$s" id="%1$s"><div class="timeline-body">',
	    'after_widget'  => '</div></div></li>',
	    'before_title'  => '<div class="timeline-heading"><h4 class="timeline-title">',
	    'after_title'   => '</h4></div>'
  	));
  	register_sidebar(array(
	    'name' => 'Tercer Timeline',
	    'id'   => 'tercer-tl',
	    'description'   => 'Tercer widget del Timeline',
	    'before_widget' => '<li class="tlamunt1 "><div class="timeline-panel %2$s" id="%1$s">',
	    'after_widget'  => '</div></div></li>',
	    'before_title'  => '<div class="timeline-heading"><h4 class="timeline-title">',
	    'after_title'   => '</h4></div><div class="timeline-body">'
  	));
  	register_sidebar(array(
	    'name' => 'Footer Esquerra Timeline',
	    'id'   => 'footer-esq-tl',
	    'description'   => 'Peu de pàgina esquerre del Timeline',
	    'before_widget' => '<li><div class="timeline-panel %2$s" id="%1$s">',
	    'after_widget'  => '</div></div></li>',
	    'before_title'  => '<div class="timeline-heading"><h4 class="timeline-title">',
	    'after_title'   => '</h4></div><div class="timeline-body">'
  	));
  	register_sidebar(array(
	    'name' => 'Footer Dreta Timeline',
	    'id'   => 'footer-dre-tl',
	    'description'   => 'Peu de pàgina dret del Timeline',
	    'before_widget' => '<li class="timeline-inverted"><div class="timeline-panel %2$s" id="%1$s">',
	    'after_widget'  => '</div></div></li>',
	    'before_title'  => '<div class="timeline-heading"><h4 class="timeline-title">',
	    'after_title'   => '</h4></div><div class="timeline-body">'
  	));
  	register_sidebar(array(
	    'name' => 'Sidebar Blog',
	    'id'   => 'blog',
	    'description'   => 'Sidebar del Blog',
	    'before_widget' => '',
	    'after_widget'  => '',
	    'before_title'  => '<div class="timeline-heading"><h4 class="timeline-title">',
	    'after_title'   => '</h4></div>'
  	));
}

add_action( 'widgets_init', 'bootstrap_widgets_init' );

add_action( 'after_setup_theme', 'bootstrap_setup' );
 
if ( ! function_exists( 'bootstrap_setup' ) ):
 
function bootstrap_setup(){
	 
	add_action( 'init', 'register_menu' );

	function register_menu(){
		register_nav_menu( 'top-bar', 'Bootstrap Top Menu' );
	}
	 
	class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
		 
		function start_lvl( &$output, $depth ) {
			$indent = str_repeat( "\t", $depth );
			$output	.= "\n$indent<ul class=\"dropdown-menu\">\n";
		}
		 
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			$li_attributes = '';
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = ($args->has_children) ? 'dropdown' : '';
			$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
			$classes[] = 'menu-item-' . $item->ID;			 
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = ' class="' . esc_attr( $class_names ) . '"';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
			$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
		 
		function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

			if ( !$element )
			return;

			$id_field = $this->db_fields['id'];
			 
			//display this element
			if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
			else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'start_el'), $cb_args);
			 
			$id = $element->$id_field;
			 
			// descend only when the depth is right and there are childrens for this element
			if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) { 
				foreach( $children_elements[ $id ] as $child ){
				 
					if ( !isset($newlevel) ) {
						$newlevel = true;
						//start the child delimiter
						$cb_args = array_merge( array(&$output, $depth), $args);
						call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
					}
					$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
				}
				unset( $children_elements[ $id ] );
			}
			if ( isset($newlevel) && $newlevel ){
				//end the child delimiter
				$cb_args = array_merge( array(&$output, $depth), $args);
				call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
			}
			//end this element
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'end_el'), $cb_args);
		}

	}
 
}
 
endif;

/**
 * Utilitzem aquest exerpt per mostrar les paraules que vulguem dels posts
 * Funcionament: my_exerpt(100) sent 100 en número que vulguem
 */
function my_excerpt($excerpt_length = 55, $id = false, $echo = true) {
         
    $text = '';
   
          if($id) {
                $the_post = & get_post( $my_id = $id );
                $text = ($the_post->post_excerpt) ? $the_post->post_excerpt : $the_post->post_content;
          } else {
                global $post;
                $text = ($post->post_excerpt) ? $post->post_excerpt : get_the_content('');
    }
         
                $text = strip_shortcodes( $text );
                $text = apply_filters('the_content', $text);
                $text = str_replace(']]>', ']]&gt;', $text);
          $text = strip_tags($text);
       
                $excerpt_more = ' ' . ' [...]';
                $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
                if ( count($words) > $excerpt_length ) {
                        array_pop($words);
                        $text = implode(' ', $words);
                        $text = $text . $excerpt_more;
                } else {
                        $text = implode(' ', $words);
                }
        if($echo)
  echo apply_filters('the_content', $text);
        else
        return $text;
}

#######################################################################
#				PHP Social Share Count Class
#	Script Url: http://toolspot.org/script-to-get-shared-count.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
class shareCount {
	private $url,$timeout;
	function __construct($url,$timeout=10) {
		$this->url=rawurlencode($url);
		$this->timeout=$timeout;
	}
	function get_tweets() { 
		$json_string = $this->file_get_contents_curl('http://urls.api.twitter.com/1/urls/count.json?url=' . $this->url);
		$json = json_decode($json_string, true);
		return isset($json['count'])?intval($json['count']):0;
	}
	function get_linkedin() { 
		$json_string = $this->file_get_contents_curl("http://www.linkedin.com/countserv/count/share?url=$this->url&format=json");
		$json = json_decode($json_string, true);
		return isset($json['count'])?intval($json['count']):0;
	}
	function get_fb() {
		$json_string = $this->file_get_contents_curl('http://api.facebook.com/restserver.php?method=links.getStats&format=json&urls='.$this->url);
		$json = json_decode($json_string, true);
	return isset($json[0]['total_count'])?intval($json[0]['total_count']):0;
	}
	function get_plusones()  {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"'.rawurldecode($this->url).'","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		$curl_results = curl_exec ($curl);
		curl_close ($curl);
		$json = json_decode($curl_results, true);
		return isset($json[0]['result']['metadata']['globalCounts']['count'])?intval( $json[0]['result']['metadata']['globalCounts']['count'] ):0;
	}
	function get_stumble() {
		$json_string = $this->file_get_contents_curl('http://www.stumbleupon.com/services/1.01/badge.getinfo?url='.$this->url);
		$json = json_decode($json_string, true);
		return isset($json['result']['views'])?intval($json['result']['views']):0;
	}
	function get_delicious() {
		$json_string = $this->file_get_contents_curl('http://feeds.delicious.com/v2/json/urlinfo/data?url='.$this->url);
		$json = json_decode($json_string, true);
		return isset($json[0]['total_posts'])?intval($json[0]['total_posts']):0;
	}
	function get_pinterest() {
		$return_data = $this->file_get_contents_curl('http://api.pinterest.com/v1/urls/count.json?url='.$this->url);
		$json_string = preg_replace('/^receiveCount\((.*)\)$/', "\\1", $return_data);
		$json = json_decode($json_string, true);
		return isset($json['count'])?intval($json['count']):0;
	}
	private function file_get_contents_curl($url){
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
		$cont = curl_exec($ch);
		if(curl_error($ch)){
			die(curl_error($ch));
		}
		return $cont;
	}
}
########################################################################
//Fix per evitar que la barra d'administració del wordpress tapi la de navegació
add_action('wp_head', 'mbe_wp_head');
function mbe_wp_head(){
    echo '<style>'.PHP_EOL;
    echo 'body{ padding-top: 40px !important; }'.PHP_EOL;
    // Using custom CSS class name.
    echo 'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    // Using WordPress default CSS class name.
    echo 'body.logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    echo '</style>'.PHP_EOL;
}