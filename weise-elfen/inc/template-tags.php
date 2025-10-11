<?php
/**
 * Custom template tags for this theme
 *
 * @package WeisseElfen
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Display company information
 */
function weise_elfen_company_info($field) {
    $defaults = array(
        'name' => 'Weiße Elfen Frankfurt (Oder) gUG (haftungsbeschränkt)',
        'director' => 'Surag Bosch Shogar',
        'address' => 'Rudolf-Breitscheid-Str. 13, 15230 Frankfurt (Oder), Germany',
        'phone' => '+49 335 554 087 99',
        'mobile' => '+49 174 2198213',
        'email' => 'info@weisse-elfen-helfen.de',
        'tagline' => 'Alltagshilfe – Betreuung – Familienhilfe – 24h Betreuung',
        'whatsapp' => 'https://wa.me/491742198213'
    );

    switch($field) {
        case 'name':
            return get_theme_mod('company_name', $defaults['name']);
        case 'director':
            return get_theme_mod('managing_director', $defaults['director']);
        case 'address':
            return get_theme_mod('company_address', $defaults['address']);
        case 'phone':
            return get_theme_mod('company_phone', $defaults['phone']);
        case 'mobile':
            return get_theme_mod('company_mobile', $defaults['mobile']);
        case 'email':
            return get_theme_mod('company_email', $defaults['email']);
        case 'tagline':
            return get_theme_mod('company_tagline', $defaults['tagline']);
        case 'whatsapp':
            return get_theme_mod('whatsapp_link', $defaults['whatsapp']);
        default:
            return '';
    }
}

/**
 * Display the site logo or site title
 */
function weise_elfen_site_branding() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        ?>
        <div class="site-logo">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <?php
            $tagline = weise_elfen_company_info('tagline');
            if ($tagline) :
            ?>
                <p class="site-tagline"><?php echo esc_html($tagline); ?></p>
            <?php endif; ?>
        </div>
        <?php
    }
}

/**
 * Display navigation menu
 */
function weise_elfen_nav_menu($location = 'primary') {
    if (has_nav_menu($location)) {
        wp_nav_menu(array(
            'theme_location' => $location,
            'container' => 'nav',
            'container_class' => 'main-navigation',
            'menu_class' => '',
            'fallback_cb' => false,
        ));
    }
}

/**
 * Format phone number for tel: link
 */
function weise_elfen_format_phone($phone) {
    return 'tel:' . preg_replace('/[^0-9+]/', '', $phone);
}

/**
 * Get WhatsApp link
 */
function weise_elfen_whatsapp_link($phone = '') {
    if (empty($phone)) {
        $phone = weise_elfen_company_info('mobile');
    }
    $phone_number = preg_replace('/[^0-9]/', '', $phone);
    return 'https://wa.me/' . $phone_number;
}

/**
 * Display breadcrumbs
 */
function weise_elfen_breadcrumbs() {
    if (is_front_page()) {
        return;
    }

    echo '<nav class="breadcrumbs" aria-label="' . esc_attr__('Breadcrumb', 'weise-elfen') . '">';
    echo '<a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'weise-elfen') . '</a>';

    if (is_category() || is_single()) {
        echo ' / ';
        the_category(' / ');
        if (is_single()) {
            echo ' / ';
            the_title();
        }
    } elseif (is_page()) {
        if (wp_get_post_parent_id(get_the_ID())) {
            $parent = get_post_parent(get_the_ID());
            echo ' / <a href="' . esc_url(get_permalink($parent)) . '">' . esc_html(get_the_title($parent)) . '</a>';
        }
        echo ' / ' . esc_html(get_the_title());
    } elseif (is_search()) {
        echo ' / ' . esc_html__('Search Results', 'weise-elfen');
    } elseif (is_404()) {
        echo ' / ' . esc_html__('404 Not Found', 'weise-elfen');
    }

    echo '</nav>';
}
