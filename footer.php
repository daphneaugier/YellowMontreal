<footer>
    <div class="footer-row">
        <div class="footer-col1">
            <div>
            &copy; Daphné Augier | <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>
            </div>
        </div>
        <?php if (has_nav_menu('footer-menu')) : ?>
            <nav class="footer-menu" aria-label="<?php echo esc_attr_x('Footer Menu', 'menu', 'yellowmontreal'); ?>" role="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'menu_class'     => '',
                        'theme_location' => 'footer-menu',
                        'container'      => '',
                    )
                );
                ?>
            </nav>
        <?php endif ?>
    </div>
    <?php if (has_nav_menu('social')) : ?>
        <div class="footer-row">
                <?php
                wp_nav_menu(
                    array(
                        'menu_class'     => 'social-links-menu',
                        'theme_location' => 'social',
                        'container'      => 'div',
                        'container_class'=> 'social-menu',
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>',
                                        )
                );
                ?>
        </div>
    <?php endif ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>