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

  <nav class="container relative z-10 mx-auto flex items-start justify-between" role="navigation">

    <?php snippet('main-menu') ?>

  </nav>

  <main id="main" class="relative z-0" role="main">