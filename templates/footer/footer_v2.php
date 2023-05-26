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

	<!--Start footer area -->
    <footer class="footer-area footer-area--style2">
		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
        <!--Start Footer-->
        <div class="footer footer--style2">
            <div class="container">
                <div class="row text-right-rtl">
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                </div>
            </div>
        </div>
        <!--End Footer-->
		<?php } ?> 
        <div class="footer-bottom footer-bottom--style2">
            <div class="container">
                <div class="bottom-inner">
                    <div class="copyright">
                        <p><?php echo wp_kses( $options->get( 'copyright_text2', 'Copyright &copy; 2021<a href="#"> Rufers.</a> All Rights Reserved.' ), true ); ?></p>
                    </div>
                    <?php if($options->get( 'footer_menu2' )){ ?>
                    <div class="footer-menu">
                        <ul class="footer-nav">
                            <?php echo wp_kses( $options->get( 'footer_menu2'), true ); ?>
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