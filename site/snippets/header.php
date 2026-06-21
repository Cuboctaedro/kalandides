<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

?>
<!DOCTYPE html>
<html lang="<?= $kirby->languageCode() ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

  <?= css('assets/main.css') ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>

<body class="group/body font-serif bg-stone-100 text-stone-800">
  <?php snippet('skiplink') ?>

  <div class="container relative z-10 mx-auto px-4 flex items-center justify-between h-18" role="navigation">

    <header class="relative z-10">
      <?php snippet('site-title') ?>
    </header>

    <?php snippet('double-menu') ?>

  </div>

  <main id="main" class="relative z-0" role="main">