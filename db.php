<?php
    session_start();

    try {
        $db = new PDO("mysql:host=localhost;dbname=auth", "root", "");
    } catch ( PDOException $e ){
        print $e->getMessage();
    }

    //session_destroy();
?>