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

<div class="sidebar-search-box">
    <form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <input name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Keyword...', 'rufers' ); ?>" type="text">
        <button type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
</div>