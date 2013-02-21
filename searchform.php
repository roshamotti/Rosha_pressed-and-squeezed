<?php
/**
 * The template for displaying search forms in pressed and squeezed
 *
 * @package pressed and squeezed
 * @since pressed and squeezed 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'pressed_and_squeezed' ); ?></label>
		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'pressed_and_squeezed' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'pressed_and_squeezed' ); ?>" />
	</form>
