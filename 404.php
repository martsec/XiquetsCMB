<?php
/**
 * The Template for displaying all single posts.
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
	        
			<li>
		        <?php tlcolor(); ?>
	        	<div class="timeline-panel">

		            	<div class="timeline-heading">
		            		<h1 class="timeline-title">404 Pàgina no trobada</h1>
		            	</div>
		           		<div class="timeline-body">
		    	   			<p> Ups! No hem trobat la pàgina que estaves buscant. Potser si vens a algun assaig la trobaràs.</p>
		    	   			<p> O ho pots tornar a buscar. </p>
		    	   			<p><?php get_search_form(); ?></p>
	 					</div>
	       		</div>
	        </li>

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