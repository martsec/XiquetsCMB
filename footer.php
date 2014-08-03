<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author VCLL | https://vcll.info
 * @package Xiquets de Cambrils
 */
?>
	</div><!-- #content -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="text-uppercase"><strong>Segueix-nos</strong></p>
					<div class="fb-like-box" data-href="https://www.facebook.com/pages/Xiquets-de-Cambrils/1378489135709376" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
					<a href="https://twitter.com/XiquetsCambrils" class="twitter-follow-button"  data-lang="es" data-show-count = "true" data-size="large">Follow @XiquetsCambrils</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="col-md-6 text-right">
					<p class="text-uppercase"><strong>Contacte i contractació</strong></p>
					<address>
					  <strong>Xiquets de Cambrils</strong><br>
					  Carrer de Sant Plàcid, 18-20<br />
					  Cambrils, 43850<br />
					  <abbr title="Telèfon">T:</abbr> +34 607084802 <br />
					  xdc@xiquetsdecambrils.cat
					</address>
				</div>
			</div>

			<?php dynamic_sidebar( "footer" ); ?>

				
			<p class="text-center"><small>
				<a href ="https://vcll.info/" title="Disseny web">Disseny web per VCLL</a>	·	<a href ="https://github.com/vcll/xiquetsCMB" title="Descarregar el tema del Wordpress"> Descàrrega a GitHub</a>	·	Llicència<a rel="license" href="http://www.gnu.org/licenses/gpl-3.0.txt"><img alt=" GPLv3" src="https://www.gnu.org/graphics/gplv3-88x31.png" title="Llicència del tema del Wordpress"/></a>	·	<a href ="https://wordpress.org/" title="Utilitzem Wordpress">Wordpress</a>	·	<a href ="https://wordpress.org/" title="Utilitzem Boostrap">Bootstrap</a> 
			</small></p>
		</div>
	</footer>



	<?php wp_footer(); ?>

	<script type="text/javascript">
	  $(document).ready(function() {
	    $('.carousel').carousel({interval: 30000});
	  });
	</script>
	</body>
</html>