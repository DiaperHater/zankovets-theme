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
  <div class="bg-white px-4 py-12 mt-44 w-96 max-w-full border-2 border-yellow-300 rounded-xl shadow-lg ">
    <!-- Image -->
    <div class="h-32 overflow-visible flex items-end justify-center mb-6">
      <img src="<?= $cover['sizes']['medium'] ?>" alt="<?= $cover['alt'] ?>" class="w-[200px]">
    </div>
    <div class="text-neutral-900">
      <h3 class="text-3xl font-bold mb-4 text-center">
        <?= $title ?>
      </h3>
      <p class="mb-8 text-center">
        <?= $description ?>
      </p>
      <div class="">
        <a href="#" class="button button--yellow mb-6 w-full">
          more info
        </a>
        <a href="#" class="button w-full">
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
      <h2 class="heading text-neutral-900 text-center mb-8 relative w-max mx-auto">
        <?= $heading ?>
        <svg viewBox="0 0 420 177" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-1/2 -translate-x-1/2 w-[150%]">
          <mask id="mask0_847268_611" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="50" width="420" height="127">
            <rect x="420" y="177" width="420" height="127" transform="rotate(-180 420 177)" fill="#D9D9D9" />
          </mask>
          <g mask="url(#mask0_847268_611)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-53.1825 51.75L210 177L473.183 51.75H420.652L210 152L-0.651001 51.75L-53.1825 51.75Z" class="fill-yellow-300" />
          </g>
          <mask id="mask1_847268_611" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="420" height="127">
            <rect x="420" y="127" width="420" height="127" transform="rotate(-180 420 127)" fill="#D9D9D9" />
          </mask>
          <g mask="url(#mask1_847268_611)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-53.1825 1.75L210 127L473.183 1.75H420.652L210 102L-0.651001 1.75L-53.1825 1.75Z" class="fill-yellow-300" />
          </g>
        </svg>
      </h2>
      <!-- Subheading -->
      <p class="subheading text-neutral-900 text-center mb-8 relative">
        <?= $subheading ?>
      </p>
      <!-- Items -->
      <div class="flex flex-col items-center lg:gap-12 lg:flex-row lg:justify-center lg:items-start relative">

        <?php
        foreach ($books as $item) {
          print_book_card($item['book']);
        }
        ?>

      </div>
    </div>
  </div>
</section>