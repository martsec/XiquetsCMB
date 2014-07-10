<?php
/**
 * The Template for displaying all single posts.
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
get_header(); ?>
	<div class="container">

		<ul class="timeline timeline-single">
			<li>
		        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="Publicat el <?php the_time('j \d\e\ F \d\e\ Y'); ?>" id=""></i></a></div>
	        	<div class="timeline-panel">
	        		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        			<div class="timeline-heading">
              				
            			</div>
            			<div class="timeline-body">
            				<h4 class="timeline-title">Error 404 Pàgina no trobada</h4>
            				<p>No hem pogut localitzar la pàgina que estaves buscant!</p>
            				<p>Potser pots venir a algun assaig i preguntar, que no mosseguem. I si no, torna a buscar:</p>
            				<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group" >
									<input type="text" class="search-field form-control" placeholder="Busca al web" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default" value="submit "><i class="glyphicon glyphicon-search"></i></button>
									</span>
								</div>
							</form>
		    	   		</div>
		           	</article>
	       		</div>
	        </li>

	        <?php if (is_dynamic_sidebar('blog')): ?>
	        <?php dynamic_sidebar('blog'); ?>
	        <?php endif; ?>

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