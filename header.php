<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- START Fonts -->
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <!-- END Fonts -->

  <?php wp_head() ?>

  <title><?= get_the_title() ?></title>
</head>

<body>

  <!-- Header -->
  <header class="bg-neutral-900 text-white fixed top-0 left-0 w-full z-50 group/header">
    <div class="wrapper">
      <div class="conteiner">
        <!-- Inner -->
        <nav class="py-6 flex items-center duration-200 group-[.narrow]/header:py-3">
          <!-- Logo -->
          <a href="<?= home_url() ?>" class="text-2xl leading-none font-bold uppercase duration-200 hover:text-yellow-500 mr-12">
            Zankovets
          </a>
          <!-- Links -->
          <ul class="hidden lg:flex lg:items-center lg:gap-x-4 lg:ml-auto">
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              About
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Services
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Blog
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Scientific Articles
            </a>
            <a href="#" class="text-base uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
              Books
            </a>
          </ul>
          <!-- Buttons -->
          <div class="flex gap-x-4 items-center ml-auto lg:ml-12">
            <!-- Burger  -->
            <button class="burger w-[36px] flex flex-col gap-y-2 group group-[.narrow]/header:gap-y-1.5 group-[.narrow]/header:w-[30px] lg:hidden" onclick="burgerOnClick()">
              <div class="w-full h-1 bg-white duration-200 origin-top-right group-hover:bg-yellow-500 group-[.active]:-rotate-45"></div>
              <div class="w-full h-1 bg-white duration-200 group-hover:bg-yellow-500 group-[.active]:-translate-x-full group-[.active]:opacity-0 group-[.active]:invisible"></div>
              <div class="w-full h-1 bg-white duration-200 origin-bottom-right group-hover:bg-yellow-500 group-[.active]:rotate-45"></div>
            </button>
            <a href="#" class="hidden lg:block lg:button">
              contact
            </a>
            <!-- LangSwitch -->
            <a href="#" class="group">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 duration-200 group-hover:text-yellow-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
              </svg>
            </a>
          </div>
        </nav>
      </div>
    </div>
    <!-- MobileMenu -->
    <nav class="mobile-menu absolute top-full left-full w-full h-[100vh] overflow-auto bg-neutral-900 bg-opacity-90 duration-200 lg:hidden">
      <div class="wrapper">
        <div class="container">
          <!-- Inner -->
          <div class="flex flex-col gap-y-16 pt-14 pb-40">
            <!-- Links -->
            <ul class="flex flex-col gap-y-4">
              <a href="#" class="text-lg uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                About
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Services
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Blog
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Scientific Articles
              </a>
              <a href="#" class="text-lg uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Books
              </a>
            </ul>
            <!-- Socials -->
            <div class="flex items-center gap-x-8 self-center">
              <a href="#" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                </svg>
              </a>
              <a href="#" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"></path>
                </svg>
              </a>
              <a href="#" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                </svg>
              </a>
              <a href="#" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                </svg>
              </a>
              <a href="#" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                  <path class="st0" d="M13.162 18.994c.609 0 .858-.406.851-.915-.031-1.917.714-2.949 2.059-1.604 1.488 1.488 1.796 2.519 3.603 2.519h3.2c.808 0 1.126-.26 1.126-.668 0-.863-1.421-2.386-2.625-3.504-1.686-1.565-1.765-1.602-.313-3.486 1.801-2.339 4.157-5.336 2.073-5.336h-3.981c-.772 0-.828.435-1.103 1.083-.995 2.347-2.886 5.387-3.604 4.922-.751-.485-.407-2.406-.35-5.261.015-.754.011-1.271-1.141-1.539-.629-.145-1.241-.205-1.809-.205-2.273 0-3.841.953-2.95 1.119 1.571.293 1.42 3.692 1.054 5.16-.638 2.556-3.036-2.024-4.035-4.305-.241-.548-.315-.974-1.175-.974h-3.255c-.492 0-.787.16-.787.516 0 .602 2.96 6.72 5.786 9.77 2.756 2.975 5.48 2.708 7.376 2.708z"></path>
                </svg>
              </a>
            </div>
            <!-- Contact -->
            <a href="#" class="button self-center">
              contact
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="h-[120vh] mt-[76px] lg:mt-[88px]">