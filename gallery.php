<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Galeria
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
get_header(); ?>
	<div class="container">

		<ul class="timeline timeline-nowidget">	        
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
		        <?php tlcolor(); ?>
	        	<div class="timeline-panel timeline-inverted">
	        		<div class="timeline-heading">
		            	<h1 class="timeline-title"><?php the_title();?></h1>
		            </div>

		        </div>

		        <div class="timeline-panel timeline-inverted">
	        		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="timeline-body">
		    	   			








		    	   			
		    	   			
		    	   			<hr>
		    	   			<div class="btn-group dropup pull-right">
		                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		                        <i class="glyphicon glyphicon-share"></i> Comparteix <span class="caret"></span><span class="sr-only"></span>
		                      </button>
		                      <ul class="dropdown-menu">
		                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank"><span class="badge pull-right"><?php $url = get_permalink( $post_id ); echo get_likes("$url"); ?></span> Facebook</a></li>
		                        <li><a href="https://twitter.com/intent/tweet?text=<?php the_title();?>, <?php urlencode(the_permalink());?> Via @XiquetsCambrils" target="_blank"><span class="badge pull-right"><?php $url = get_permalink( $post_id ); echo get_tweets("$url"); ?></span> Twitter</a></li>
		                      </ul>
		                    </div>
		    	   			<?php if ( is_user_logged_in() ) {?>
			            		<a href="<?php print get_edit_post_link();?>"><button type="button" class="btn btn-primary">
			       		    		<span class="glyphicon glyphicon-edit"></span> Edita
			            		</button></a>
			            	<?php } ?>
			            	<p></p>
		           		</div>
		           	</article>
	       		</div>
	        </li>
	        <?php endwhile; // end of the loop. ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ): ?>
			<li>
	        	<div class="timeline-panel">
	        		<div class="timeline-body">
							<?php comments_template(); ?>
					</div>
	        	</div>
	        </li>
	    	<?php endif; ?>
		</ul>
		
	</div><!-- .container -->
<?php $tlhome=2; //Per al footer ?>
<?php get_footer(); ?>
