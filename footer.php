  </main>

  <!-- Footer -->
  <footer class="pt-12 pb-24">
    <div class="wrapper">
      <div class="box">
        <!-- Navigation -->
        <div class="w-[920px] max-w-full mx-auto border-b border-b-white pb-8 mb-12 md:grid md:grid-cols-8 md:gap-x-6 lg:items-center">
          <!-- Logo -->
          <a href="<?= home_url() ?>" class="text-2xl leading-none font-bold uppercase duration-200 hover:text-yellow-500  block text-center mb-12 md:col-span-2 md:col-start-4 md:mb-0">
            Zankovets
          </a>
          <!-- leftColumn -->
          <div class="flex flex-col gap-y-6 items-center mb-6 md:col-span-3 md:m-0 md:row-start-1 lg:flex-row lg:gap-x-6 lg: justify-end">
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              About
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Services
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Blog
            </a>
          </div>
          <!-- rightColumn -->
          <div class="flex flex-col gap-y-6 items-center md:col-span-3 md:m-0 lg:flex-row lg:gap-x-6">
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Scientific Articles
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Books
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Contact
            </a>
          </div>
        </div>
        <!-- Socials -->
        <div class="flex gap-x-6 justify-center mb-20">
          <?php get_template_part('template-parts/components/social-icons', null) ?>
        </div>
        <!-- Sign -->
        <p class="text-center font-light">
          © 2024
        </p>
      </div>
    </div>
  </footer>

  <?php wp_footer() ?>

  </body>

  </html>