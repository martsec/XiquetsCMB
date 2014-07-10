<?php
/**
 * The Template for displaying all single posts.
 * Template Name: No sidebar
 * Description: Plantilla sense sidebar
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
get_header(); ?>
	<div class="container">

		<ul class="timeline timeline-unic">
	      <?php if ( has_post_format( 'image' )):?>
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
		        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="" id=""></i></a></div>
	        	<div class="timeline-panel">
	        		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        			<div class="timeline-heading">
              				<?php if ( has_post_thumbnail() ) the_post_thumbnail('full', array('class' => 'img-responsive'));?>  
            			</div>
            			<div class="timeline-body">
            				<h4 class="timeline-title"><?php the_title();?></h4>
		           			<div class="entry-meta">
							</div><!-- .entry-meta -->
		    	   			<?php the_content(); ?>
		    	   		</div>
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
		           	</article>
	       		</div>
	        </li>
	        <?php endwhile;// end of the loop. ?>
	      <?php else: ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
		        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="" id=""></i></a></div>
	        	<div class="timeline-panel">
	        		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        			<div class="timeline-heading">
              				<?php if ( has_post_thumbnail() ) the_post_thumbnail('timeline', array('class' => 'img-responsive img-destacada'));?>  
            			</div>
            			<div class="timeline-body">
            				<h1 class="timeline-title"><?php the_title();?></h1>
		           			<div class="entry-meta">
							</div><!-- .entry-meta -->
		    	   			<?php the_content(); ?>
		    	   		</div>
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
		           	</article>
	       		</div>
	        </li>
	        <?php endwhile; endif;// end of the loop. ?>
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
	    	<li class="clearfix" style="float: none;"></li>
		</ul>
	</div><!-- .container -->
<?php $tlhome=0; //Per al footer ?>
<?php get_footer(); ?>