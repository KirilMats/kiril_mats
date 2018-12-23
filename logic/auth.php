<?php
require_once 'db.php';

$login = trim($_POST['login']); //trim удаляет пробелы сначала и конца строки
$pwd = trim($_POST['pwd']);

if( !empty($login) && !empty($pwd)){

    $sql = 'SELECT login, password FROM users WHERE login = :login';
    $params = [ ':login' => $login ];

    $stmt =$pdo->prepare($sql);
    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user){

        if(password_verify($pwd, $user->password)){
            $_SESSION['user_login'] = $user->login;
            header('Location: admin.php');
            echo 'You have successfully authorized';
        }else{
            echo 'Wrong login or password';
        }
    }else{
        echo 'Wrong login or password';
    }
}else{
    echo 'Please fill all fields';
}