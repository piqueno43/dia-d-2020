<div class="cards-content">
  <?php include __DIR__. '/cards-topo.php'; ?>
  <section class="cards <?php $resultado && print 'cards-resultado';?>">
      <?php foreach ($cards as $card) : ?>
        <div class="card">
        <?php include __DIR__. '/card.php'; ?>
      <?php endforeach;?>
  </section>
  <?php include __DIR__. '/cards-footer.php';?>
</div>
