<?php
/**
 * Tag Main File.
 *
 * @package RUFERS
 * @author  Theme Kalia
 * @version 1.0
 */

get_header();
global $wp_query;
$data  = \RUFERS\Includes\Classes\Common::instance()->data( 'tag' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$layout = ( $layout ) ? $layout : 'right';
$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xl-12 col-lg-12 col-sm-12 col-md-12' : 'col-xl-8 col-lg-7';
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>

<?php if ( class_exists( '\Elementor\Plugin' )):?>
	<?php do_action( 'rufers_banner', $data );?>
<?php else:?>
<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url('<?php echo esc_url( $data->get( 'banner' ) ); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <h2><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <ul>
                            <?php echo rufers_the_breadcrumb(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<?php endif;?>

<!--Start Blog Page-->
<section class="blog-page blog-page-one">
    <div class="container">
        <div class="row text-right-rtl">
        	<?php
				if ( $data->get( 'layout' ) == 'left' ) {
					do_action( 'rufers_sidebar', $data );
				}
			?>
            <div class="content-side <?php echo esc_attr( $class ); ?>">
                <div class="blog-items">
                    <div class="thm-unit-test">
                        <?php
                            while ( have_posts() ) :
                                the_post();
                                rufers_template_load( 'templates/blog/blog.php', compact( 'data' ) );
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-12">
                        <div class="styled-pagination clearfix">
                            <?php rufers_the_pagination( $wp_query->max_num_pages );?>
                        </div>
                    </div>
                </div>
                <!--Pagination-->
                
            </div>
        	<?php
				if ( $data->get( 'layout' ) == 'right' ) {
					do_action( 'rufers_sidebar', $data );
				}
			?>
        </div>
    </div>
</section> 
<!--End blog area--> 
<?php
}
get_footer();
