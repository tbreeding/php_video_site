<div class="container">
<ul>
    <?php foreach ($song_list as $song) : ?>
    <li class='listLine'><a href="">
        <p><?php echo $song->song_id; ?></p>
        <p><?php echo $song->song_title; ?>e</p>
        <p><?php echo $song->song_author; ?></p>
    </a></li>   
    <?php endforeach; ?>
</ul>
</div>
</div>