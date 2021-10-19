<?php
error_reporting(-1);
$website_texts = [
    'it' => [
        'title' => 'Corso Metaphora italiano',
        'text_h1' => 'questo è il testo dell\' h1',
        'intro' => 'Questa è l\'introduzione',
        'info' => 'More info...',
    ],
    'en' => [
        'title' => 'Metaphora inglese',
        'text_h1' => 'Questo è il testo dell\' h1',
    ]
];
define('WEBSITE_TEXTS', $website_texts);

$menu = [
    ["titolo" => "Home", "url" => "index.php"],
    ["titolo" => "List", "url" => "list.php"],
    ["titolo" => "Details", "url" => "details.php"]
  ];

define('WEBSITE_MENU', $menu);
/* nell'header.php */


/*CAROUSEL********************************/

$sth = $pdo->prepare("SELECT * FROM carousel WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$carousel_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*$carousel_home = [
    ['src' => 'images/static_assets/IMG_4139.JPG', 'alt' => 'Immagine 1'],
    ['src' => 'images/static_assets/IMG_4140.JPG', 'alt' => 'Immagine 2'],
    ['src' => 'images/static_assets/IMG_4155.JPG', 'alt' => 'Immagine 3'],
    ['src' => 'images/static_assets/IMG_4170.JPG', 'alt' => 'Immagine 4']
];*/

/*NEWS********************************/

$sth = $pdo->prepare("SELECT * FROM news WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$news_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*$news = [
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 1', 'testo' => 'Testo 1 eccetera', 'data' => 'Data1'],
    ['immagine' => '/images/immagini/IMG_4155.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo 2', 'testo' => 'Testo 2 eccetera', 'data' => 'Data2'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 3', 'testo' => 'Testo 3 eccetera', 'data' => 'Data3'],
    ['immagine' => '/images/immagini/IMG_4155a.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 4', 'testo' => 'Testo 4 eccetera', 'data' => 'Data4']
];
define('NEWS', $news);*/

/*ARTICLE********************************/

$sth = $pdo->prepare("SELECT * FROM article WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$article_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*$articles = [
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine1', 'titolo' => 'Titolo 1', 'testo' => 'Testo 1 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine2', 'titolo' => 'Titolo 2', 'testo' => 'Testo 2 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine3', 'titolo' => 'Titolo 3', 'testo' => 'Testo 3 eccetera'],
    ['immagine' => '/images/immagini/IMG_4175.jpg', 'alt' => 'Immagine4', 'titolo' => 'Titolo 4', 'testo' => 'Testo 4 eccetera'],
];

define('ARTICLES', $articles);*/

/**DETAIL*******************************/
$sth = $pdo->prepare("SELECT * FROM details_immagini WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$details_img = $sth->fetchAll(\PDO::FETCH_ASSOC);


$sth = $pdo->prepare("SELECT * FROM details WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$details_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/**NON FUNZIONA UN CAZZO*******************************/



/*NEWS_PROVA*******************************/

$sth = $pdo->prepare("SELECT * FROM news_prova WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$news_prova_home = $sth->fetchAll(\PDO::FETCH_ASSOC);

/*NEWS_PROVA CON VISUALIZZAZIONE SOLO PER NOVEMBRE*******************************/

/*$sth = $pdo->prepare("SELECT * FROM news_prova WHERE attivo=1 AND data_news BETWEEN '2021-11-01' AND '2021-11-30' ORDER BY ordine");
$sth->execute();

$news_prova_home = $sth->fetchAll(\PDO::FETCH_ASSOC);*/


$sth = $pdo->prepare("SELECT * FROM article_prova WHERE attivo=1 ORDER BY ordine");
$sth->execute();

$article_prova_home = $sth->fetchAll(\PDO::FETCH_ASSOC);
