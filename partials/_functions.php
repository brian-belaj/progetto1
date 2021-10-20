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

function get_first_photo($x){

    FIRSTPHOTO;
    
    echo FIRSTPHOTO['url'];
    $waga;

}