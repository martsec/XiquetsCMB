<?php
/**
 * The template for displaying Search Results pages.
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
$timelinetype=0; //Per a el footer
get_header(); ?>
<div class="container">
		<ul class="timeline">
			<li>
      			<div class="timeline-panel">
      			<div class="timeline-heading">
					<h1 class="timeline-title"><?php printf( __( 'Resultats per: %s', 'upbootwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		        </div>
		    	</div>
		    </li>
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

		    <li <?php tlinverted(); ?> >
		        <?php tlcolor(); ?>
		        <div class="timeline-panel">
        	      <?php if ( has_post_thumbnail() ) the_post_thumbnail('timeline', array('class' => 'img-responsive img-destacada'));?>
		            <div class="timeline-heading">
		             	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h4 class="timeline-title"><?php the_title();?></h4></a>
		              	<p><small class="text-muted"><span class="glyphicon glyphicon-time"></span> Publicat el <?php the_time('j \d\e\ F \d\e\ Y'); ?></small></p>
		            </div>
		            <div class="timeline-body">
		              	<?php the_excerpt(); print"<br />".$tllloc;?>
                    	<hr>
						<!-- Social Links -->
	                    <div class="btn-group dropup">
	                    	<?php $obj=new shareCount(get_permalink( $post_id ));  ?>
	                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                        <i class="glyphicon glyphicon-share"></i> Comparteix <span class="caret"></span><span class="sr-only"></span>
	                      </button>
	                      <ul class="dropdown-menu">
	                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"><span class="badge pull-right"><?php echo $obj->get_fb();?></span> Facebook</a></li>
	                        <li><a href="https://twitter.com/intent/tweet?text=<?php the_title();?> <?php urlencode(the_permalink());?> Via @XiquetsCambrils" target="_blank"><span class="badge pull-right"><?php echo $obj->get_tweets(); ?></span> Twitter</a></li>
	                      </ul>
	                    </div>
	                    <?php if ( is_user_logged_in() ) {?>
	                      <a href="<?php print get_edit_post_link();?>"><button type="button" class="btn btn-primary">
				       		      <span class="glyphicon glyphicon-edit"></span> Edita </button></a>
				        <?php } ?>
				    </div>
		        </div>
		    </li>
		<?php endwhile; endif; ?>
    </ul>
	</div><!-- .container -->
<?php $tlhome=0; //Per al footer ?>
<?php get_footer(); ?>