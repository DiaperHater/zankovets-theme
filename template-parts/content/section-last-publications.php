<?php

$publications = get_posts(array(
  'post_type' => array('post', 'article'),
  'posts_per_page' => 3,
  'orderby' => 'date',
  'post_status' => 'publish',
  'return_fields' => 'ids',
));

function print_publication_card($id)
{
?>
  <!-- Card -->
  <a href="<?= get_permalink($id) ?>" class="group xl:col-span-2 first:xl:col-span-3 first:xl:row-span-2 xl:flex xl:flex-col">
    <!-- Image -->
    <img src="<?= get_the_post_thumbnail_url($id, 'medium_large') ?>" alt="" class="w-full aspect-video object-cover object-center mb-6 xl:group-first:aspect-[4/3]">
    <!-- Title -->
    <h3 class="text-2xl text-yellow-300 font-bold mb-8 md:text-4xl">
      <?= get_the_title($id) ?>
    </h3>
    <!-- Decor -->
    <div class="h-2 bg-yellow-300 xl:group-first:mt-auto"></div>
  </a>
<?php
}
?>

<!-- LastPosts -->
<section class="py-24">
  <div class="wrapper">
    <div class="box">
      <!-- Heading -->
      <h2 class="heading text-yellow-300 mb-20">
        Stay updated
      </h2>
      <!-- Cards -->
      <div class="grid gap-y-20 md:grid-cols-2 md:gap-x-6 xl:grid-cols-5 xl:gap-x-20">
        <?php
        foreach ($publications as $id) {
          print_publication_card($id);
        }
        ?>
      </div>
    </div>
  </div>
</section>