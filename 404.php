<?php
/**
 * 404 page file
 *
 * @package    WordPress
 * @subpackage Vcamp
 * @author     Template Path <admin@template_path.com>
 * @version    1.0
 */

$allowed_html = wp_kses_allowed_html( 'post' );

$error_img   = $options->get( 'error_image' );
$error_img   = rufers_set( $error_img, 'url', RUFERS_URI . 'assets/images/shape/shape-1.png' );

?>
<?php get_header('');
$data = \RUFERS\Includes\Classes\Common::instance()->data( '404' )->get();
do_action( 'rufers_banner', $data );
$options = rufers_WSH()->option();
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
	
	?>
       
    <!--Start Error Page Area-->
    <section class="error-page-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-content text-center">
                        <?php if($error_img){ ?>
                        <div class="shape1 wow slideInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <img class="paroller" src="<?php echo esc_url($error_img); ?>" alt="<?php esc_attr_e('Awesome Image', 'rufers'); ?>">
                        </div>
                        <?php } ?>
                        
                        <div class="big-title wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <h2>
							<?php 
								if( $options->get( '404_page_title' ) ){
									echo wp_kses( $options->get( '404_page_title' ), true );
								}else{
									esc_html_e( 'Oh...ho...', 'rufers' );
								}
							?>
                            </h2>
                            <div class="inner-shape wow zoomIn" data-wow-delay="200ms" data-wow-duration="4500ms">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shape/shape-2.png" alt="<?php esc_attr_e('Awesome Image', 'rufers'); ?>">
                            </div>
                        </div>
                        <div class="title wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <h2>
                           	<?php 
								if( $options->get( '404_page_main_title' ) ){
									echo wp_kses( $options->get( '404_page_main_title' ), true );
								}else{
									esc_html_e( 'Sorry, Something Went Wrong.', 'rufers' );
								}
							?>
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                           	<?php 
								if( $options->get( '404_page_text' ) ){
									echo wp_kses( $options->get( '404_page_text' ), true );
								}else{
									esc_html_e( 'The page you are looking for was moved, removed, renamed or never existed.', 'rufers' );
								}
							?>
                            </p>
                        </div>
						<?php if ( $options->get( 'show_search_form', true ) ) : ?>
                        <div class="error-page-search-box">
                            <form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get"">
                                <input name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Search ...', 'vcamp' ); ?>" type="text">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <?php endif; ?>
                        <?php if ( $options->get( 'back_home_btn', true ) ) : ?>
                        <div class="btns-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <a class="btn-one" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <span class="txt">
								<?php 
									if( $options->get( 'back_home_btn_label' ) ){
										echo wp_kses( $options->get( 'back_home_btn_label' ), true );
									}else{
										esc_html_e( 'Back To Home', 'rufers' );
									}
								?>
                				</span>
                            </a>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page Area-->
                
<?php
}
get_footer(''); ?>
