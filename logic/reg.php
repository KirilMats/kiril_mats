<?php
require_once 'db.php';

$login = trim($_POST['login']); //trim удаляет пробелы сначала и конца строки
$pwd = trim($_POST['pwd']);

if( !empty($login) && !empty($pwd)){

    // Проверка существования пользователя 
    $sql_check = 'SELECT EXISTS( SELECT login FROM users WHERE login = :login )';
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute( [':login' => $login]);
    
    if( $stmt_check->fetchColumn()){
        die('User already exists');
    }
    
    $pwd = password_hash($pwd, PASSWORD_DEFAULT); // Шифрование пароля

    $sql = 'INSERT INTO users(login, password) VALUES(:login, :pwd)';
    $params = [ 'login' => $login, ':pwd' => $pwd ];

    $stmt =$pdo->prepare($sql);
    $stmt->execute($params);

    echo 'You have successfully registered';
    echo '<br><a href="signin.php">Authorization page</a>';

} else{
    echo 'Please fill all fields';
}