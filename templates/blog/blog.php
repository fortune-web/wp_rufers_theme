<?php

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage RUFERS
 * @author     Theme Kalia
 * @version    1.0
 */

if ( class_exists( 'Rufers_Resizer' ) ) {
	$img_obj = new Rufers_Resizer();
} else {
	$img_obj = array();
}
$allowed_tags = wp_kses_allowed_html('post');
global $post;
?>
<div <?php post_class(); ?>>

	<!--Start Single blog Style1-->
    <div class="single-blog-style1 single-blog-style1--blog-large wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
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
        <div class="text-holder <?php if( !has_post_thumbnail() ) echo 'bt-1';?>">
            <h3 class="blog-title">
                <a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a>
            </h3>
            <div class="text">
                <?php the_excerpt(); ?>
            </div>
            <div class="bottom-box">
                <div class="pattern-bg"
                    style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pattern/thm-pattern-7.png);">
                </div>
                <div class="left">
                    <a class="btn-two" href="<?php echo esc_url( the_permalink( get_the_id() ) );?>"><?php esc_html_e('More Details', 'rufers'); ?></a>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments'); ?>"><span class="fa fa-comment-o"></span><?php comments_number( wp_kses(__('0 Comments' , 'rufers'), true), wp_kses(__('1 Comment' , 'rufers'), true), wp_kses(__('% Comments' , 'rufers'), true)); ?></a></li>
                        <li><a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?>"><span class="fa fa-calendar"></span><?php echo wp_kses(get_the_date(), true); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Single blog Style1-->

</div>