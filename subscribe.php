<?php
require 'functions.php';

$email = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $parameter = 'email';

        if (empty($_POST[$parameter]))
        {
            echo '<br><a class="external" href="reg_sub_read.html"><b><i>На главную</i></b></a><br>';
            die('Не найден элемент ' . $parameter);
        }

        $email = $_POST['email'];
        if (saveEmail($email) === true)
        {
        echo 'Вы подписались успешно <br>';
        echo '<a class="external" href="reg_sub_read.html"><b><i>На главную</i></b></a>';
        }
    else
        {
        echo 'Ошибка при подписке пользователя!<br>';
        echo '<a class="external" href="reg_sub_read.html"><b><i>На главную</i></b></a>';
        }
}
