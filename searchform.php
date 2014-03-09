<?php
/**
 * The template for displaying search forms in upBootWP
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Buscar &hellip;', 'placeholder', 'upbootwp' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Cerca de:', 'label', 'upbootwp' ); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" value="<?php echo esc_attr_x( 'Cerca', 'submit button', 'upbootwp' ); ?>">Cerca!</button>
		</span>
	</div>
</form>
