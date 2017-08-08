<?php

session_start();
define('APP', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once('auth.php');
} elseif (isset($_SESSION['user'])) {
    include_once('dashboard.php');
} else {
    include_once('form.php');
}
