<?php
/**
 * Template for displaying the front page (home page)
 *
 * @package WeisseElfen
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <h1><?php esc_html_e('Compassionate Home Care You Can Trust', 'weise-elfen'); ?></h1>
                <p>
                    <?php esc_html_e('At Weiße Elfen, we provide warm, professional home care services tailored to your loved ones\' unique needs. Our experienced caregivers are dedicated to ensuring comfort, dignity, and quality of life.', 'weise-elfen'); ?>
                </p>
                <div class="hero-actions">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                        <?php esc_html_e('Get Free Advice', 'weise-elfen'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-secondary">
                        <?php esc_html_e('Our Services', 'weise-elfen'); ?>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <?php
                // Check if a featured image is set, otherwise use placeholder
                if (has_post_thumbnail()) {
                    the_post_thumbnail('hero-image', array('alt' => esc_attr(weise_elfen_company_info('director'))));
                } else {
                    // Placeholder for manager's photo
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/manager-portrait.jpg') . '" alt="' . esc_attr(weise_elfen_company_info('director')) . '" />';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Our Care Services', 'weise-elfen'); ?></h2>
            <p><?php esc_html_e('Comprehensive home care solutions designed with compassion and professionalism', 'weise-elfen'); ?></p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🛁</div>
                <h3><?php esc_html_e('Personal Care & Privacy', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Assistance with daily activities while maintaining dignity and privacy. Our caregivers provide respectful, personalized support.', 'weise-elfen'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">💬</div>
                <h3><?php esc_html_e('Communication & Behavioral Support', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Patient and understanding care for those with communication challenges or behavioral needs.', 'weise-elfen'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">🚶</div>
                <h3><?php esc_html_e('Mobility Assistance', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Safe support for movement, transfers, and daily mobility needs with trained professionals.', 'weise-elfen'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">🏠</div>
                <h3><?php esc_html_e('Sensory Comfort Environment', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Creating calm, comfortable spaces that cater to sensory needs and promote well-being.', 'weise-elfen'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">💊</div>
                <h3><?php esc_html_e('Medication & Follow-up', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Careful medication management and health monitoring to ensure safety and adherence.', 'weise-elfen'); ?></p>
            </div>
            <div class="service-card">
                <div class="service-icon">❤️</div>
                <h3><?php esc_html_e('Family Respite (Short-Term Care)', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Providing families with peace of mind through temporary, reliable care when you need a break.', 'weise-elfen'); ?></p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary">
                <?php esc_html_e('View All Services', 'weise-elfen'); ?>
            </a>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2><?php esc_html_e('About Weiße Elfen', 'weise-elfen'); ?></h2>
                <p>
                    <?php esc_html_e('Weiße Elfen Home Care was founded on the belief that everyone deserves compassionate, dignified care in the comfort of their own home. We are committed to enriching lives through personalized support and genuine human connection.', 'weise-elfen'); ?>
                </p>
                <p>
                    <?php esc_html_e('Our team of experienced caregivers brings warmth, professionalism, and cultural sensitivity to every interaction. We work closely with families to create care plans that honor individual needs and preferences.', 'weise-elfen'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-secondary">
                    <?php esc_html_e('Learn More About Us', 'weise-elfen'); ?>
                </a>
            </div>
            <div class="about-image">
                <?php
                // Manager's photo or placeholder
                echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/manager-portrait.jpg') . '" alt="' . esc_attr(weise_elfen_company_info('director')) . '" />';
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="contact-section">
    <div class="container text-center">
        <h2><?php esc_html_e('Ready to Get Started?', 'weise-elfen'); ?></h2>
        <p class="text-muted">
            <?php esc_html_e('Contact us today for a free consultation. We\'re here to answer your questions and help you find the right care solution.', 'weise-elfen'); ?>
        </p>
        <div class="hero-actions" style="justify-content: center; margin-top: 2rem;">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                <?php esc_html_e('Contact Us', 'weise-elfen'); ?>
            </a>
            <a href="<?php echo esc_url(weise_elfen_company_info('whatsapp')); ?>" class="btn btn-whatsapp" target="_blank" rel="noopener">
                <?php esc_html_e('WhatsApp Us', 'weise-elfen'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
