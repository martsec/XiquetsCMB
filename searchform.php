<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="form-control" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="search">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" value="Buscar"><span class="glyphicon glyphicon-search"></span></button>
		</span>
	</div>
</form>