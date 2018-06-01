<?php

namespace app\Http\controllers;

class ListController {
    public function index() {
        // define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        include '../app/List.php';
        $content = 'list/layout.php';
        include '../resources/views/html-wrapper.php';
    }
}
