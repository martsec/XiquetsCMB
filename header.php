<!DOCTYPE html>
<html>
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf8" />
		
    <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;
  wp_title( '|', true, 'right' );bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );if ( $site_description && ( is_home() || is_front_page() ) )echo " | $site_description"; ?></title>
    <link rel="icon" type="image/png" href="<?php print get_stylesheet_directory_uri(); ?>/img/ico.png" />
		
<script>
function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}
  loadCSS( "<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" );
  loadCSS( "<?php bloginfo('stylesheet_url');?>" );

function loadJS( src ){"use strict";var ref = window.document.getElementsByTagName( "script" )[ 0 ];var script = window.document.createElement( "script" );script.src = src;ref.parentNode.insertBefore( script, ref );return script;}
  loadJS("https://code.jquery.com/jquery.js");
  loadJS("<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js");
  loadJS("<?php bloginfo('template_directory'); ?>/js/timeline.js");
</script>    
		<?php wp_head(); ?>
		
    
  </head>
 
  <body <?php body_class($class); ?>>
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=202993516443772&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="carousel-inner">
    <div id="background-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
<!--            <div class="active item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons1.jpg)"></div>
            <div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons2.jpg)"></div>
            <div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons3.jpg)"></div>
            <div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons4.jpg)"></div>
            <div class="item" style="background-image:url(<?php print get_stylesheet_directory_uri(); ?>/img/fons5.jpg)"></div> -->
            <?php // Blog post query
            query_posts( array( 'post_type' => 'post', 'showposts'=>5, 'cat=14') );
            $i = 0;
            if (have_posts()) : while ( have_posts() ) : the_post(); ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <div class="item <?php if($i==0) echo 'active'; ?>" style="background-image:url(<?php echo $image[0]; ?>)">></div>
            <?php $i=1; endwhile; endif; ?>

      </div>
    </div>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><div class="logo"></div></a>

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
   
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
       <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div id="main-container" class="container">
    
    
    
    	
    	
