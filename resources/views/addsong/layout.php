<?php
use \app\Song;

if(!isset($_GET['song_id'])) {
    //show an empty form and let people add a song
    $song = new Song();    
} else {
    //grab the details from the database and stick them in the form
    $song = Song::find($_GET['song_id']);
}

if(isset($_POST) && $_POST != null) {

    $song->song_title = $_POST['song_title'];
    $song->song_author = $_POST['song_author'];
    $song->song_description = $_POST['song_description'];
    $song->song_date_added = ($song->song_date_added === null) ? date('Y-m-d H:i:s') : $song->song_date_added;
    $song->song_url = $_POST['song_url'];
    $song->song_embed_code = $_POST['song_embed_code'];

    $song->save();

    header("Location: /?page=addsong&song_id={$song->song_id}");
} 
?>

<div class="container">
    <h2>Add/Update Song</h2>
    <form action="" method="POST">
        <div class="formLine">
            <h4 class="label">Title:</h4>
            <input type="text" name="song_title" value="<?= $song->song_title ?>"/>
        </div>
        <div class="formLine">
            <h4 class="label">Author:</h4>
            <input type="text" name="song_author" value="<?= $song->song_author ?>"/>
        </div>
        <div class="formLine">
            <h4 class="label">Description:</h4>
            <input type="text" name="song_description" value="<?= $song->song_description ?>"/>
        </div>
        <div class="formLine">
            <h4 class="label">URL:</h4>
            <input type="text" name="song_url" value="<?= $song->song_url ?>"/>
        </div>
        <div class="formLine">
            <h4 class="label">Embed Code:</h4>
            <textarea name="song_embed_code" value="<?= $song->song_embed_code ?>"></textarea>
        </div>
        <div class="buttons">
        <input type='submit' value="Save / Update" /><button class='delete'>Delete Song</button>
        </div>
    </form>





</div>