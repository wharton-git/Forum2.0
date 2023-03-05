<?php

session_status() === PHP_SESSION_NONE ? session_start() : null;

try{
    $bdd = new PDO('mysql:host=192.168.88.27;dbname=forum;charset=utf8;','nomena','noob');
}catch(Exception $e){
    die("Error :".$e->getMessage());
}