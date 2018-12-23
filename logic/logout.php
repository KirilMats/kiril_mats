<?php   
require_once 'db.php';

//Удаление сессии, куки, хранилища текущей сессии
$_SESSION = [];

if( isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-3600, '/');
}

session_destroy();

header('Location: signin.php'); //Редирекция на страницу авторизации