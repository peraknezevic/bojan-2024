<?php

if (!defined('ABSPATH')) exit;


// conditional parent/child styles
function shapeSpace_conditional_styles() {
	
	wp_enqueue_style('blank-theme', get_stylesheet_uri(), array(), null);
    
}

add_theme_support('post-thumbnails');

function excludeCat($query) {
if ( $query->is_home ) {
$query->set('cat', '-2, -1');
}
return $query;
}
add_filter('pre_get_posts', 'excludeCat');

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  array_pop($excerpt);
	  $excerpt = implode(" ",$excerpt).'...';
	} else {
	  $excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
  }
   
function content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
	  array_pop($content);
	  $content = implode(" ",$content).'...';
	} else {
	  $content = implode(" ",$content);
	}	
	$content = preg_replace('/[.+]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]>', $content);
	return $content;
  }
  
function shapeSpace_frontend_scripts() {
	shapeSpace_conditional_styles();
	wp_enqueue_script('blank-theme', get_template_directory_uri() .'/js/blank.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_frontend_scripts');

function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function ah_share_buttons() {
?>
<div class="share">
	Podeli: 
	<a class="icon" title="Podeli na Facebook-u" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>" target="blank" rel="nofollow"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
	<a class="icon" title="Podeli na X-u" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo urlencode(get_permalink()) ?>" target="blank" rel="nofollow"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"/></svg></a>
</div>
<?php }

?>
