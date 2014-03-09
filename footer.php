<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
global $tlhome;
?>
	</div><!-- #content -->
	<div class="container">
		<footer  class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar('footer-esq-tl') or is_active_sidebar('footer-dre-tl')): ?>	
				<ul class="timeline <?php if($tlhome==1){echo "tl-footer";}elseif($tlhome==2){echo "timeline-nowidget";}else{ echo "timelinesingle";}?>">
	        		<?php dynamic_sidebar( "footer-esq-tl" ); ?>
	        		<?php dynamic_sidebar( "footer-dre-tl" ); ?>
	        	</ul>
	        <?php endif; ?>
	    </footer>
	</div><!-- container -->
<?php wp_footer(); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 20000});
  });
</script>
</body>
</html>