<?php

$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cards = get_sub_field('cards');
?>

<?php
function print_card($card)
{
  if (!$card) {
    return;
  }

  $img = $card['image']['sizes']['medium_large'];
  $title = $card['title'];
?>
  <!-- Card -->
  <div class="relative flex flex-col items-start justify-end p-4 aspect-square">
    <!-- Image -->
    <img src="<?= $img ?>" alt="" class="w-full h-full object-cover object-center absolute top-0 left-0">
    <!-- Title -->
    <h4 class="relative text-xl font-bold lg:text-2xl">
      <?= $title ?>
    </h4>
  </div>
<?php
}
?>

<!-- Clients -->
<section class="py-24 overflow-hidden">
  <div class="wrapper">
    <div class="box">
      <!-- Carousel -->
      <div class="swiper-clients relative">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide grid gap-3 sm:gap-6 h-full">
            <!-- Text -->
            <div class="text-black aspect-square">
              <h2 class="text-3xl font-bold mb-5 md:heading sm:mb-8">
                <?= $heading ?>
              </h2>
              <p class="mb-5">
                <?= $text ?>
              </p>
            </div>
            <!-- Card -->
            <?php print_card($cards[0]) ?>
          </div>

          <?php

          // Slice rest of the cards
          $rest_of_cards = array_slice($cards, 1);
          // Now make 2card chunks
          $chunks = array_chunk($rest_of_cards, 2);
          // Foreach chunk print a slide
          foreach ($chunks as $chunk) {
          ?>
            <!-- Slide -->
            <div class="swiper-slide grid gap-3 sm:gap-6">
              <?php
              foreach ($chunk as $item) {
                print_card($item);
              }
              ?>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
</section>