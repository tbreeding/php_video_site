<?php 

namespace app\Http\controllers;

use app\Song;

class DeletesongController {
    public function index() {
        // define('IN_PRODUCTION', true);

        $site_url = SITE_URL;
        // include '../app/Song.php';

        if (isset($_GET['delete_id'])) {
            Song::delete($_GET['delete_id']);
        }

        header("Location: {$site_url}");

    }
}