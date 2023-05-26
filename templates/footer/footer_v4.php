<?php
/**
 * Footer Template  File
 *
 * @package RUFERS
 * @author  Theme Kalia
 * @version 1.0
 */

$options = rufers_WSH()->option();
$bg_img_3   = $options->get( 'bg_image_3' );
$bg_img_3    = rufers_set( $bg_img_3, 'url', RUFERS_URI . 'assets/images/shape/pattern-14.png' );
$allowed_html = wp_kses_allowed_html( 'post' );
?>

	<!-- Main Footer -->
    <footer class="main-footer style-four">
        <?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) { ?>
        <div class="pattern" style="background-image: url(<?php echo esc_url($bg_img_3);?>);"></div>
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
                </div>
            </div>
        </div> 
        <?php } ?>    
        <!-- Footer Bottom -->
        <div class="footer-bottom-two">
            <div class="auto-container">
                <div class="row m-0 justify-content-between">
                    <?php if($options->get( 'footer_menu_4' )):?>
                    <ul class="menu">
                        <?php echo wp_kses( $options->get( 'footer_menu_4'), $allowed_html ); ?>
                    </ul>
                    <?php endif;?>
                    <div class="scroll-to-top-two scroll-to-target" data-target="html"><i class="flaticon-backward"></i><?php esc_html_e('Get back to home', 'rufers'); ?></div>
                </div>                    
            </div>
        </div>
    </footer>
	
</div>
<!--End pagewrapper-->