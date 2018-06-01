<?php 

namespace app;

use \tbreeding\mvc\db;

use PDO;

class Songlist {
    
    public $song_array = [];

    public static function getList() {
        $query = "
            SELECT *
            FROM `songs`
        ";

         // run the query, get the statement
         $statement = db::query($query);

         // set the statement to fetch objects of this class
         $statement->setFetchMode(PDO::FETCH_OBJ);
 
         // fetch and return all of the results
         return $statement->fetchAll();
    }
}

