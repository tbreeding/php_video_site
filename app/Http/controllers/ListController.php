<?php

namespace app\Http\controllers;

class ListController {
    public function index() {
        define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        include '../data/get_list.php';
        $content = 'listPage/layout.php';
        include '../resources/views/html-wrapper.php';
    }
}
