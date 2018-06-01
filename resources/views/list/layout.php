<div class="container">
    <ul>
        <?php foreach ($song_list as $song) : ?>
            <li class='listLine'>
                <p class='listId'><?php echo $song->song_id; ?></p>
                <p class='listTitle'><?php echo $song->song_title; ?></p>
                <p class='listAuthor'><?php echo $song->song_author; ?></p>
                <a href="<?= $site_url . '?page=addsong&song_id=' . $song->song_id; ?>">Edit</a>
                <a href="<?= $site_url . '?page=playsong&song_id=' . $song->song_id; ?>">Play</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>