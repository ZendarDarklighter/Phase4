<?php

define (DB_HOST, 'localhost');
define (DB_NAME, 'phase4');
define (DB_USER, 'carl');
define (DB_PWD, '1234');
define (MYSQL_CONNECTION_STRING, 'mysql:host='.DB_HOST.';dbname='.DB_NAME);
define (dash, 1);
ini_set('display_errors', 1);

global $content;


function get_text_dump($page){

    global $content;
    
    try{
        $pdo= new PDO(MYSQL_CONNECTION_STRING, DB_USER, DB_PWD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        #echo "connected to data base<br/>";

        $sql = "SELECT contenttype, content FROM textdump WHERE pagename='". $page."'";

        $result_set = $pdo->query($sql);
        $sql = NULL;
        $content = $result_set->fetchAll(PDO::FETCH_ASSOC);

       # echo "content extracted";
    }
    catch(PDOExceptoin $e){
        echo"did not connect";
        die();
    }
}

function get_research(){
    
        global $content;
        
        try{
            $pdo= new PDO(MYSQL_CONNECTION_STRING, DB_USER, DB_PWD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            #echo "connected to data base<br/>";
    
            $sql = "SELECT content, url FROM research";
    
            $result_set = $pdo->query($sql);
            $sql = NULL;
            $content = $result_set->fetchAll(PDO::FETCH_ASSOC);
    
            #echo "content extracted";
        }
        catch(PDOExceptoin $e){
            echo"did not connect";
            die();
        }
    }

function display_content($value){
    if($value == NULL){
        echo "sql returned blank";
    }

    foreach($value as $option){
            echo '<p>'. $option['content'] .'</p>';
    }
}

function display_undergrad_content($value){
    if($value == NULL){
        echo "sql returned blank";
    }

    foreach($value as $option){
        if($option['contenttype']== 'h'){
            echo '<h2>'.$option['content'].'</h2>';
        }else{ 
            echo '<p>'. $option['content'] .'</p>';
        }
       
    }
}

function display_research_content($value){
    if($value == NULL){
        echo "sql returned blank";
    }

    #imagine standing at the grand canyon 
    echo " <h2>List of Research Topics:</h2><br/>";
    echo "<div class='vertical-menu'>";

    foreach($value as $option){
        
        echo '<a href='.$option['url'].'>'.$option['content'].'</a><br/>';

    }
        echo "</div>";
}
    

?>