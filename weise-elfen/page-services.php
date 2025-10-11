<?php
/**
 * Template Name: Services Page
 * Template for displaying services
 *
 * @package WeisseElfen
 */

get_header();
?>

<section class="services-section" style="padding-top: 6rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php esc_html_e('Our Care Services', 'weise-elfen'); ?></h1>
            <p><?php esc_html_e('Comprehensive, compassionate home care tailored to your needs', 'weise-elfen'); ?></p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🛁</div>
                <h3><?php esc_html_e('Personal Care & Privacy', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('We provide dignified assistance with bathing, dressing, grooming, and toileting. Our caregivers are trained to maintain privacy and respect while ensuring your loved one feels comfortable and cared for. Every interaction prioritizes individual dignity and personal preferences.', 'weise-elfen'); ?>
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">💬</div>
                <h3><?php esc_html_e('Communication & Behavioral Support', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('For individuals with communication challenges, cognitive changes, or behavioral needs, our caregivers offer patient, understanding support. We use proven techniques to reduce anxiety, encourage engagement, and create positive daily experiences.', 'weise-elfen'); ?>
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">🚶</div>
                <h3><?php esc_html_e('Mobility Assistance', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('Safe mobility is essential for independence. Our trained staff provides support for walking, transfers, and movement around the home. We work with physical therapy recommendations and use appropriate equipment to prevent falls and maintain mobility.', 'weise-elfen'); ?>
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">🏠</div>
                <h3><?php esc_html_e('Sensory Comfort Environment', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('We create calm, soothing environments that reduce sensory overload and promote relaxation. This includes managing lighting, sound, temperature, and creating predictable routines that help your loved one feel secure and at peace.', 'weise-elfen'); ?>
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">💊</div>
                <h3><?php esc_html_e('Medication & Follow-up', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('Proper medication management is critical. Our caregivers follow prescribed schedules, monitor for side effects, and maintain clear communication with healthcare providers. We ensure medications are taken correctly and on time, every time.', 'weise-elfen'); ?>
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">❤️</div>
                <h3><?php esc_html_e('Family Respite (Short-Term Care)', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('Family caregivers need breaks too. Our respite care services provide temporary relief, allowing you to rest, travel, or attend to personal matters. Your loved one receives the same high-quality care while you recharge with peace of mind.', 'weise-elfen'); ?>
                </p>
            </div>
        </div>

        <div class="text-center mt-4 py-4">
            <h2><?php esc_html_e('Additional Services', 'weise-elfen'); ?></h2>
            <p class="text-muted mb-4">
                <?php esc_html_e('We also offer companion care, meal preparation, light housekeeping, transportation assistance, and 24-hour care options.', 'weise-elfen'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                <?php esc_html_e('Request a Free Consultation', 'weise-elfen'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
