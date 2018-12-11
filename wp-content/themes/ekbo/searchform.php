<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Suche', 'dhwpfstart' ); ?>">
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="" class="button">
		</div>
	</div>

</form>