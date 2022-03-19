<?php
    $email = trim($_POST['email']);
    $password = trim($_POST['passw']);
    if($email && $password){

        $mySql = new mysqli("localhost","root","","testing");
            if ($mySql->connect_errno)
            {
                return "Не удалось подключиться к MySQL: (" . $mysql->connect_errno . " )" . $mysql->connect_error;
                die("Ошибка при подключении к базе данных");
            }
        //$mySql->set_charset("utf8");
        $result=mysqli_query($mySql,"SELECT email,password FROM users WHERE email LIKE '".$email."'");
        if ($result)
        {
            $myr=$result->fetch_assoc();
            if (empty($myr["email"]) || $password!==$myr["password"]){
                echo('Неверный логин или пароль!');
            }
            else{
                session_start();
                $_SESSION['email'] = $myr["email"];
                header('Location: main');exit();
            }
        }
    }
?>