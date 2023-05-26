<?php
$options = rufers_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );

//Light Color Logo Settings
$image_logo = $options->get( 'light_image_normal_logo' );
$logo_dimension = $options->get( 'light_normal_logo_dimension' );

//Sidebar Logo Settings
$image_logo2 = $options->get( 'sidebar_image_normal_logo' );
$logo_dimension2 = $options->get( 'sidebar_normal_logo_dimension' );

//Sticky Logo Settings
$image_logo3 = $options->get( 'sticky_image_normal_logo' );
$logo_dimension3 = $options->get( 'sticky_normal_logo_dimension' );

//Mobile Logo Settings
$image_logo4 = $options->get( 'mobile_image_normal_logo' );
$logo_dimension4 = $options->get( 'mobile_normal_logo_dimension' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>
    <?php if( $options->get('show_sidebar_info') ){ ?>   
	<!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget"><?php esc_html_e('X', 'rufers'); ?></a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <?php echo rufers_logo( $logo_type, $image_logo2, $logo_dimension2, $logo_text, $logo_typography ); ?>
                            </div>
                            
							<?php if( $options->get('sidebar_title') || $options->get('sidebar_text')){ ?>
                            <div class="content-box">
                                <h4><?php echo wp_kses($options->get('sidebar_title'), true);?></h4>
                                <div class="inner-text">
                                    <p><?php echo wp_kses($options->get('sidebar_text'), true);?></p>
                                </div>
                            </div>
							<?php } ?>
                            
                            <div class="form-inner">
                                <h4><?php echo wp_kses($options->get('form_title'), true);?></h4>
                                <?php echo do_shortcode($options->get('form_url'));?>
                            </div>

                            <div class="sidebar-contact-info">
                                <?php if($options->get('sidebar_sub_title')){ ?>
                                <h4><?php echo wp_kses($options->get('sidebar_sub_title'), true);?></h4>
								<?php } ?>
                                <ul>
                                    <?php if($options->get('sidebar_address')){ ?>
                                    <li>
                                        <span class="flaticon-pin-1"></span> <?php echo wp_kses($options->get('sidebar_address'), true);?>
                                    </li>
                                    <?php } ?>
                                    <?php if($options->get('sidebar_phone_no')){ ?>
                                    <li>
                                        <span class="flaticon-telephone"></span>
                                        <a href="tel:<?php echo esc_attr($options->get('sidebar_phone_no'));?>"><?php echo wp_kses($options->get('sidebar_phone_no'), true);?></a>
                                    </li>
                                    <?php } ?>
                                    <?php if($options->get('sidebar_email_address')){ ?>
                                    <li>
                                        <span class="flaticon-mail"></span>
                                        <a href="mailto:<?php echo esc_attr($options->get('sidebar_email_address'));?>"><?php echo wp_kses($options->get('sidebar_email_address'), true);?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php
								$icons = $options->get( 'sidebar_social_share' );
								if ( ! empty( $icons ) ) :
							?>
                            <div class="thm-social-link1">
                                <ul class="social-box">
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
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->
	<?php } ?>

    <!-- Main header-->
    <header class="main-header header-style-one">
        <div class="header-style-one__inner">
            <div class="main-logo-box">
                <?php echo rufers_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
            </div>
            <!--Start Header Top-->
            <div class="header-style-one__header-content">
            	
				<?php if( $options->get('show_topbar_v1') ){ ?>
                <div class="header-top">
                    <div class="auto-container">
                        <div class="outer-box">
							<?php if( $options->get('welcome_text_v1')){ ?>
                            <div class="header-top__left">
                                <div class="welcome-text">
                                    <p><?php echo wp_kses($options->get('welcome_text_v1'), true);?></p>
                                </div>
                            </div>
							<?php } ?>
                            <div class="header-top__right">
                                <?php if($options->get('phone_no_v1') || $options->get('email_v1')){ ?>
                                <div class="header-contact-info text-right-rtl">
                                    <ul>
                                        <?php if($options->get('phone_no_v1')){ ?>
                                        <li>
                                            <div class="icon">
                                                <span class="flaticon-phone-call-3"></span>
                                            </div>
                                            <div class="text">
                                                <h6><a href="tel:<?php echo esc_attr($options->get('phone_no_v1'));?>"><?php echo wp_kses($options->get('phone_no_v1'), true);?></a></h6>
                                            </div>
                                        </li>
                                        <?php } ?>
                                        <?php if($options->get('email_v1')){ ?>
                                        <li>
                                            <div class="icon">
                                                <span class="flaticon-email-1"></span>
                                            </div>
                                            <div class="text">
                                                <h6><a href="mailto:<?php echo esc_attr($options->get('email_v1'));?>"><?php echo wp_kses($options->get('email_v1'), true);?></a></h6>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>
                                <?php
									$icons = $options->get( 'header_v1_social_share' );
									if ( ! empty( $icons )) {
								?>
                                <div class="header-social-link">
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
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Header Top-->
				<?php } ?>
                <!--Start Header-->
                <div class="header">
                    <div class="auto-container">
                        <div class="outer-box">

                            <div class="header-left">
                                <div class="nav-outer style1 clearfix">
                                    <!--Mobile Navigation Toggler-->
                                    <div class="mobile-nav-toggler">
                                        <div class="inner">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </div>
                                    </div>
                                    <!-- Main Menu -->
                                    <nav class="main-menu style1 navbar-expand-md navbar-light">
                                        <div class="collapse navbar-collapse show clearfix"
                                            id="navbarSupportedContent">
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

                            <div class="header-right">
                                <?php if( $options->get('show_shoping_cart_icon_v1') ){ ?>
								<?php if( function_exists( 'WC' ) ): global $woocommerce; ?>
                                <div class="shopping-cart-box">
                                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="flaticon-shopping-bag"></i><span class="count"><?php echo wp_kses( $woocommerce->cart->cart_contents_count, true ); ?></span></a>
                                </div>
                                <?php endif; } ?>
                                
                                <?php if( $options->get('show_search_form_v1') ){ ?>
                                <div class="space-box1"></div>
                                <div class="serach-button-style2">
                                    <?php get_template_part('searchform1'); ?>
                                </div>
                                <?php } ?>
                                
                                <?php if( $options->get('btn_link') || $options->get('btn_title')){ ?>
                                <div class="header-right_buttom">
                                    <div class="btns-box">
                                        <a class="btn-one" href="<?php echo esc_url($options->get('btn_link'));?>">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            <span class="txt"><?php echo wp_kses($options->get('btn_title'), true);?></span>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                                
								<?php if( $options->get('show_sidebar_info') ){ ?>
                                <div class="side-content-button">
                                    <a class="navSidebar-button" href="#"><span class="flaticon-menu"></span></a>
                                </div>
								<?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End header-->
            </div>
        </div>

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
					$icons = $options->get( 'header_v1_social_share' );
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