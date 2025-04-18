<main>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article <?php post_class(); ?>>
                <?php the_post_thumbnail(); ?>
                <header>
                    <?php the_title('<h1>', '</h1>'); ?>
                </header>
                <section>
                    <?php the_content(esc_html__('Continue reading &rarr;', 'yellowmontreal')); ?>
                </section>
            </article>
            <?php
            if (comments_open() || get_comments_number()) :
                ?><!-- .comments-area --><?php
                comments_template();
            endif;
        endwhile;
    else :
        get_template_part('content-none');
    endif;
    ?>
</main>