<?php

namespace app\Http\controllers;

use \app\Songlist;

class ListController {
    public function index() {
        // define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        
        $song_list = Songlist::getList();
        // var_dump($song_list);

        $content = 'list/layout.php';
        include '../resources/views/html-wrapper.php';
    }
}
