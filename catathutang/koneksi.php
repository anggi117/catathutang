<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'tokogame_id';

    try{
        $connect = new PDO("mysql:host=$host;dbname=$db_name",$user,$pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Errornya adalah : $e->getMessage()");
    }
?>

<?php 
    session_start();
?>