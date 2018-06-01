<div class="container">
<ul>
    <?php foreach ($song_list as $song) : ?>
    <li class='listLine'><a href="<?= $site_url . '?page=addsong&song_id=' . $song->song_id; ?>">
        <p><?php echo $song->song_id; ?></p>
        <p><?php echo $song->song_title; ?></p>
        <p><?php echo $song->song_author; ?></p>
    </a></li>   
    <?php endforeach; ?>
</ul>
</div>
</div>