<?php
     function get_reviews(){
        //Подключаемся к БД Хост, Имя пользователя MySQL, его пароль, имя нашей базы
        $mysql = new mysqli("localhost", "maryt_cogito", "151194MmPp", "maryt_cogito" );

        if ($mysql->connect_errno) {
           echo "Не удалось подключиться к MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
        }
        $result = $mysql->query("SELECT `c_review`, `c_name`, `c_middlename`, `c_secondname`, `c_date` FROM `t_review`");

        if ($result === TRUE) {
           echo "Данные получены\n";
        };


        while ($reviews = $result->fetch_all(1)){
           // print_r($reviews);
           // return $reviews;
           return $reviews;
        }
      
        exit;

        $mysql->close();
    }
    