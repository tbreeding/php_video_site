<?php

namespace app\Http\controllers;


class PlaysongController {
    public function index() {
        // define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        // include '../app/Song.php';
        $content = 'playsong/layout.php';
        include '../resources/views/html-wrapper.php';

    }
}