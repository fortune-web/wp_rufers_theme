<?php
/**
 * Footer Template  File
 *
 * @package RUFERS
 * @author  Theme Kalia
 * @version 1.0
 */

$options = rufers_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
?>

<!-- Main Footer -->
    <footer class="main-footer">
        <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            </div>
        </div>
        <?php } ?>      
        <!-- Footer Bottom -->
        <?php if($options->get( 'copyright_text6' )):?>
        <div class="auto-container">
            <div class="footer-bottom">
                <div class="row m-0 justify-content-between">
                    <?php if($options->get( 'footer_menu6' )):?>
                    <ul class="menu">
                        <?php echo wp_kses( $options->get( 'footer_menu6'), $allowed_html ); ?>
                    </ul>
                    <?php endif;?>
                    <!--Scroll to top Two-->
                    <div class="scroll-to-top-two scroll-to-target" data-target="html"><i class="flaticon-backward"></i><?php esc_html_e('Get back to home', 'rufers'); ?></div>
                </div>
                <?php
					$icons = $options->get( 'footer_v6_social_share' );
					if ( ! empty( $icons ) ) :
				?>
                <ul class="social-links clearfix">
				<?php
                    foreach ( $icons as $h_icon ) :
                    $header_social_icons = json_decode( urldecode( rufers_set( $h_icon, 'data' ) ) );
                    if ( rufers_set( $header_social_icons, 'enable' ) == '' ) {
                        continue;
                    }
                    $icon_class = explode( '-', rufers_set( $header_social_icons, 'icon' ) );
                    ?>
                    <li><a href="<?php echo esc_url(rufers_set( $header_social_icons, 'url' )); ?>" style="background-color:<?php echo esc_attr(rufers_set( $header_social_icons, 'background' )); ?>; color: <?php echo esc_attr(rufers_set( $header_social_icons, 'color' )); ?>"><span class="fab <?php echo esc_attr( rufers_set( $header_social_icons, 'icon' ) ); ?>"></span></a></li>
                <?php endforeach; ?>
                </ul>
                <?php endif;?>
                <div class="copyright"><?php echo wp_kses( $options->get( 'copyright_text6' ), $allowed_html ); ?></div>
            </div>
        </div>
        <?php endif;?>
    </footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow"></span></div>