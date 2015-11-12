<?php
/**
 * Search form template
 *
 * @package themeHandle
 */
?>
<form method="get" id="searchform" class="navbar-form navbar-left" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">

			<input type="text" class="form-control" name="s" id="s" placeholder="" />
			<span class="input-group-btn">
				<input type="submit" class="submit btn btn-default" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Go!', 'greather-than' ); ?>" />
			</span>
	</div><!-- /input-group -->
</form>