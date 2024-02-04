<?php

$items = get_sub_field('items');

function print_item($itm)
{
?>
  <!-- Item -->
  <div class="w-1/2 px-3 sm:w-1/3">
    <p class="heading text-center mb-6">
      <?= $itm['number'] ?>
    </p>
    <p class="text-3xl text-center uppercase ">
      <?= $itm['text'] ?>
    </p>
  </div>
<?php
}
?>

<!-- Numbers -->
<section class="py-24 bg-neutral-900">
  <div class="">
    <div class="box">
      <!-- Items -->
      <div class="flex flex-wrap gap-y-16 justify-center">
        <?php
        foreach ($items as $item) {
          print_item($item);
        }
        ?>
      </div>
    </div>
  </div>
</section>