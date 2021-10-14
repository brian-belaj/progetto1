<?php

error_reporting(-1);
$website_texts = [
    'it' => [
        'title' => 'Corso Metaphora',
        'text_h1' => 'questo è il testo dell\' h1',
        'intro' => 'questo è il testo dell\' intro',
        'r_m_btn' => 'Leggi di più',
    ],
    'en' => [
        'title' => 'Metaphora inglese',
        'text_h1' => 'this is the H1 text',
        'intro' => 'this is the intro text',
        'r_m_btn' => 'Read More',
    ]
];
define('WEBSITE_TEXTS', $website_texts);

$menu = [
    ["titolo" => "Home", "url" => "index.php"],
    ["titolo" => "List", "url" => "list.php"],
    ["titolo" => "Details", "url" => "details.php"],
  ];

  define('WEBSITE_MENU', $menu);

  $carousel_home = [
      ['src' => 'images/immagini/IMG_4139.JPG', 'alt' => 'Immagine 1'],
      ['src' => 'images/immagini/IMG_4140.JPG', 'alt' => 'Immagine 2'],
      ['src' => 'images/immagini/IMG_4155.JPG', 'alt' => 'Immagine 3'],
      ['src' => 'images/immagini/IMG_4170.JPG', 'alt' => 'Immagine 4'],
  ];

  $news = [
    ['immagine' => '/images/immagini/IMG_4155.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 1', 'testo' => 'Testo 1 eccetera', 'data' => 'Data1'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo 2', 'testo' => 'Testo 2 eccetera', 'data' => 'Data2'],
    ['immagine' => '/images/immagini/IMG_4170.jpg', 'alt' => 'Immagine3', 'titolo' => 'Titolo 3', 'testo' => 'Testo 3 eccetera', 'data' => 'Data3'],
    ['immagine' => '/images/immagini/IMG_4139.jpg', 'alt' => 'Immagine4', 'titolo' => 'Titolo 4', 'testo' => 'Testo 4 eccetera', 'data' => 'Data4'],
];

define('NEWS', $news);

$articles = [
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 1', 'testo' => 'Testo 1 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo 2', 'testo' => 'Testo 2 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine3', 'titolo' => 'Titolo 3', 'testo' => 'Testo 3 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine4', 'titolo' => 'Titolo 4', 'testo' => 'Testo 4 eccetera'],
];

define('ARTICLES', $articles);