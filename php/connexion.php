<?php
    try {
        $db= new PDO('mysql:host=localhost; dbname=MENTORSHIP', 'root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    } catch (Exception  $e) {
        die('error:' .$e->getMessage());
    }





?>