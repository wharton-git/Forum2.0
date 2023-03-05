<?php
session_status() === PHP_SESSION_NONE ? session_start() : null;

$_SESSION = [];
session_destroy();
header('Location: ../index2.php');