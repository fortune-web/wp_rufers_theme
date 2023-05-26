<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package RUFERS
 * @since   1.0
 * @version 1.0
 */
$options = rufers_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$icon_href = $options->get( 'image_favicon' ); 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon-1.png" type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon/favicon-1.png" type="image/x-icon">
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>> 

<?php
if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() {
			do_action( 'wp_body_open' );
		}
}?>

<div class="boxed_wrapper ltr">

	<?php if( $options->get( 'theme_preloader' ) ){ ?>
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close"><?php echo wp_kses( $options->get( 'preloader_text' ), true );?></div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>
    <?php } ?>
        
	<?php do_action( 'rufers_main_header' ); ?>	