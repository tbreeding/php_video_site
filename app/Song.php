<?php

namespace app;
use \tbreeding\mvc\db;
use PDO;

class Song {

    public $song_id = null;
    public $song_title = null;
    public $song_author = null;
    public $song_description = null;
    public $song_date_added = null;
    public $song_url = null;
    public $song_embed_code = null;

    // public function __construct($date_time) {
    //     //$this->song_date_added = //grab date time
    // }

    public static function find($id) {
        $query = "
            SELECT *
            FROM `songs`
            WHERE `song_id` = ?     
        ";

        $statement = db::query($query, [$id]);

        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);

        return $statement->fetch();
    }

    public static function select($query, $values = []) {
        $statement = db::query($query, $values);

        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);

        return $statement->fetchAll();
        
    }

    public function insert() {
        $query = "
            INSERT
            INTO `songs`
            (`song_title`, `song_author`, `song_description`, `song_date_added`, `song_url`, `song_embed_code`)
            VALUES
            (?, ?, ?, ?, ?, ?)
        
        ";
        $values = [
            $this->song_title,
            $this->song_author,
            $this->song_description,
            $this->song_date_added,
            $this->song_url,
            $this->song_embed_code
        ];

        db::query($query, $values);

        $this->song_id = db::getConnection()->lastInsertId();
    }
}
    public function update() {
        $query = "
            UPDATE `songs`
            SET 
                `song_title` = ?, 
                `song_author` = ?,
                `song_description` = ?, 
                `song_url` = ?, 
                `song_embed_code` = ?
                
            WHERE `song_id` = ?     
        ";
        $values = [
            $this->song_title,
            $this->song_author,
            $this->song_description,
            $this->song_url,
            $this->song_embed_code,
            $this->song_id
        ];

        db::query($query, $values);

    }

    public function save() {  
        if ($this->song_id) {
            $this->update();
        } else {
            $this->insert();
        }
    }

}