<?php
   
    function connectDb() {
        $sgbd = 'mysql';
        $db_name = 'magic_form_romilly_sur_seine';
        $host = 'localhost';
        $user = 'root';
        $password = '';

        try {
            $db = new PDO("$sgbd:dbname=$db_name;host=$host", $user, $password);
            return $db;

        } catch ( PDOException $e ) {          
            echo 'Erreur : '. $e->getMessage();
            die();
        } 
        return;
    }