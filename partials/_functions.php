<?php 

function __($key, $lang = 'it') {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'it', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    return WEBSITE_TEXTS[$lang][$key];
}