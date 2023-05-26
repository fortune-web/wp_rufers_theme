<?php
/**
 * Footer Template  File
 *
 * @package RUFERS
 * @author  Theme Kalia
 * @version 1.0
 */

$options = rufers_WSH()->option();
$bg_img_2    = $options->get( 'footer_bg_img_2' );
$bg_img_2   = rufers_set( $bg_img_2, 'url', RUFERS_URI . 'assets/images/footer/footer-style3-bg.jpg' );
$allowed_html = wp_kses_allowed_html( 'post' );
?>

	<!--Start footer area -->
    <footer class="footer-area footer-area--style3">
		<?php if($options->get( 'show_footer_top_v3' )){ ?>
        <div class="footer-top-style3">
            <div class="pattern-bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pattern/thm-pattern-7.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer-top-style3__content">
                            <div class="top-title text-center">
                                <h2><?php echo wp_kses( $options->get( 'subscribe_form_title'), true ); ?></h2>
                                <p><?php echo wp_kses( $options->get( 'subscribe_form_text'), true ); ?></p>
                            </div>
							<?php if($options->get( 'mailchimp_form_url3')){ ?>
                            <div class="subscribe-form-box1">
                                <div id="subscribe-form" class="default-form1">
									<?php echo do_shortcode( $options->get( 'mailchimp_form_url3')); ?>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>

        <!--Start Footer-->
        <div class="footer-style3">
            <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) { ?>
            <div class="footer-style3-bg" style="background-image: url(<?php echo esc_url($bg_img_2);?>);"></div>
            <div class="container">
                <div class="row text-right-rtl">
					<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                </div>
            </div>
			<?php } ?> 

            <div class="footer-bottom-style3">
                <div class="container">
                    <div class="footer-bottom-style3__content text-center">
                        <div class="copyright">
                            <p><?php echo wp_kses( $options->get( 'copyright_text2', 'Copyright &copy; 2021<a href="#"> Rufers.</a> All Rights Reserved.' ), true ); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End Footer-->
    </footer>
    <!--End footer area-->

    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>
	
</div>
<!--End pagewrapper-->