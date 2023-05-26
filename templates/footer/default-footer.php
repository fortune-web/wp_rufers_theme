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

$footer_logo_img    = $options->get( 'footer_logo_image' );
$footer_logo_img   = rufers_set( $footer_logo_img, 'url', RUFERS_URI . 'assets/images/footer/footer-logo.png' );

?>

    <!--Start footer area -->
    <footer class="footer-area">
    	<?php if($options->get( 'show_footer_top_v1' )){ ?>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer-top__content">
                            <div class="left-box">
                                <?php if($footer_logo_img){ ?>
                                <div class="footer-logo">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($footer_logo_img);?>" alt="<?php esc_attr_e('Awesome Image', 'rufers'); ?>"></a>
                                </div>
                                <?php } ?>
                                <div class="title">
                                    <h3><?php echo wp_kses( $options->get( 'cta_title'), true ); ?></h3>
                                    <p><?php echo wp_kses( $options->get( 'cta_text'), true ); ?></p>
                                </div>
                            </div>
                            <div class="right-box">
                                <?php if($options->get( 'cta_btn_title')){ ?>
                                <a class="btn-one one" href="<?php echo esc_url( $options->get( 'cta_btn_link')); ?>">
                                    <span class="txt"><?php echo wp_kses( $options->get( 'cta_btn_title'), true); ?></span>
                                </a>
                                <?php } ?>
                                <?php if($options->get( 'cta_phone_no')){ ?>
                                <a class="btn-one two" href="tel:<?php echo esc_attr( $options->get( 'cta_phone_no')); ?>">
                                    <span class="flaticon-headphone"></span><span class="txt"><?php echo wp_kses( $options->get( 'cta_phone_no'), true); ?></span>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    	<?php } ?>
        
    	<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
        <!--Start Footer-->
        <div class="footer">
            <div class="container">
                <div class="row text-right-rtl">
    				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            </div>
        </div>
        <!--End Footer-->
    	<?php } ?>  
        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-inner">
                    <div class="copyright">
                        <p><?php echo wp_kses( $options->get( 'copyright_text', 'Copyright &copy; 2021<a href="#"> Rufers.</a> All Rights Reserved.' ), true ); ?></p>
                    </div>
                    <?php if($options->get( 'footer_menu' )){ ?>
                    <div class="footer-menu">
                        <ul class="footer-nav">
                            <?php echo wp_kses( $options->get( 'footer_menu'), true ); ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    
    </footer>
    <!--End footer area-->
    
	<button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>
	
</div>
<!--End pagewrapper-->