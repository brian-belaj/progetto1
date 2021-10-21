<?php 

function __($key, $lang = 'it') {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'it', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    if (isset( WEBSITE_TEXTS[$lang][$key])) {
        return WEBSITE_TEXTS[$lang][$key];
    }
    else {
        return $key . " missing translation";
    }
}

function getArticleFoto($pdo, $article){
    $article_id= $article["id"];
    $array_return = [
        "immagine"=> null,
        "alt" => null
    ];
    $sth = $pdo->prepare("SELECT * FROM articles_photo WHERE articles_id = $article_id ORDER BY ordine LIMIT 1");
$sth->execute();
$article_photo = $sth->fetch(\PDO::FETCH_ASSOC);
if ($article_photo && is_array($article_photo)){
    $array_return['immagine'] = $article_photo['url'];
    $array_return['alt'] = $article_photo['alt'];

}
return $array_return;

}