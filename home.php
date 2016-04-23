<img id="bg" src="<?= get_template_directory_uri(); ?>/dist/images/bg.jpg"/>

<span class="tagline"><?= get_bloginfo('description'); ?></span>

<?= get_search_form(); ?>

<?php the_posts_navigation(); ?>
