<?php
/**
 * Footer Template  File
 *
 * @package RUFERS
 * @author  Theme Kalia
 * @version 1.0
 */

$options = rufers_WSH()->option();
$bg_img_4    = $options->get( 'bg_image_4' );
$bg_img_4    = rufers_set( $bg_img_4, 'url', RUFERS_URI . 'assets/images/background/bg-16.jpg' );
$allowed_html = wp_kses_allowed_html( 'post' );
?>

	<!-- Main Footer -->
    <footer class="main-footer style-five" style="background-image: url(<?php echo esc_url($bg_img_4);?>);">
        <?php if ( is_active_sidebar( 'footer-sidebar-5' ) ) { ?>
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar-5' ); ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row m-0 justify-content-between">
                    <div class="copyright"><?php echo wp_kses( $options->get( 'copyright_text5', '<a href="#">© 2020 Rufers</a> Consultancy, All Rights Reserved.' ), $allowed_html ); ?></div>
                    <?php if($options->get( 'footer_menu_5' )):?>
                    <ul class="menu">
                        <?php echo wp_kses( $options->get( 'footer_menu_5'), $allowed_html ); ?>
                    </ul>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target style-two" data-target="html"><span class="flaticon-right-arrow"></span></div>