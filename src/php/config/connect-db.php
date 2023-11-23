<?php
    require_once("config.php");

    function connectDb() {
        global $DB_SGBD, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;

        try {
            $db = new PDO($DB_SGBD . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
            return $db;

        } catch (PDOException $e) {          
            echo 'Erreur : '. $e->getMessage();
            die();
        } 
        return;
    }