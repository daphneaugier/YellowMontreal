<section class="hero-container">
    <div class="hero-content">
        <h1><?php echo esc_html(get_theme_mod('hero_title', 'Bienvenue sur mon site !')); ?></h1> 
        <p><?php echo esc_html(get_theme_mod('hero_text', 'Un site moderne et personnalisé avec WordPress.')); ?></p> 
    </div>
    <div class="video-container">
        <video autoPlay loop muted>
            <source src=<?php echo esc_html(get_theme_mod('hero_video', get_theme_file_uri().'/assets/hero_video.mp4')); ?> type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
</section>