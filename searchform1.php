<?php
/**
 * Search Form template
 *
 * @package RUFERS
 * @author Theme Kalia
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Search...', 'rufers' ); ?>" required>
    <button type="button"><i class="icon-search"></i></button>
</form>