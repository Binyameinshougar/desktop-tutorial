<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link sr-only" href="#primary"><?php esc_html_e('Skip to content', 'weise-elfen'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-inner">
                <div class="site-branding">
                    <?php weise_elfen_site_branding(); ?>
                </div>

                <button class="nav-toggle" aria-label="<?php esc_attr_e('Toggle navigation', 'weise-elfen'); ?>" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <?php weise_elfen_nav_menu('primary'); ?>
            </div>
        </div>
    </header>

    <main id="primary" class="site-main">
