<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/index.css', '@auto']) ?>
  <?= css(['assets/css/halkaBox.min.css', '@auto']) ?>
        <style>
          body {
            cursor: url(<?php echo $site->file('cursor.cur')->url() ?>) 15 -22, auto;
          }
</style>

</head>
<body>

  <div class="page">
    <header class="header">
      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">

      </nav>
    </header>

