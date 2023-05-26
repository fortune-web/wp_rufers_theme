<?php
/**
 * Blog Post Main File.
 *
 * @package RUFERS
 * @author  Theme Kalia
 * @version 1.0
 */

get_header();
$data    = \RUFERS\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xs-12 col-sm-12 col-md-12' : 'col-xs-12 col-sm-12 col-md-12 col-xl-8 col-lg-7';
$options = rufers_WSH()->option();

if ( class_exists( '\Elementor\Plugin' ) && $data->get( 'tpl-type' ) == 'e') {
	
	while(have_posts()) {
	   the_post();
	   the_content();
    }

} else {
?>

<?php if ( class_exists( '\Elementor\Plugin' )):?>
	<?php do_action( 'rufers_banner', $data );?>
<?php else:?>
<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url('<?php echo esc_url( $data->get( 'banner' ) ); ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <h2><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <ul>
                            <?php echo rufers_the_breadcrumb(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<?php endif;?>

<!--Start Blog Page-->
<section class="blog-page blog-page-one">
    <div class="container">
		<div class="row text-right-rtl">
        
        	<?php
				if ( $data->get( 'layout' ) == 'left' ) {
					do_action( 'rufers_sidebar', $data );
				}
			?>
            <div class="content-side <?php echo esc_attr( $class ); ?>">
            	
				<?php while ( have_posts() ) : the_post(); ?>
				
                <div class="thm-unit-test">    
                    <!-- blog-details-content -->
                    <div class="blog-details-content">
                        
                        <div class="single-blog-style1 single-blog-style1--blog-large blog-details wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                
                                <?php if( has_post_thumbnail() ):?>
                                <div class="inner">
                                    <?php the_post_thumbnail('rufers_1170x420'); ?>
                                </div>
                                <?php endif;?>
                                
                                <?php if(has_category()){ ?>
                                <div class="categories-date-box">
                                    <div class="categories-box">
                                        <h6><span class="flaticon-open-archive"></span><?php the_category(' '); ?></h6>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="text-holder">
                                
                                <div class="text pt-0">
									<?php the_content(); ?>
                                    <div class="clearfix"></div>
                                    <?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'rufers'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                                </div>
                        
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                        style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pattern/thm-pattern-7.png);">
                                    </div>
                        			<?php if(has_tag()){ ?>
                                    <div class="left">
                                        <div class="tag-box">
                                            <div class="title">
                                                <h4><?php esc_html_e('#Tags:', 'rufers'); ?></h4>
                                            </div>
                                            <div class="tag-list">
                                                <ul>
                                                    <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                        			<?php } ?>
                                    <?php if( $options->get( 'single_post_comments' ) || $options->get( 'single_post_date' )){?>
                                    <div class="right">
                                        <ul>
                                            <?php if($options->get('single_post_comments')){?><li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments'); ?>"><span class="fa fa-comment-o"></span><?php comments_number( wp_kses(__('0 Comments' , 'rufers'), true), wp_kses(__('1 Comment' , 'rufers'), true), wp_kses(__('% Comments' , 'rufers'), true)); ?></a></li><?php } ?>
                        					<?php if($options->get('single_post_date')){?><li><a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?>"><span class="fa fa-calendar"></span><?php echo wp_kses(get_the_date(), true); ?></a></li><?php } ?>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </div>
                        
                            </div>
                        </div>
                        
                        <?php if((get_previous_post()) || (get_next_post())): ?>
                        <div class="blog-prev-next-option">
                            <?php global $post; $prev_post = get_previous_post();
								if (!empty($prev_post)):
								$post_thumbnail_id = get_post_thumbnail_id($prev_post->ID);
								$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
							?>
                            <div class="single-box left">
                                <div class="img-box" style="background-image:url(<?php echo esc_url($post_thumbnail_url);?>);"></div>
                                <div class="title-box">
                                    <div class="button-box">
                                        <a class="btn-two" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"> <?php esc_html_e('Prev', 'rufers'); ?></a>
                                    </div>
                                    <h3><a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"><?php echo wp_kses(rufers_trim( get_the_title($prev_post->ID), 7 ), true); ?></a></h3>
                                </div>
                            </div>
                            <?php endif; ?>
            
							<?php global $post; $next_post = get_next_post();
                                if (!empty($next_post)): 
								$post_thumbnail_id2 = get_post_thumbnail_id($next_post->ID);
                                $post_thumbnail_url2 = wp_get_attachment_url( $post_thumbnail_id2 );
                            ?>
                            <div class="single-box right">
                                <div class="title-box">
                                    <div class="button-box">
                                        <a class="btn-two" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"> <?php esc_html_e('Next', 'rufers'); ?></a>
                                    </div>
                                    <h3><a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo wp_kses(rufers_trim( get_the_title($next_post->ID), 7 ), true); ?></a></h3>
                                </div>
                                <div class="img-box" style="background-image:url(<?php echo esc_url($post_thumbnail_url2);?>);"></div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif;?>
                        
                        <?php if( $options->get( 'single_post_author_box' ) ):?>
                        <div class="blog-details-author-box">
                            <div class="inner-title">
                                <h2><?php esc_html_e('About Author', 'rufers'); ?></h2>
                            </div>
                            <div class="blog-details-author">
                                <div class="inner-box">
                                    <div class="img-box">
                                        <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
											<?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text">
                                        <h3><?php the_author(); ?></h3>
                                        <p><?php the_author_meta( 'description', get_the_author_meta('ID') ); ?></p>
                                        
                                        <?php if( $options->get( 'single_post_author_links' ) ):?>
										<?php $icons = $options->get( 'single_post_author_social_share' );
                                        if ( ! empty( $icons ) ) :
                                        ?>
                                        <div class="social-links">
                                            <div class="thm-social-link1 clearfix">
                                                <ul>
												<?php
                                                foreach ( $icons as $h_icon ) :
                                                    $header_social_icons = json_decode( urldecode( rufers_set( $h_icon, 'data' ) ) );
                                                    if ( rufers_set( $header_social_icons, 'enable' ) == '' ) {
                                                        continue;
                                                    }
                                                    $icon_class = explode( '-', rufers_set( $header_social_icons, 'icon' ) );
                                                    ?>
                                                    <li><a href="<?php echo esc_url(rufers_set( $header_social_icons, 'url' )); ?>" style="background-color:<?php echo esc_attr(rufers_set( $header_social_icons, 'background' )); ?>; color: <?php echo esc_attr(rufers_set( $header_social_icons, 'color' )); ?>"><i class="fa <?php echo esc_attr( rufers_set( $header_social_icons, 'icon' ) ); ?>"></i></a></li>
                                                <?php endforeach; ?>
                                        		</ul>
                                        	</div>
                                        </div>
										<?php endif; endif;?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                                                
                        <!--End post-details-->
                        <?php comments_template(); ?>
                    
                	</div>
					<!--End thm-unit-test-->
                </div>
                <!--End blog-content-->
				<?php endwhile; ?>
                
            </div>
        	<?php
				if ( $data->get( 'layout' ) == 'right' ) {
					do_action( 'rufers_sidebar', $data );
				}
			?>
        </div>
    </div>
</section>
<!--End blog area--> 

<?php
}
get_footer();
