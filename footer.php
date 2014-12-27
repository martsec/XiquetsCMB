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
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="text-uppercase"><strong>Segueix-nos</strong></p>
					<a target="_blank" title="Facebook" href="https://www.facebook.com/profile.php?id=100006859878705"><img alt="" src=" <?php print get_stylesheet_directory_uri(); ?>/img/facebook.png"></img></a>
					<a target="_blank" title="Twitter" href="https://twitter.com/XiquetsCambrils"><img alt="" src="<?php print get_stylesheet_directory_uri(); ?>/img/twitter.png"></img></a>
					<a target="_blank" title="Youtube" href="https://www.youtube.com/channel/UC9snxbtCS6RGv-ZIPzVkw-w"><img alt="" src="<?php print get_stylesheet_directory_uri(); ?>/img/youtube.png"></img></a>
					<br />
					<a target="_blank" title="Vimeo" href="http://vimeo.com/xiquetsdecambrils"><img alt="" src="<?php print get_stylesheet_directory_uri(); ?>/img/vimeo.png"></img></a>
					<a target="_blank" title="Instagram" href="http://instagram.com/xiquetscambrils"><img alt="" src="<?php print get_stylesheet_directory_uri(); ?>/img/instagram.png"></img></a>
					<a target="_blank" title="RSS" href="https://xiquetsdecambrils.cat/feed"><img alt="" src="<?php print get_stylesheet_directory_uri(); ?>/img/rss.png"></img></a>
				</div>
				<div class="col-md-4 text-center">
					<img alt="Castells patrimoni de la humanitat" src="<?php print get_stylesheet_directory_uri(); ?>/img/patrimoni-castells.png" />
				</div>
				<div class="col-md-4 text-right">
					<p class="text-uppercase"><strong>Contacte i contractació</strong></p>
					<address>
					  <strong>Xiquets de Cambrils</strong><br>
					  Carrer de Sant Plàcid, 18-20<br />
					  Cambrils, 43850<br />
					  <abbr title="Telèfon">T:</abbr> 977269314 <br />
					  <abbr title="Telèfon">T:</abbr> 607084802 <br />
					  xiquetsdecambrils(a)hotmail.com
					</address>
				</div>
			</div>
			<br /> <br />
			<div class="row">
				<div class="col-md-4">
					<p class="text-uppercase"><strong>Segueix-nos a Twitter!</strong></p>
					<a class="twitter-timeline" href="https://twitter.com/XiquetsCambrils" data-widget-id="518522028672815104">Tuits de @XiquetsCambrils</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="col-md-4 text-center">
					<p class="text-uppercase"><strong>Patrocinadors</strong></p>
					<a target="_blank" title="Estrella Damm" href="http://www.estrelladamm.com/"><img width="90" height="90" style="display: block; margin-left: auto; margin-right: auto;" alt="Estrella" src="<?php print get_stylesheet_directory_uri(); ?>/img/Estrella.gif"></img></a>
				</div>
				<div class="col-md-4">
					<p class="text-uppercase"><strong>Els nostres preferits</strong></p>
					<a class="twitter-timeline" href="https://twitter.com/XiquetsCambrils/favorites" data-widget-id="518191979117543425">Tuits preferits de @XiquetsCambrils</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
			<?php dynamic_sidebar( "footer" ); ?>

			<br /> <br />				
			<p class="text-center"><small>
				<a href ="https://vcll.info/" title="Disseny web">Disseny web per VCLL</a>	·	<a href ="https://github.com/vcll/xiquetsCMB" title="Descarregar el tema del Wordpress"> Descàrrega a GitHub</a>	·	Llicència<a rel="license" href="http://www.gnu.org/licenses/gpl-3.0.txt"><img alt=" GPLv3" src="<?php print get_stylesheet_directory_uri(); ?>/img/gplv3-88x31.png" title="Llicència del tema del Wordpress"/></a>	·	<a href ="https://wordpress.org/" title="Utilitzem Wordpress">Wordpress</a>	·	<a href ="https://wordpress.org/" title="Utilitzem Boostrap">Bootstrap</a> 
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