<?php

$mySqli = new mysqli("localhost","root","","testing");
        if ($mySqli->connect_errno)
        {
            return "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . " )" . $mysqli->connect_error;
			die("Ошибка при подключении к базе данных");
        }
        $answ1=trim($_POST['answer 1']);
        $answ2=$_POST['answer 2'];
        $answ3=$_POST['answer 3'];
        $answ4=$_POST['answer 4'];
        $answ5=$_POST['answer 5'];
        $ransw1=$_POST['Ch1'];
        $ransw2=$_POST['Ch2'];
        $ransw3=$_POST['Ch3'];
        $ransw4=$_POST['Ch4'];
        $ransw5=$_POST['Ch5'];
        $ransw=$ransw1 . ',' . $ransw2 . ',' . $ransw3 . ',' . $ransw4 . ',' . $ransw5 . ',';
        $question=$_POST['question'];
        $sql = $mySqli->query('INSERT INTO Questions (TestID,Question,Answer1,Answer2,Answer3,Answer4,Answer5,RightAnswers)
        VALUES (?s, ?s, ?s, ?s, ?s, ?s, ?s, ?s)',1,$question,$answ1, $answ2, $answ3, $answ4, $answ5,$ransw);
?>