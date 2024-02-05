<?php

$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$books = get_sub_field('books');

function print_book_card($id)
{

  $title = get_the_title($id);
  $description = get_field('description', $id);
  $cover = get_field('cover', $id);
?>
  <!-- Item -->
  <div class="bg-neutral-900 px-4 py-12 mt-44 w-96 max-w-full md:w-[920px] md:flex md:items-end md:px-8">
    <!-- Image -->
    <div class="h-32 overflow-visible flex items-end justify-center mb-6 md:justify-start md:h-full md:w-[240px] md:relative md:shrink-0 md:mb-0 md:mr-8 lg:w-[260px]">
      <img src="<?= $cover['sizes']['medium'] ?>" alt="<?= $cover['alt'] ?>" class="w-[200px] md:absolute md:bottom-0 md:left-0 md:w-full md:h-auto">
    </div>
    <div class="">
      <h3 class="text-3xl font-bold mb-4 text-center md:text-left">
        <?= $title ?>
      </h3>
      <p class="mb-8 text-center md:text-left">
        <?= $description ?>
      </p>
      <div class="md:flex md:gap-8">
        <a href="#" class="button mb-6 w-full md:mb-0 md:w-auto">
          more info
        </a>
        <a href="#" class="button w-full md:w-auto">
          Get book
        </a>
      </div>
    </div>
  </div>
<?php
}
?>

<!-- Books -->
<section class="bg-white py-24">
  <div class="wrapper">
    <div class="box">
      <!-- Heading -->
      <h2 class="heading text-neutral-900 text-center mb-8">
        <?= $heading ?>
      </h2>
      <!-- Subheading -->
      <p class="subheading text-neutral-900 text-center mb-8">
        <?= $subheading ?>
      </p>
      <!-- Items -->
      <div class="flex flex-col items-center">

        <?php
        foreach ($books as $item) {
          print_book_card($item['book']);
        }
        ?>

      </div>
    </div>
  </div>
</section>