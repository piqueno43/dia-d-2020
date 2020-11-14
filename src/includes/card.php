<?php if($card['title']): ?>
    <div class="card-header"><?= $card['title']?></div>
  <?php endif;?>
  <div class="card-body">
    <img class="card-icon" src="imagens/icons/<?= $card['icon']?>.svg" alt="<?= $card['title']?>">
    <div class="card-list">
    <?php foreach ($card['links'] as $akey => $link) :?>
      <div class="card-item">
        <?php if($link['link']): ?>
          <a class="card-link" href="<?= $link['link']?>"><?= $link['text'];?><?php $link['subtitle'] && print ' | '.$link['subtitle'] ;?></a>
        <?php endif;?>
        <?php if($link['downloads']): ?>
        <?php
          if($link['link'] || $link['downloads']):?>
            <a class="card-link" href="<?=$link['link']?>"><?=$link['text'];?></a>
          <?php endif;?>
        <br /><span>Baixar:</span> </a>
        <?php
        $count = 1;
        foreach ($link['downloads'] as $akey => $alink) :?>
          <a target="_blank" class="card-download" href="<?= $alink['link']?>">
            <?= $alink['name'];?>
          </a>
        <?php
          endforeach;
          endif;
        ?>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
