<?php
  $cards = [
    ['title'=> 'Titulo', 'icon'=> 'titulo', 'links'=> [
        ['text'=> 'Local de votação', 'subtitle'=> null, 'link'=> '#'],
        ['text'=> 'Situação eleitoral', 'subtitle'=> null, 'link'=> '#'],
        ['text'=> 'e-título', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> 'Justificativa', 'icon'=> 'justificativa', 'links'=> [
        ['text'=> 'Formulário', 'subtitle'=> null, 'link'=> '#'],
        ['text'=> 'Postos de justificativa', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> 'Imprensa', 'icon'=> 'imprensa', 'links'=> [
        ['text'=> 'Notícias', 'subtitle'=> null, 'link'=> '#'],
        ['text'=> 'Centro de Divulgação das Eleições (CDE)', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> 'Candidatos', 'icon'=> 'divulgacandcontas', 'links'=> [
        ['text'=> 'DivulgaCandContas', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> 'Denúncias', 'icon'=> 'denuncias', 'links'=> [
        ['text'=> 'Pardal', 'subtitle'=> null, 'link'=> '#'],
        ['text'=> 'WhatsApp', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> 'Mesários', 'icon'=> 'mesarios', 'links'=> [
        ['text'=> 'Canal do Mesário', 'subtitle'=> null, 'link'=> '#'],
        ['text'=> 'Aplicativo', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> null, 'icon'=> 'justica-eleitoral', 'links'=> [
        ['text'=> 'Justiça Eleitoral', 'subtitle'=> null, 'link'=> '#'],
      ]
    ],
    ['title'=> null, 'icon'=> 'covid-19', 'links'=> [
        ['text'=> 'Covid-19', 'subtitle'=> 'Voto com seguranca', 'link'=> '#'],
      ]
    ],
  ]
?>
<div class="highlights-content">
  <div class="cards-topo">
    <header class="header">
      <h2 class="header-title">Principais serviços</h2>
      <p class="header-subtitle">Tudo sobre eleições 2020</p>
    </header>
    <div class="contrast">
      <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
      </label>
      Contraste
    </div>
  </div>

  <section class="cards">
      <?php foreach ($cards as $card) : ?>
        <div class="card">
          <?php if($card['title']): ?>
            <div class="card-header"><?= $card['title']?></div>
          <?php endif;?>
          <div class="card-body">
            <img class="card-icon" src="imagens/icons/<?= $card['icon']?>.svg" alt="<?= $card['title']?>">
            <div class="card-list">
              <?php foreach ($card['links'] as $link) :?>
                <div class="card-item">
                  <a class="card-link" href="<?= $link['link']?>"><?= $link['text'];?><?php $link['subtitle'] && print ' | '.$link['subtitle'] ;?></a>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      <?php endforeach;?>
  </section>

  <footer class="footer-whatsapp">
    <h5 class="footer-whatsapp-text">Tira dúvidas eleitoral</h5>
    <button class="btn btn-whatsapp btn-block" type="button">WhatsApp (bot)</button>
  </footer>

</div>
