<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
get_header(); ?>
	<div class="container">

		<ul class="timeline timelinesingle">
			<?php if (is_dynamic_sidebar('blog')): ?>
				<div class="timeline-sidebar hidden-xs">
					<div class="timeline-panel">
						<div class="timeline-body">
        					<?php dynamic_sidebar('blog'); ?>
        				</div>
        			</div>
	        	</div>
	        <?php endif; ?>
	        
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
		        <?php tlcolor(); ?>
	        	<div class="timeline-panel">
	        		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        			<?php if ( has_post_thumbnail() ){ 
	        				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						   	echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
						   	the_post_thumbnail('tl-post', array('class' => 'img-responsive img-destacada'));
						   	echo '</a>';
						}?>

		            	<div class="timeline-heading">
		            		<h1 class="timeline-title"><?php the_title();?></h1>
		            	</div>
		           		<div class="timeline-body">
		    	   			<?php the_content(); ?>
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

	        <?php if (is_dynamic_sidebar('blog')): ?>
				<li class="visible-xs">
					<div class="timeline-panel">
						<div class="timeline-body">
        					<?php dynamic_sidebar('blog'); ?>
        				</div>
        			</div>
	        	</li>
	        <?php endif; ?>
	      	 
		</ul>
		
	</div><!-- .container -->
<?php $tlhome=0; //Per al footer ?>
<?php get_footer(); ?>
