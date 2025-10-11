<?php
/**
 * Weiße Elfen Home Care Theme Functions
 *
 * @package WeisseElfen
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function weise_elfen_setup() {
    // Make theme available for translation
    load_theme_textdomain('weise-elfen', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);
    add_image_size('hero-image', 800, 600, true);
    add_image_size('service-card', 400, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'weise-elfen'),
        'footer' => __('Footer Menu', 'weise-elfen'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for Block Styles
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Add support for custom header
    add_theme_support('custom-header', array(
        'default-image' => '',
        'width' => 1920,
        'height' => 600,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
}
add_action('after_setup_theme', 'weise_elfen_setup');

/**
 * Set the content width in pixels
 */
function weise_elfen_content_width() {
    $GLOBALS['content_width'] = apply_filters('weise_elfen_content_width', 1200);
}
add_action('after_setup_theme', 'weise_elfen_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function weise_elfen_scripts() {
    // Google Fonts: Poppins and Lato
    wp_enqueue_style(
        'weise-elfen-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Lato:wght@400;500;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style('weise-elfen-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    // Main JavaScript
    wp_enqueue_script(
        'weise-elfen-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Add comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'weise_elfen_scripts');

/**
 * Register widget areas
 */
function weise_elfen_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'weise-elfen'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'weise-elfen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column 1', 'weise-elfen'),
        'id' => 'footer-1',
        'description' => __('Add widgets here to appear in footer column 1.', 'weise-elfen'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column 2', 'weise-elfen'),
        'id' => 'footer-2',
        'description' => __('Add widgets here to appear in footer column 2.', 'weise-elfen'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column 3', 'weise-elfen'),
        'id' => 'footer-3',
        'description' => __('Add widgets here to appear in footer column 3.', 'weise-elfen'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'weise_elfen_widgets_init');

/**
 * Add Elementor support
 */
function weise_elfen_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_all_core_location();
}
add_action('elementor/theme/register_locations', 'weise_elfen_register_elementor_locations');

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add company information to customizer
 */
function weise_elfen_customize_register($wp_customize) {
    // Company Information Section
    $wp_customize->add_section('weise_elfen_company_info', array(
        'title' => __('Company Information', 'weise-elfen'),
        'priority' => 30,
    ));

    // Company Name
    $wp_customize->add_setting('company_name', array(
        'default' => 'Weiße Elfen Frankfurt (Oder) gUG (haftungsbeschränkt)',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_name', array(
        'label' => __('Company Name', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'text',
    ));

    // Managing Director
    $wp_customize->add_setting('managing_director', array(
        'default' => 'Surag Bosch Shogar',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('managing_director', array(
        'label' => __('Managing Director', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'text',
    ));

    // Address
    $wp_customize->add_setting('company_address', array(
        'default' => 'Rudolf-Breitscheid-Str. 13, 15230 Frankfurt (Oder), Germany',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_address', array(
        'label' => __('Address', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'text',
    ));

    // Phone
    $wp_customize->add_setting('company_phone', array(
        'default' => '+49 335 554 087 99',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => __('Phone', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'text',
    ));

    // Mobile/WhatsApp
    $wp_customize->add_setting('company_mobile', array(
        'default' => '+49 174 2198213',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_mobile', array(
        'label' => __('Mobile/WhatsApp', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('company_email', array(
        'default' => 'info@weisse-elfen-helfen.de',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('company_email', array(
        'label' => __('Email', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'email',
    ));

    // Tagline
    $wp_customize->add_setting('company_tagline', array(
        'default' => 'Alltagshilfe – Betreuung – Familienhilfe – 24h Betreuung',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_tagline', array(
        'label' => __('Tagline', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'text',
    ));

    // WhatsApp Link
    $wp_customize->add_setting('whatsapp_link', array(
        'default' => 'https://wa.me/491742198213',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('whatsapp_link', array(
        'label' => __('WhatsApp Link', 'weise-elfen'),
        'section' => 'weise_elfen_company_info',
        'type' => 'url',
    ));
}
add_action('customize_register', 'weise_elfen_customize_register');

/**
 * Process contact form submission
 */
function weise_elfen_handle_contact_form() {
    if (isset($_POST['weise_elfen_contact_nonce']) && wp_verify_nonce($_POST['weise_elfen_contact_nonce'], 'weise_elfen_contact_form')) {
        $name = sanitize_text_field($_POST['contact_name']);
        $phone = sanitize_text_field($_POST['contact_phone']);
        $city = sanitize_text_field($_POST['contact_city']);
        $support_type = sanitize_text_field($_POST['support_type']);
        $preferred_time = sanitize_text_field($_POST['preferred_time']);
        $notes = sanitize_textarea_field($_POST['contact_notes']);

        $to = get_theme_mod('company_email', 'info@weisse-elfen-helfen.de');
        $subject = __('New Contact Form Submission', 'weise-elfen');
        $message = sprintf(
            __("Name: %s\nPhone/WhatsApp: %s\nCity/Area: %s\nType of Support: %s\nPreferred Time: %s\nNotes: %s", 'weise-elfen'),
            $name,
            $phone,
            $city,
            $support_type,
            $preferred_time,
            $notes
        );

        $headers = array('Content-Type: text/plain; charset=UTF-8');

        if (wp_mail($to, $subject, $message, $headers)) {
            wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
        } else {
            wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        }
        exit;
    }
}
add_action('admin_post_nopriv_weise_elfen_contact', 'weise_elfen_handle_contact_form');
add_action('admin_post_weise_elfen_contact', 'weise_elfen_handle_contact_form');

/**
 * Process careers form submission
 */
function weise_elfen_handle_careers_form() {
    if (isset($_POST['weise_elfen_careers_nonce']) && wp_verify_nonce($_POST['weise_elfen_careers_nonce'], 'weise_elfen_careers_form')) {
        $name = sanitize_text_field($_POST['applicant_name']);
        $email = sanitize_email($_POST['applicant_email']);
        $phone = sanitize_text_field($_POST['applicant_phone']);
        $experience = sanitize_textarea_field($_POST['experience']);
        $availability = sanitize_text_field($_POST['availability']);

        $to = get_theme_mod('company_email', 'info@weisse-elfen-helfen.de');
        $subject = __('New Career Application', 'weise-elfen');
        $message = sprintf(
            __("Name: %s\nEmail: %s\nPhone: %s\nExperience: %s\nAvailability: %s", 'weise-elfen'),
            $name,
            $email,
            $phone,
            $experience,
            $availability
        );

        $headers = array('Content-Type: text/plain; charset=UTF-8');

        if (wp_mail($to, $subject, $message, $headers)) {
            wp_redirect(add_query_arg('application', 'success', wp_get_referer()));
        } else {
            wp_redirect(add_query_arg('application', 'error', wp_get_referer()));
        }
        exit;
    }
}
add_action('admin_post_nopriv_weise_elfen_careers', 'weise_elfen_handle_careers_form');
add_action('admin_post_weise_elfen_careers', 'weise_elfen_handle_careers_form');
