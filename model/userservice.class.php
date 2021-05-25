<?php
require_once __DIR__ . '/../app/database/db.class.php';
require_once __DIR__ . '/player.class.php';

class UserService
{

    protected $players;
    function update($player){
        try
        {
            $db = DB::getConnection();
            $st = $db->prepare( "INSERT INTO id (playerName, score, cheated,level) 
            VALUES ('" .$player->name ."','" . $player->score."','".$player->cheated."','". $player->level   ."')");
            $st->execute();
        }
        catch( PDOException $e ) { exit( 'PDO error ' . $e->getMessage() ); }
    }
    function getTableFromSQL(){
        $tableName="id";

        try
        {
            $db = DB::getConnection();
            $st = $db->prepare( 'SELECT * FROM users WHERE name=' . '');
            $st->execute();
        }
        catch( PDOException $e ) { exit( 'PDO error ' . $e->getMessage() ); }

        $this->players=[];
        while( $row = $st->fetch() )
		{
            $this->players[]= new Player($row['id'], $row['playerName'],$row['score'], $row['cheated'], $row['date'],$row['level']);
        }

    }  
    
    function __construct() {
		
		//$this->getTableFromSQL();
		
        
    }

    function getAllPlayers(){
        return $this->players;
    }

    function checkUser(){
        return TRUE;
    }


}
?>