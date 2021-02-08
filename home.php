<?php

get_header();

?>
<main>
<section class="hero">
    <section class="hero-content">
        <h2>Bienvenue sur le portfolio de timogo</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, hic dolorem. Quae labore ratione quis! Architecto ipsum consectetur ut animi dignissimos rem minima repellat, recusandae error delectus dolores ipsa dolorem!</p>
        <a href="#" class="btn-primary-outline">Voir mes projets</a>
    </section>
    <img src="wp-content/uploads/2021/02/hero-image.jpeg" alt="computer" class="hero-image">
</section>

<section>
<?php get_template_part('template-parts/content', 'projects'); ?>
</section>
</main>
<?php get_footer(); ?>