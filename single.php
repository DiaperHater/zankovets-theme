<?php get_header() ?>

<?php

$content = get_the_content();
$blocks = parse_blocks($content);
?>


<section class="pb-24 <?= $post->post_type == 'book' ? 'pt-24' : '' ?> bg-white text-neutral-900">

  <?php
  if ($post->post_type != 'book') {
  ?>
    <!-- Hero -->
    <div class="pt-24 pb-12 mb-24 relative">
      <!-- BG -->
      <img src="<?= the_post_thumbnail_url('medium_large') ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover object-center">
      <!-- BViewverlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-70 duration-300 group-hover:backdrop-blur-sm"></div>
      <!-- Inner -->
      <div class="wrapper">
        <div class="box relative">
          <!-- Preheading -->
          <p class="mb-4 text-white font-bold text-lxl text-right">
            <?= get_the_date() ?>
          </p>
          <p class="mb-6 text-white text-2xl text-right">
            <a href="/about">by: Vlady Zankovets</a>
          </p>
          <!-- Heading -->
          <h2 class="heading text-yellow-300 text-center max-w-xl mx-auto pb-12">
            <?= get_the_title() ?>
          </h2>
          <!-- Subheading -->
          <p class="text-2xl tracking-wide text-yellow-300 text-center max-w-2xl mx-auto">
            <?= get_the_excerpt() ?>
          </p>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <div class="wrapper">
    <div class="box-sm">

      <!-- Content -->
      <div class="prose prose-2xl mx-auto">
        <?php
        foreach ($blocks as $block) {
          if ("core/shortcode" == $block['blockName']) {
            echo do_shortcode('[socials]');
          } else {
            echo render_block($block);
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php

if ($post->post_type == 'book') {

  // Testimonials
  get_template_part('template-parts/content/section', 'testimonials', array(
    'heading' => 'Reader reviews',
    'terms' => 'book-reader'
  ));
  // GetBookForm
  get_template_part('template-parts/content/section', 'get-book-form');
}
?>

<?php get_template_part('template-parts/content/section', 'contact-form') ?>



<?php get_footer() ?>