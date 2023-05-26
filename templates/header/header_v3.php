<?php
$options = rufers_WSH()->option(); 
$allowed_html = wp_kses_allowed_html( 'post' );

//Light Color Logo Settings
$image_logo = $options->get( 'light_image_normal_logo' );
$logo_dimension = $options->get( 'light_normal_logo_dimension' );

//Sticky Logo Settings
$image_logo3 = $options->get( 'sticky_color_logo' );
$logo_dimension3 = $options->get( 'sticky_color_logo_dimension' );

//Mobile Logo Settings
$image_logo4 = $options->get( 'mobile_image_normal_logo' );
$logo_dimension4 = $options->get( 'mobile_normal_logo_dimension' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>
    
    <!-- Main header-->
    <header class="main-header header-style-three">
        <div class="header-style-three__inner">
            <div class="main-logo-box-three">
                <div class="logo-bg"></div>
                <?php echo rufers_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
            </div>
            <!--Start Header Top-->
            <div class="header-style-three__header-content">
                
                <?php if( $options->get('show_topbar_v3')){ ?>
                <div class="header-top-style3">
                    <div class="container">
                        <div class="outer-box">
							<?php if( $options->get('welcome_text_v3')){ ?>
                            <div class="header-top-style3__left">
                                <div class="welcome-text">
                                    <p><?php echo wp_kses($options->get('welcome_text_v3'), true);?></p>
                                </div>
                            </div>
							<?php } ?>
                            <div class="header-top-style3__right">
                                <?php if($options->get('email_address_v3')){ ?>
                                <div class="header-contact-info header-contact-info--style2 text-right-rtl">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="flaticon-email-1"></span>
                                            </div>
                                            <div class="text">
                                                <h6><a href="mailto:<?php echo esc_attr($options->get('email_address_v3'));?>"><?php echo wp_kses($options->get('email_address_v3'), true);?></a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <?php } ?>
                                
                                <?php
									$icons = $options->get( 'header_v3_social_share' );
									if ( ! empty( $icons )) {
								?>
                                <div class="header-social-link-style2">
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
                                
                                <?php if( $options->get('show_search_icon_v3') ){ ?>
                                <div class="serach-button-style1">
                                    <button type="button" class="search-toggler">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
								<?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End Header Top-->
				<?php } ?>
                <!--Start Header-->
                <div class="header-style3">
                    <div class="container">
                        <div class="outer-box">
                            <div class="nav-outer style3 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style3 navbar-expand-md navbar-light">
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
										)); ?>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End header-->
            </div>
			<?php if( $options->get('phone_no_v3')) { ?>
            <div class="header-contact-info3">
                <div class="icon">
                    <span class="flaticon-telephone"></span>
                </div>
                <div class="text">
                    <?php echo wp_kses($options->get('phone_no_v3'), true);?>
                </div>
            </div>
			<?php } ?>
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
					$icons = $options->get( 'header_v3_social_share' );
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
    
    <?php if( $options->get('show_search_icon_v3') ){ ?>
    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><i class="icon-close"></i></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <?php get_template_part('searchform2'); ?>
            </div>
        </div>
    </div>
    <!-- search-popup end -->
    <?php } ?>
    
    