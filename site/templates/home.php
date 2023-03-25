<?php snippet('header') ?>

<main>
  <header class="intro">
       <img class="logo" src="assets/img/nyco_logo.png" alt="nyco_logo" />
    <h1><?= $site->title() ?></h1>
    <hr>
    <h1>Kevin Cadena // Spring 2019</h1>
  </header>

<div class="bdwrap">
<?php foreach ($pages->listed() as $section): ?>
<div class="section">
<h1><?=$section->title() ?></h1>
<hr>
<?= $section->text()->kirbytext() ?>
</div>

<?php endforeach ?>
</div>
</main>
<script>




</script>
<?php snippet('footer') ?>
