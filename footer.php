<?php

$logo = get_field('logo', 'option') ?? false;

?>

<footer>
    <div class="footer__main">
        <div class="container">
            <div class="row justify-content-md-between">
                <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                    <div class="footer__main__contact">
                        <h3>Ready to talk?</h3>
                        <p>Get in touch with me to talk about your marketing plans today.</p>
                        <a class="btn btn-primary" href="/contact" role="button">Link</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                    <div class="footer__main__quicklinks">
                        <h3>
                            <?php echo wp_get_nav_menu_name('footer-menu'); ?>
                        </h3>
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="footer__bar__copyright">
                        <?php if ($logo) { ?>
                        <div class="footer__bar__copyright__logo">
                            <a href="<?php echo get_site_url(); ?>" title="Home">
                                <?php echo wp_get_attachment_image($logo, 'medium'); ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="footer__bar__gdpr">
                        <?php wp_nav_menu( array( 'theme_location' => 'gdpr-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>