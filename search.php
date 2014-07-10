<?php get_header(); ?>




<div class="container">
    <ul class="timeline">
    	<li>
    		<div class="timeline-panel">
    			<div class="timeline-body">
    				<h1><?php printf( __( 'Resultats de la cerca per: %s' ), '<span>' . get_search_query() . '</span>'); ?></h1>
					<p> <?php get_search_form(); ?> </p>
					<?php // Blog post query
					global $query_string;

					$query_args = explode("&", $query_string);
					$search_query = array();

					foreach($query_args as $key => $string) {
						$query_split = explode("=", $string);
						$search_query[$query_split[0]] = urldecode($query_split[1]);
					} // foreach
					$search = new WP_Query($search_query); 
					global $wp_query;
					$total_results = $wp_query->found_posts;
					?>


					<h3 class="text-muted">Hem trobat <? echo $total_results; ?> resultats.</h3><br />
				</div>
			</div>
		</li>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<li <?php tlinverted(); ?> >
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="Publicat el <?php the_time('j \d\e\ F \d\e\ Y'); ?>" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              	<?php if ( has_post_format( 'image' )){ ?>
              		<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php	if ( has_post_thumbnail() ) the_post_thumbnail('large', array('class' => 'img-responsive img-destacada')); ?></a>
              		<?php }else{
              			if ( has_post_thumbnail() ) the_post_thumbnail('timeline', array('class' => 'img-responsive img-destacada'));
              		}?>  
            </div>
            <?php if (has_post_format( 'image' )){ }else{?>
            <div class="timeline-body">
            	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3 class="timeline-title"><?php the_title();?></h3></a>
              	<?php my_excerpt(60); ?>
            </div>
            <?php } ?>
            
            <div class="timeline-footer">
                <?php if ( is_user_logged_in() ) {?>
                    <a href="<?php print get_edit_post_link();?>"><button type="button" class="btn btn-danger pull-right">
			        <span class="glyphicon glyphicon-edit"></span> Edita </button></a>
			    <?php } ?>
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-share"></i> Comparteix <span class="caret"></span><span class="sr-only"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"> Facebook</a></li>
                        <li><a href="https://twitter.com/intent/tweet?text=<?php the_title();?>, <?php urlencode(the_permalink());?> Via @XiquetsCambrils" target="_blank"> Twitter</a></li>
                    </ul>
                </div>
            </div>
          </div>
        </li>
    <?php endwhile; endif; ?>

        
        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>




<?php get_footer(); ?>