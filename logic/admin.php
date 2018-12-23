<?php
require_once 'db.php';

if(isset($_SESSION{'user_login'})){
    echo $_SESSION['user_login'] . ', welcome to amdin page';
    echo '<br>';
    echo 'You visited that page: ' . $_COOKIE['page_visit'] . ' times';
    echo '<br>';
    echo '<a href="logout.php">Logout</a>';
}else{
    die('cannot access the page');
}


