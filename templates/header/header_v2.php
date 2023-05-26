<?php
$options = rufers_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );

//Light Color Logo Settings
$image_logo = $options->get( 'light_image_normal_logo' );
$logo_dimension = $options->get( 'light_normal_logo_dimension' );

//Sticky Logo Settings
$image_logo3 = $options->get( 'sticky_image_normal_logo' );
$logo_dimension3 = $options->get( 'sticky_normal_logo_dimension' );

//Mobile Logo Settings
$image_logo4 = $options->get( 'mobile_image_normal_logo' );
$logo_dimension4 = $options->get( 'mobile_normal_logo_dimension' );

//Quote Icon Image Settings
$quote_icon_image    = $options->get( 'quote_icon_img' );
$quote_icon_image   = rufers_set( $quote_icon_image, 'url', RUFERS_URI . 'assets/images/icon/quote.png' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>

    
    <!-- Main header-->
    <header class="main-header header-style-two">
		<?php if( $options->get('show_topbar_v2') ){ ?>
        <!--Start Header Top-->
        <div class="header-top-style2">
            <div class="pattern-bg" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pattern/thm-pattern-8.png);"></div>
            <div class="auto-container">
                <div class="outer-box">
					
					<?php if($options->get('header_topbar_menu_v2')){ ?>
                    <div class="header-top-style2__left">
                        <div class="top-menu">
                            <ul>
                                <?php echo wp_kses($options->get('header_topbar_menu_v2'), true);?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                    
					<?php if( $options->get('welcome_text_v2')){ ?>
                    <div class="header-top-style2__middle">
                        <div class="welcome-text welcome-text--style">
                            <p><?php echo wp_kses($options->get('welcome_text_v2'), true);?></p>
                        </div>
                    </div>
					<?php } ?>
                    <?php
						$icons = $options->get( 'header_v2_social_share' );
						if ( ! empty( $icons )) {
					?>
                    <div class="header-top-style2__right">
                        <div class="header-social-link header-social-link--style2">
                            <div class="inner-title">
                                <h4><?php esc_html_e('Follow On:', 'rufers'); ?></h4>
                            </div>
                            <div class="social-link">
                                <ul class="clearfix">
                                    <?php
										foreach ( $icons as $h_icon ) :
										$header_social_icons = json_decode( urldecode( rufers_set( $h_icon, 'data' ) ) );
										if ( rufers_set( $header_social_icons, 'enable' ) == '' ) {
											continue;
										}
										$icon_class = explode( '-', rufers_set( $header_social_icons, 'icon' ) );
									?>
									<li>
										<a href="<?php echo esc_url(rufers_set( $header_social_icons, 'url' )); ?>" style="background-color:<?php echo esc_attr(rufers_set( $header_social_icons, 'background' )); ?>; color: <?php echo esc_attr(rufers_set( $header_social_icons, 'color' )); ?>"><i class="fa <?php echo esc_attr( rufers_set( $header_social_icons, 'icon' ) ); ?>" aria-hidden="true"></i></a>
									</li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
        <!--End Header Top-->
		<?php } ?>
        <!--Start Header-->
        <div class="header-style2">
            <div class="auto-container">
                <div class="outer-box">

                    <div class="header-style2__left">
                        <div class="bg-color"></div>
                        <div class="main-logo-box-2">
                            <?php echo rufers_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
                        </div>
                    </div>

                    <div class="header-style2__right">

                        <div class="header-contact-info-style2 text-right-rtl">
                            <ul>
                                <?php if($options->get('address_v2')){ ?>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="flaticon-placeholder-1"></span>
                                        </div>
                                        <div class="text">
                                            <?php echo wp_kses($options->get('address_v2'), true);?>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                <?php if($options->get('phone_no_v2')){ ?>
                                <li>
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="flaticon-call"></span>
                                        </div>
                                        <div class="text">
                                            <?php echo wp_kses($options->get('phone_no_v2'), true);?>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php if($quote_icon_image and $options->get('quote_icon_link')){ ?>
                        <div class="quote-button-box">
                            <a href="<?php echo esc_url($options->get('quote_icon_link'));?>"><img src="<?php echo esc_url($quote_icon_image);?>" alt="<?php esc_attr_e('Awesome Image', 'rufers'); ?>"></a>
                        </div>
						<?php } ?>
                    </div>

                </div>
            </div>
        </div>
        <!--End header-->

        <!--Start Header Bottom-->
        <div class="header-bottom">
            <div class="auto-container">
                <div class="outer-box">

                    <div class="header-bottom__left">
                        <div class="nav-outer style2 clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu style2 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
									<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
                                        'container_class'=>'navbar-collapse collapse navbar-right',
                                        'menu_class'=>'nav navbar-nav',
                                        'fallback_cb'=>false, 
                                        'items_wrap' => '%3$s', 
                                        'container'=>false,
                                        'depth'=>'3',
                                        'walker'=> new Bootstrap_walker()  
                                    ) ); ?>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>

                    <div class="header-bottom__right">
                        <?php if( $options->get('show_shoping_cart_icon_v2') ){ ?>
						<?php if( function_exists( 'WC' ) ): global $woocommerce; ?>
                        <div class="shopping-cart-box">
                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="flaticon-shopping-bag"></i><span class="count"><?php echo wp_kses( $woocommerce->cart->cart_contents_count, true ); ?></span></a>
                        </div>
                        <?php endif; } ?>
                        
                        <?php if( $options->get('show_search_form_v2') ){ ?>
                        <div class="space-box1"></div>
                        <div class="serach-button-style2 serach-button-style2--instyle2">
                            <?php get_template_part('searchform1'); ?>
                        </div>
                        <?php } ?>
                    </div>


                </div>
            </div>
        </div>
        <!--End Header Bottom-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <div class="img-responsive"><?php echo rufers_logo( $logo_type, $image_logo3, $logo_dimension3, $logo_text, $logo_typography ); ?></div>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><?php echo rufers_logo( $logo_type, $image_logo4, $logo_dimension4, $logo_text, $logo_typography ); ?></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <?php
					$icons = $options->get( 'header_v2_social_share' );
					if ( ! empty( $icons )) {
				?>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <?php
							foreach ( $icons as $h_icon ) :
							$header_social_icons = json_decode( urldecode( rufers_set( $h_icon, 'data' ) ) );
							if ( rufers_set( $header_social_icons, 'enable' ) == '' ) {
								continue;
							}
							$icon_class = explode( '-', rufers_set( $header_social_icons, 'icon' ) );
						?>
						<li>
							<a href="<?php echo esc_url(rufers_set( $header_social_icons, 'url' )); ?>" style="background-color:<?php echo esc_attr(rufers_set( $header_social_icons, 'background' )); ?>; color: <?php echo esc_attr(rufers_set( $header_social_icons, 'color' )); ?>"><span class="fa <?php echo esc_attr( rufers_set( $header_social_icons, 'icon' ) ); ?>" aria-hidden="true"></span></a>
						</li>
						<?php endforeach; ?>
                    </ul>
                </div>
                <?php } ?>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>