<?php

error_reporting(-1);
$website_texts = [
    'it' => [
        'title' => 'Corso Metaphora',
        'text_h1' => 'questo è il testo dell\' h1',
    ],
    'en' => [
        'title' => 'Metaphora inglese',
        'text_h1' => 'Questo è il  dell\' h1',
    ]
];
define('WEBSITE_TEXTS', $website_texts);

$menu = [
    ["titolo" => "Home", "url" => "index.php"],
    ["titolo" => "List", "url" => "list.php"],
    ["titolo" => "Details", "url" => "details.php"]
  ];


  define('WEBSITE_MENU', $menu);

  $carousel_home = [
      ['src' => 'images/immagini/IMG_4139.JPG', 'alt' => 'Immagine 1'],
      ['src' => 'images/immagini/IMG_4140.JPG', 'alt' => 'Immagine 2'],
      ['src' => 'images/immagini/IMG_4155.JPG', 'alt' => 'Immagine 3'],
      ['src' => 'images/immagini/IMG_4170.JPG', 'alt' => 'Immagine 4']
  ];
