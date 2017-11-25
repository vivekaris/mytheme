<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset='<?php bloginfo( 'charset' ); ?>'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="top">
    <div class="row">
        <div class="header-content twelve columns" style="background-image: url( '<?php header_image(); ?>' );">
            <h1 id="logo-text">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                <?php
                if ( get_theme_mod( 'custom_logo' ) ) {
                    $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                    echo '<img src="' . esc_url( $logo[0] ) . '">';
                } else {
                    bloginfo( 'name' );
                }
?>
</a> </h1>
            <p id="intro"><?php bloginfo( 'description' ); ?></p>
        </div>
</div>
        <nav id="nav-wrap">
        <a class="mobile-btn" href="#nav-wrap" title="<?php echo esc_attr( 'Show Menu', 'wp-
massively' ); ?>">
            <?php _e( 'Show Menu', 'wp-massively' ); ?>
        </a>
        <a class="mobile-btn" href="#" title="<?php echo esc_attr( 'Hide Menu', 'wp-massively' ); ?>">
            <?php _e( 'Hide Menu', 'wp-massively' ); ?>
        </a>
        <div class="row">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu' => esc_html__( 'Primary Menu', 'wp- massively' ),
                'container' => 'ul',
                'menu_class' => 'nav',
                'menu_id' => 'nav',
) );
?>
        </div>
    </nav>
 </header>