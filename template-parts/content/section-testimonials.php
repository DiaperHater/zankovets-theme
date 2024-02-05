<?php

$testimonials_posts_ids = get_posts(array(
  'post_type' => 'testimonial',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'return_fields' => 'ids'
));


function print_testimonial($id)
{
  $ava = get_field('image', $id);
  $name = get_field('name', $id);
  $position = get_field('position', $id);
  $text = get_field('text', $id);
?>
  <!-- Slide -->
  <div class="swiper-slide bg-neutral-700 px-4 pt-4 pb-8">
    <!-- Head -->
    <div class="flex relative pt-16 mb-8 sm:pt-0 sm:pl-[160px]">
      <!-- Ava -->
      <img src="<?= $ava['sizes']['thumbnail'] ?>" alt="<?= $ava['alt'] ?>" class="w-[120px] rounded-full absolute top-0 left-1/2 -translate-y-2/3 -translate-x-1/2 sm:-translate-y-1/2 sm:left-0 sm:translate-x-0 sm:w-[140px]">
      <!-- Info -->
      <div class="">
        <p class="text-2xl mb-1.5">
          <?= $name ?>
        </p>
        <p class="text-neutral-300">
          <?= $position ?>
        </p>
      </div>
    </div>
    <!-- Body -->
    <p class="italic font-light">
      "<?= $text ?>"
    </p>
  </div>
<?php
}
?>



<!-- Testimonials -->
<section class="py-24 bg-white overflow-hidden">
  <div class="wrapper">
    <div class="box">
      <!-- Inner -->
      <div class="">
        <h2 class="heading text-neutral-900 text-center mb-32">
          Testimonials
        </h2>
        <!-- Slider -->
        <div class="swiper-testimonials">
          <div class="swiper-wrapper">
            <?php
            foreach ($testimonials_posts_ids as $id) {
              print_testimonial($id);
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>