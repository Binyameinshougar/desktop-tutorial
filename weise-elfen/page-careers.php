<?php
/**
 * Template Name: Careers Page
 * Template for displaying careers/application form
 *
 * @package WeisseElfen
 */

get_header();
?>

<section class="services-section" style="padding-top: 6rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php esc_html_e('Join Our Team', 'weise-elfen'); ?></h1>
            <p><?php esc_html_e('Be part of a compassionate team making a difference in people\'s lives', 'weise-elfen'); ?></p>
        </div>

        <?php if (isset($_GET['application']) && $_GET['application'] === 'success') : ?>
            <div class="alert alert-success" style="background: #d4edda; border: 1px solid #c3e6cb; padding: 1rem; border-radius: 10px; margin-bottom: 2rem; color: #155724;">
                <?php esc_html_e('Thank you for your application! We will review it and get back to you soon.', 'weise-elfen'); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['application']) && $_GET['application'] === 'error') : ?>
            <div class="alert alert-error" style="background: #f8d7da; border: 1px solid #f5c6cb; padding: 1rem; border-radius: 10px; margin-bottom: 2rem; color: #721c24;">
                <?php esc_html_e('Sorry, there was an error submitting your application. Please try again or contact us directly.', 'weise-elfen'); ?>
            </div>
        <?php endif; ?>

        <div class="about-grid">
            <div class="about-content">
                <h2><?php esc_html_e('Why Work With Us?', 'weise-elfen'); ?></h2>
                <p>
                    <?php esc_html_e('At Weiße Elfen Home Care, we value our caregivers as much as we value our clients. We believe that happy, supported caregivers provide the best care. When you join our team, you become part of a family dedicated to making a real difference.', 'weise-elfen'); ?>
                </p>

                <h3><?php esc_html_e('What We Offer:', 'weise-elfen'); ?></h3>
                <ul class="about-values">
                    <li><?php esc_html_e('Competitive compensation and benefits', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Ongoing training and professional development', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Flexible scheduling options', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Supportive team environment', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Meaningful work that makes a difference', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Career advancement opportunities', 'weise-elfen'); ?></li>
                </ul>

                <h3 class="mt-4"><?php esc_html_e('Who We\'re Looking For:', 'weise-elfen'); ?></h3>
                <p>
                    <?php esc_html_e('We seek compassionate, reliable individuals with a genuine desire to help others. Whether you\'re an experienced caregiver or new to the field, we provide the training and support you need to succeed.', 'weise-elfen'); ?>
                </p>
            </div>

            <div class="contact-form">
                <h3><?php esc_html_e('Apply Now', 'weise-elfen'); ?></h3>
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="weise_elfen_careers">
                    <?php wp_nonce_field('weise_elfen_careers_form', 'weise_elfen_careers_nonce'); ?>

                    <div class="form-group">
                        <label for="applicant_name"><?php esc_html_e('Full Name *', 'weise-elfen'); ?></label>
                        <input type="text" id="applicant_name" name="applicant_name" required>
                    </div>

                    <div class="form-group">
                        <label for="applicant_email"><?php esc_html_e('Email Address *', 'weise-elfen'); ?></label>
                        <input type="email" id="applicant_email" name="applicant_email" required>
                    </div>

                    <div class="form-group">
                        <label for="applicant_phone"><?php esc_html_e('Phone Number *', 'weise-elfen'); ?></label>
                        <input type="tel" id="applicant_phone" name="applicant_phone" required>
                    </div>

                    <div class="form-group">
                        <label for="experience"><?php esc_html_e('Relevant Experience *', 'weise-elfen'); ?></label>
                        <textarea id="experience" name="experience" rows="5" required placeholder="<?php esc_attr_e('Please describe your caregiving experience, certifications, languages spoken, and why you\'d like to join our team.', 'weise-elfen'); ?>"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="availability"><?php esc_html_e('Availability', 'weise-elfen'); ?></label>
                        <select id="availability" name="availability">
                            <option value=""><?php esc_html_e('-- Please Select --', 'weise-elfen'); ?></option>
                            <option value="full-time"><?php esc_html_e('Full-time', 'weise-elfen'); ?></option>
                            <option value="part-time"><?php esc_html_e('Part-time', 'weise-elfen'); ?></option>
                            <option value="weekends"><?php esc_html_e('Weekends Only', 'weise-elfen'); ?></option>
                            <option value="nights"><?php esc_html_e('Night Shifts', 'weise-elfen'); ?></option>
                            <option value="flexible"><?php esc_html_e('Flexible', 'weise-elfen'); ?></option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <?php esc_html_e('Submit Application', 'weise-elfen'); ?>
                    </button>
                </form>

                <p style="font-size: 0.875rem; color: #666666; margin-top: 1rem; text-align: center;">
                    <?php esc_html_e('For questions about careers, please contact us at', 'weise-elfen'); ?>
                    <a href="mailto:<?php echo esc_attr(weise_elfen_company_info('email')); ?>">
                        <?php echo esc_html(weise_elfen_company_info('email')); ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
