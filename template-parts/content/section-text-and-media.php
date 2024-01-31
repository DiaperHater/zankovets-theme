<?php
$heading = get_sub_field('heading');
$text = get_sub_field('text');
$link = get_sub_field('link');
$video = get_sub_field('video');
?>

<!-- TextAndMedia -->
<section class="py-32 bg-neutral-300 lg:py-52">
  <div class="wrapper">
    <div class="box">
      <!-- Inner -->
      <div class="lg:grid lg:grid-cols-12 lg:gap-x-6">
        <!-- Heading (mobile only) -->
        <h2 class="heading mb-8 text-black lg:hidden">
          <?= $heading ?>
        </h2>
        <!-- Meida -->
        <figure class="relative group cursor-pointer h-fit mb-8 lg:mb-0 lg:col-span-6 lg:col-start-7" onclick="playPauseVideo(this)">
          <video src="<?= $video ?>" muted loop class="-translate-x-8 min-w-[100vw] lg:translate-x-0 lg:min-w-full"></video>
          <button class="play-button absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-200 group-hover:text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
            </svg>
          </button>
        </figure>
        <!-- TextContent -->
        <div class="lg:col-span-6 lg:row-start-1">
          <!-- Heading (desktop only) -->
          <h2 class="hidden heading mb-8 text-black lg:block">
            <?= $heading ?>
          </h2>
          <!-- Text -->
          <p class="mb-6 text-black">
            <?= $text ?>
          </p>
          <!-- Button -->
          <a href="<?= $link['url'] ?>" class="button"><?= $link['title'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>