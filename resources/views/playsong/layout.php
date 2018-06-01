<?php

use \app\Song;

$song = Song::find($_GET['song_id']);
?>

<div class="container">
            <?php echo $song->song_embed_code; ?>
            <div class="itemDetail">
                <p class='listTitle'>Title: <?php echo $song->song_title; ?></p>
                <p class='listAuthor'>Author: <?php echo $song->song_author; ?></p>
                <p class='listDescription'>Description: <?php echo $song->song_description; ?></p>
                <p class='listDescription'>Date added: <?php echo $song->song_date_added; ?></p>
            </div>
    <?php if ($song->song_id > 1) : ?>
    <a href="<?= $site_url . '?page=playsong&song_id=' . ($song->song_id - 1); ?>">Previous song</a>
    <?php endif; ?>
    <a href="<?= $site_url . '?page=playsong&song_id=' . ($song->song_id + 1); ?>">Next song</a>
</div>