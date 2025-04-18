<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

    </header>
    <nav class="download-nav">
        <button>
            <?php echo esc_html(get_theme_mod('hero_button', 'En savoir plus')); ?> 
        </button>
    </nav>
