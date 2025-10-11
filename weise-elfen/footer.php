    </main><!-- #primary -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3><?php esc_html_e('Contact Us', 'weise-elfen'); ?></h3>
                    <p><strong><?php echo esc_html(weise_elfen_company_info('name')); ?></strong></p>
                    <p>
                        <?php echo esc_html__('Managing Director:', 'weise-elfen'); ?><br>
                        <?php echo esc_html(weise_elfen_company_info('director')); ?>
                    </p>
                    <p>
                        <?php echo nl2br(esc_html(weise_elfen_company_info('address'))); ?>
                    </p>
                    <p>
                        <?php esc_html_e('Phone:', 'weise-elfen'); ?> 
                        <a href="<?php echo esc_url(weise_elfen_format_phone(weise_elfen_company_info('phone'))); ?>">
                            <?php echo esc_html(weise_elfen_company_info('phone')); ?>
                        </a>
                    </p>
                    <p>
                        <?php esc_html_e('Mobile/WhatsApp:', 'weise-elfen'); ?> 
                        <a href="<?php echo esc_url(weise_elfen_format_phone(weise_elfen_company_info('mobile'))); ?>">
                            <?php echo esc_html(weise_elfen_company_info('mobile')); ?>
                        </a>
                    </p>
                    <p>
                        <?php esc_html_e('Email:', 'weise-elfen'); ?> 
                        <a href="mailto:<?php echo esc_attr(weise_elfen_company_info('email')); ?>">
                            <?php echo esc_html(weise_elfen_company_info('email')); ?>
                        </a>
                    </p>
                </div>

                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer-section">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('footer-3')) : ?>
                    <div class="footer-section">
                        <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="footer-bottom">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php echo esc_html(weise_elfen_company_info('name')); ?>. 
                    <?php esc_html_e('All rights reserved.', 'weise-elfen'); ?>
                </p>
                <p><?php echo esc_html(weise_elfen_company_info('tagline')); ?></p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
