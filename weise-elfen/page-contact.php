<?php
/**
 * Template Name: Contact Page
 * Template for displaying contact form
 *
 * @package WeisseElfen
 */

get_header();
?>

<section class="contact-section" style="padding-top: 6rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php esc_html_e('Contact Us', 'weise-elfen'); ?></h1>
            <p><?php esc_html_e('Get in touch with us for a free consultation. We\'re here to help.', 'weise-elfen'); ?></p>
        </div>

        <?php if (isset($_GET['contact']) && $_GET['contact'] === 'success') : ?>
            <div class="alert alert-success" style="background: #d4edda; border: 1px solid #c3e6cb; padding: 1rem; border-radius: 10px; margin-bottom: 2rem; color: #155724;">
                <?php esc_html_e('Thank you for contacting us! We will get back to you soon.', 'weise-elfen'); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['contact']) && $_GET['contact'] === 'error') : ?>
            <div class="alert alert-error" style="background: #f8d7da; border: 1px solid #f5c6cb; padding: 1rem; border-radius: 10px; margin-bottom: 2rem; color: #721c24;">
                <?php esc_html_e('Sorry, there was an error sending your message. Please try again or contact us directly.', 'weise-elfen'); ?>
            </div>
        <?php endif; ?>

        <div class="contact-grid">
            <div class="contact-info">
                <h2><?php esc_html_e('Get in Touch', 'weise-elfen'); ?></h2>
                <p>
                    <?php esc_html_e('We would love to hear from you! Whether you have questions about our services, need immediate assistance, or want to schedule a consultation, we\'re here to help.', 'weise-elfen'); ?>
                </p>

                <ul class="contact-details">
                    <li>
                        <strong><?php esc_html_e('Phone:', 'weise-elfen'); ?></strong>
                        <a href="<?php echo esc_url(weise_elfen_format_phone(weise_elfen_company_info('phone'))); ?>">
                            <?php echo esc_html(weise_elfen_company_info('phone')); ?>
                        </a>
                    </li>
                    <li>
                        <strong><?php esc_html_e('Mobile/WhatsApp:', 'weise-elfen'); ?></strong>
                        <a href="<?php echo esc_url(weise_elfen_format_phone(weise_elfen_company_info('mobile'))); ?>">
                            <?php echo esc_html(weise_elfen_company_info('mobile')); ?>
                        </a>
                    </li>
                    <li>
                        <strong><?php esc_html_e('Email:', 'weise-elfen'); ?></strong>
                        <a href="mailto:<?php echo esc_attr(weise_elfen_company_info('email')); ?>">
                            <?php echo esc_html(weise_elfen_company_info('email')); ?>
                        </a>
                    </li>
                    <li>
                        <strong><?php esc_html_e('Address:', 'weise-elfen'); ?></strong>
                        <?php echo nl2br(esc_html(weise_elfen_company_info('address'))); ?>
                    </li>
                </ul>

                <a href="<?php echo esc_url(weise_elfen_company_info('whatsapp')); ?>" class="btn btn-whatsapp" target="_blank" rel="noopener">
                    <?php esc_html_e('Message Us on WhatsApp', 'weise-elfen'); ?>
                </a>
            </div>

            <div class="contact-form">
                <h3><?php esc_html_e('Send Us a Message', 'weise-elfen'); ?></h3>
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="weise_elfen_contact">
                    <?php wp_nonce_field('weise_elfen_contact_form', 'weise_elfen_contact_nonce'); ?>

                    <div class="form-group">
                        <label for="contact_name"><?php esc_html_e('Your Name *', 'weise-elfen'); ?></label>
                        <input type="text" id="contact_name" name="contact_name" required>
                    </div>

                    <div class="form-group">
                        <label for="contact_phone"><?php esc_html_e('Phone/WhatsApp *', 'weise-elfen'); ?></label>
                        <input type="tel" id="contact_phone" name="contact_phone" required>
                    </div>

                    <div class="form-group">
                        <label for="contact_city"><?php esc_html_e('City/Area', 'weise-elfen'); ?></label>
                        <input type="text" id="contact_city" name="contact_city">
                    </div>

                    <div class="form-group">
                        <label for="support_type"><?php esc_html_e('Type of Support Needed', 'weise-elfen'); ?></label>
                        <select id="support_type" name="support_type">
                            <option value=""><?php esc_html_e('-- Please Select --', 'weise-elfen'); ?></option>
                            <option value="personal-care"><?php esc_html_e('Personal Care & Privacy', 'weise-elfen'); ?></option>
                            <option value="communication"><?php esc_html_e('Communication & Behavioral Support', 'weise-elfen'); ?></option>
                            <option value="mobility"><?php esc_html_e('Mobility Assistance', 'weise-elfen'); ?></option>
                            <option value="sensory"><?php esc_html_e('Sensory Comfort Environment', 'weise-elfen'); ?></option>
                            <option value="medication"><?php esc_html_e('Medication & Follow-up', 'weise-elfen'); ?></option>
                            <option value="respite"><?php esc_html_e('Family Respite Care', 'weise-elfen'); ?></option>
                            <option value="24h"><?php esc_html_e('24h Care', 'weise-elfen'); ?></option>
                            <option value="other"><?php esc_html_e('Other', 'weise-elfen'); ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="preferred_time"><?php esc_html_e('Preferred Contact Time', 'weise-elfen'); ?></label>
                        <select id="preferred_time" name="preferred_time">
                            <option value=""><?php esc_html_e('-- Please Select --', 'weise-elfen'); ?></option>
                            <option value="morning"><?php esc_html_e('Morning (8am - 12pm)', 'weise-elfen'); ?></option>
                            <option value="afternoon"><?php esc_html_e('Afternoon (12pm - 5pm)', 'weise-elfen'); ?></option>
                            <option value="evening"><?php esc_html_e('Evening (5pm - 8pm)', 'weise-elfen'); ?></option>
                            <option value="anytime"><?php esc_html_e('Anytime', 'weise-elfen'); ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="contact_notes"><?php esc_html_e('Additional Notes', 'weise-elfen'); ?></label>
                        <textarea id="contact_notes" name="contact_notes" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <?php esc_html_e('Send Message', 'weise-elfen'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
