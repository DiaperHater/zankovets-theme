<?php get_header() ?>

<?php if (have_rows('content')) : ?>
  <?php while (have_rows('content')) : the_row(); ?>
    <?php if (get_row_layout() == 'homeHero') : ?>
      <?php get_template_part('template-parts/content/section', 'home-hero') ?>
    <?php elseif (get_row_layout() == 'socials') : ?>
      <?php get_template_part('template-parts/content/section', 'socials') ?>
    <?php elseif (get_row_layout() == 'menu') : ?>
      <?php get_template_part('template-parts/content/section', 'menu') ?>
    <?php elseif (get_row_layout() == 'textAndMedia') : ?>
      <?php get_template_part('template-parts/content/section', 'text-and-media') ?>
    <?php elseif (get_row_layout() == 'certificates') : ?>
      <?php get_template_part('template-parts/content/section', 'certificates') ?>
    <?php elseif (get_row_layout() == 'clients') : ?>
      <?php get_template_part('template-parts/content/section', 'clients') ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>