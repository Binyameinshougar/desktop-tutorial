<?php
/**
 * Template Name: About Page
 * Template for displaying about us
 *
 * @package WeisseElfen
 */

get_header();
?>

<section class="about-section" style="padding-top: 6rem;">
    <div class="container">
        <div class="section-header">
            <h1><?php esc_html_e('About Weiße Elfen Home Care', 'weise-elfen'); ?></h1>
            <p><?php esc_html_e('Compassionate care rooted in respect, dignity, and professional excellence', 'weise-elfen'); ?></p>
        </div>

        <div class="about-grid">
            <div class="about-content">
                <h2><?php esc_html_e('Our Mission', 'weise-elfen'); ?></h2>
                <p>
                    <?php esc_html_e('At Weiße Elfen Home Care, our mission is to enrich the lives of those we serve by providing compassionate, person-centered care in the comfort and familiarity of home. We believe every individual deserves to live with dignity, independence, and joy, regardless of age or ability.', 'weise-elfen'); ?>
                </p>
                
                <h2 class="mt-4"><?php esc_html_e('Our Values', 'weise-elfen'); ?></h2>
                <ul class="about-values">
                    <li><?php esc_html_e('Compassion – We approach every interaction with empathy and kindness', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Respect – We honor each person\'s dignity, preferences, and individuality', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Excellence – We maintain the highest standards of professional care', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Integrity – We act with honesty, transparency, and ethical responsibility', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Cultural Sensitivity – We celebrate diversity and provide culturally appropriate care', 'weise-elfen'); ?></li>
                    <li><?php esc_html_e('Family Partnership – We work collaboratively with families as essential care partners', 'weise-elfen'); ?></li>
                </ul>
            </div>
            <div class="about-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/manager-portrait.jpg'); ?>" 
                     alt="<?php echo esc_attr(weise_elfen_company_info('director')); ?>" />
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Meet Our Managing Director', 'weise-elfen'); ?></h2>
        </div>
        
        <div class="about-grid">
            <div class="about-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/manager-portrait.jpg'); ?>" 
                     alt="<?php echo esc_attr(weise_elfen_company_info('director')); ?>" />
            </div>
            <div class="about-content">
                <h3><?php echo esc_html(weise_elfen_company_info('director')); ?></h3>
                <p>
                    <?php esc_html_e('As Managing Director of Weiße Elfen Frankfurt (Oder) gUG, I am dedicated to building a home care organization that truly puts people first. Our team is committed to providing the warm, professional care that we would want for our own loved ones.', 'weise-elfen'); ?>
                </p>
                <p>
                    <?php esc_html_e('With years of experience in healthcare and social services, we understand the unique needs of individuals and families seeking home care. Our approach combines clinical expertise with genuine human connection, creating care plans that honor each person\'s story, preferences, and goals.', 'weise-elfen'); ?>
                </p>
                <p>
                    <?php esc_html_e('We invite you to experience the Weiße Elfen difference – care that feels like family.', 'weise-elfen'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Why Choose Weiße Elfen?', 'weise-elfen'); ?></h2>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">👥</div>
                <h3><?php esc_html_e('Experienced Team', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Our caregivers are carefully selected, thoroughly trained, and continuously supported to provide exceptional care.', 'weise-elfen'); ?></p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🎯</div>
                <h3><?php esc_html_e('Personalized Care Plans', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('Every care plan is tailored to individual needs, preferences, and goals – because no two people are alike.', 'weise-elfen'); ?></p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🌍</div>
                <h3><?php esc_html_e('Multilingual Support', 'weise-elfen'); ?></h3>
                <p><?php esc_html_e('We serve diverse communities with caregivers who speak multiple languages and understand cultural nuances.', 'weise-elfen'); ?></p>
            </div>
        </div>
        
        <div class="text-center mt-4 py-4">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                <?php esc_html_e('Schedule a Free Consultation', 'weise-elfen'); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
