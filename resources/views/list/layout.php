<div class="container">
    <ul class='songList'>
        <li class='listLine'>
            <p class='listId listHeader'><p><p class='listTitle listHeader'>Title</p><p class='listAuthor listHeader'>Author</p><p></p><p></p>
        <?php foreach ($song_list as $key => $song) : ?>
            <li class='listLine'>
                <p class='listId'><?php echo $key + 1; ?></p>
                <p class='listTitle'><?php echo $song->song_title; ?></p>
                <p class='listAuthor'><?php echo $song->song_author; ?></p>
                <a href="<?= $site_url . '?page=addsong&song_id=' . $song->song_id; ?>">Edit</a>
                <a href="<?= $site_url . '?page=playsong&song_id=' . $song->song_id; ?>">Play</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>