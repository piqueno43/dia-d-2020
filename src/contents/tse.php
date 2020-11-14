<?php
$je_topo    = true;
$je_footer  = false;
$resultado  = false;
$title = 'Tribunal Superior Eleitoral';
$resultado ?
$cards = [
    ['title'=> 'Resultado', 'icon'=> 'resultado', 'links'=> [
        ['text'=> 'Consulta web', 'subtitle'=> null, 'link'=> null, 'downloads'=> [
          ['name'=> 'Linux /', 'link'=> '#'],
          ['name'=> 'Windows /','link'=> '#'],
          ['name'=> 'MacOS','link'=> '#']
          ]
        ],
      ]
    ],
    ['title'=> 'Justificativa', 'icon'=> 'justificativa', 'links'=> [
        ['text'=> 'Formulário', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
        ['text'=> 'Postos de justificativa', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Imprensa', 'icon'=> 'imprensa', 'links'=> [
        ['text'=> 'Notícias', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
        ['text'=> 'Centro de Divulgação das Eleições (CDE)', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Candidatos', 'icon'=> 'divulgacandcontas', 'links'=> [
        ['text'=> 'DivulgaCandContas', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Denúncias', 'icon'=> 'denuncias', 'links'=> [
        ['text'=> 'Pardal', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
        ['text'=> 'WhatsApp', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Mesários', 'icon'=> 'mesarios', 'links'=> [
        ['text'=> 'Canal do Mesário', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
        ['text'=> 'Aplicativo', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> null, 'icon'=> 'justica-eleitoral', 'links'=> [
        ['text'=> 'Justiça Eleitoral', 'subtitle'=> null, 'link'=> 'https://www.justicaeleitoral.jus.br', 'downloads'=> null],
      ]
    ],
    ['title'=> null, 'icon'=> 'covid-19', 'links'=> [
        ['text'=> 'Covid-19', 'subtitle'=> 'Voto com seguranca', 'link'=> 'https://www.justicaeleitoral.jus.br/dicas-ao-eleitor', 'downloads'=> null],
      ]
    ],
  ] :
  $cards = [
    ['title'=> 'Título', 'icon'=> 'titulo', 'links'=> [
      ['text'=> 'Local de votação', 'subtitle'=> null, 'link'=> 'https://www.tse.jus.br/eleitor/titulo-e-local-de-votacao/titulo-e-local-de-votacao','downloads'=> null],
      ['text'=> 'Situação eleitoral', 'subtitle'=> null, 'link'=> 'https://www.tse.jus.br/eleitor/titulo-e-local-de-votacao/copy_of_consulta-por-nome', 'downloads'=> null],
      ['text'=> 'E-título', 'subtitle'=> null, 'link'=> null, 'downloads'=> [
          ['name'=> 'Android /', 'link'=> 'https://play.google.com/store/apps/details?id=br.jus.tse.eleitoral.etitulo&hl=pt_BR'],
          ['name'=> 'IOS','link'=> 'https://apps.apple.com/br/app/e-t%C3%ADtulo/id1320338088']
        ]
      ],
      ],
    ],
    ['title'=> 'Justificativa', 'icon'=> 'justificativa', 'links'=> [
        ['text'=> 'Formulário', 'subtitle'=> null, 'link'=> '#','downloads'=> null],
        ['text'=> 'Postos de justificativa', 'subtitle'=> null, 'link'=> 'https://apps.tse.jus.br/estruturaje-servico-ws/paginas/zonaEleitoral/consultar.xhtml', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Imprensa', 'icon'=> 'imprensa', 'links'=> [
        ['text'=> 'Notícias', 'subtitle'=> null, 'link'=> 'https://www.tse.jus.br/imprensa/noticias-tse','downloads'=> null],
        ['text'=> 'Centro de Divulgação das Eleições (CDE)', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Candidatos', 'icon'=> 'divulgacandcontas', 'links'=> [
        ['text'=> 'DivulgaCandContas', 'subtitle'=> null, 'link'=> 'http://divulgacandcontas.tse.jus.br/divulga', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Denúncias', 'icon'=> 'denuncias', 'links'=> [
        ['text'=> 'Pardal', 'subtitle'=> null, 'link'=> 'htps://play.google.com/store/apps/details?id=br.jus.trees.pardalmobile', 'downloads'=> null],
        ['text'=> 'WhatsApp', 'subtitle'=> null, 'link'=> 'https://denuncia-whatsapp.tse.jus.br/dew/rest/denuncia', 'downloads'=> null],
      ]
    ],
    ['title'=> 'Mesários', 'icon'=> 'mesarios', 'links'=> [
        ['text'=> 'Canal do Mesário', 'subtitle'=> null, 'link'=> 'https://www.justicaeleitoral.jus.br/eleicoes/mesario', 'downloads'=> null],
        ['text'=> 'Aplicativos', 'subtitle'=> null, 'link'=> null, 'downloads'=> [
          ['name'=> 'Android /', 'link'=> 'https://play.google.com/store/apps/details?id=br.jus.tse.eleitoral.mesarios'],
          ['name'=> 'IOS','link'=> 'https://apps.apple.com/br/app/mes%C3%A1rio/id1133323415']
          ]
        ],
      ]
    ],
    ['title'=> null, 'icon'=> 'justica-eleitoral', 'links'=> [
        ['text'=> 'Justiça Eleitoral', 'subtitle'=> null, 'link'=> '#', 'downloads'=> null],
      ]
    ],
    ['title'=> null, 'icon'=> 'covid-19', 'links'=> [
        ['text'=> 'Covid-19', 'subtitle'=> 'Voto com seguranca', 'link'=> '#','downloads'=> null],
      ]
    ],
  ];
?>
