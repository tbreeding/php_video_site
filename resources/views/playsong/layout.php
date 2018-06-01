<?php

use \app\Song;

$song = Song::find($_GET['song_id']);
?>

<div class="container" id="play">
    <div class="songWindow">
            <?php echo $song->song_embed_code; ?>
            <div class="itemDetail">
                <p class='listTitle'>Title: <?php echo $song->song_title; ?></p>
                <p class='listAuthor'>Author: <?php echo $song->song_author; ?></p>
                <p class='listDescription'>Description: <?php echo $song->song_description; ?></p>
                <p class='listDescription'>Date added: <?php echo $song->song_date_added; ?></p>
            </div>
    </div>
    <?php if ($currSong_index >= 1) : ?>
    <a href="<?= $site_url ?>?page=playsong&song_id=<?= $song_list[$currSong_index - 1]->song_id ?>">Previous song</a>
    <?php endif; ?>
    <?php if ($currSong_index < count($song_list) - 1) : ?>
    <a href="<?= $site_url ?>?page=playsong&song_id=<?= $song_list[$currSong_index + 1]->song_id ?>">Next song</a>
    <?php endif; ?>
</div>