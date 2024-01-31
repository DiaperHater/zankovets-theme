<?php get_header() ?>

<?php if (have_rows('content')) : ?>
  <?php while (have_rows('content')) : the_row(); ?>
    <?php if (get_row_layout() == 'homeHero') : ?>
      <?php get_template_part('template-parts/content/section', 'home-hero') ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>