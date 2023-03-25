  </div>

  <footer class="footer">
    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <?php if ($about = page('about')): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>
  </footer>
<?= js('assets/js/halkaBox.min.js', true) ?>

<script>

        window.onload = function () {
            halkaBox.run("gallery1");
            halkaBox.run("gallery2");
            halkaBox.run("gallery3");
            halkaBox.run("gallery4");
            halkaBox.run("gallery5");
            halkaBox.run("gallery6");
            halkaBox.run("gallery7");
            }
</script>
</body>
</html>
