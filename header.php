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

  <header>
    <nav>nav goes here</nav>
  </header>

  <main>