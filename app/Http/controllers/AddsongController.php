<?php

namespace app\Http\controllers;


class AddsongController {
    public function index() {
        // define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        // include '../app/Song.php';
        
        $content = 'addsong/layout.php';
        include '../resources/views/html-wrapper.php';

    }
}


// playlist/?page=Addsong

//load empty form

// playlist/?page=Addsong&song=1234

//query database, grab details, put it form inputs
