<?php

$logo = get_field('logo', 'option') ?? false;

?>

<div class="header__navbar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__navbar__inner">
                    <?php if ($logo) { ?>
                    <div class="header__navbar__logo">
                        <a href="<?php echo get_site_url(); ?>" title="Home">
                            <?php echo wp_get_attachment_image($logo, 'large'); ?>
                        </a>
                    </div>
                    <?php } ?>
                    <div class="header__navbar__hamburger d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="header__navbar__menu d-none d-lg-block">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>