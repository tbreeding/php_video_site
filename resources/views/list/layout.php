<div class="container">
<?php foreach ($games as $game) : ?>
    <div class="game">
        <div class="image">
            <img src="<?= $game['image_url'] ?>" />
        </div>
        <div class="info">
            <h2 class="name"><?= $game['name'] ?></h2>
            <div class="release"><?= $game['released_at'] ?></div>
            <div class="description">
                <?= $game['description'] ?>
            </div><br>
        <div class="rating"><?= $game['rating'] ?>%</div>  <br>      
    </div>
<?php endforeach; ?>
</div>
</div>