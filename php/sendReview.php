<?php
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $midname = filter_var($_POST['middlename'], FILTER_SANITIZE_STRING);
    $secname = filter_var($_POST['secondname'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $review = filter_var($_POST['review'], FILTER_SANITIZE_STRING);
    $date = date("Y-m-d");

    //Подключаемся к БД Хост, Имя пользователя MySQL, его пароль, имя нашей базы
    $mysql = new mysqli("localhost", "maryt_cogito", "151194MmPp", "maryt_cogito" );
    
    if ($mysql->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
    }
    
    if ($result = $mysql->query("INSERT INTO `t_review` (`c_review`, `c_name`, `c_middlename`, `c_secondname`, `c_email`, `c_date`) VALUES ('$review', '$name', '$midname', '$secname', '$email', '$date')") === TRUE) {
        echo "Отзыв добавлен\n";
    };  
    

    $mysql->close();
    
?>