<?php

session_status() === PHP_SESSION_NONE ? session_start() : null;

try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;','root','');
}catch(Exception $e){
    die("Error :".$e->getMessage());
}