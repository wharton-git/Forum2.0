<?php

session_status() === PHP_SESSION_NONE ? session_start() : null;

if(!isset($_SESSION['auth'])){
    header('Location: login.php');
}