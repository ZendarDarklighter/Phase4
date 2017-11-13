<?php

define (DB_HOST, 'localhost');
define (DB_NAME, 'phase4');
define (DB_USER, 'carl');
define (DB_WORD, '1234');
define (MYSQL_CONNECTION_STRING, 'mysql:host='.DB_HOST.';dbname='.DB_NAME);

function get_text_dump_content(){
    try{
        $pdo = new PDO (MYSQL_CONNECTION_STRING, DB_USER, DB_WORD);
        $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT content FROM textdump WHERE pagename='home'";

        $result_set = $pdo->query($sql);
        $sql = NULL;
        $content = $result_set->fetchAll(PDO::FETCH_ASSOC);

    }
    catch(PDOExceptoin $e){
        die($e->getMessage());
    }
}

function display_content($content){
    foreach($content as $value){
        echo "<p> $value </p>";
}
    }
?>