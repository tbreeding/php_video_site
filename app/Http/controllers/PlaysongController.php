<?php

namespace app\Http\controllers;
use app\Songlist;

class PlaysongController {
    public function index() {
        // define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        $song_list = Songlist::getList();
        if(isset($_GET['song_id'])) {
            foreach($song_list as $key => $song) {
                if($song->song_id == $_GET['song_id']) {
                    $currSong_index = $key;
                }
            }
        }
        $content = 'playsong/layout.php';
        include '../resources/views/html-wrapper.php';

    }
}