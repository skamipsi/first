<?php
require 'functions.php';
$firstName = '';
$lastName = '';
$email = '';
$password = '';
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parameters = ['first_name', 'last_name', 'email', 'password'];
    foreach ($parameters as $parameter) {
        if (empty($_POST[$parameter])) {
            die('Не найден элемент ' . $parameter);
        }
    }
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (saveUser($firstName, $lastName, $email, $password)){
        //$message = 'Пользователь зарегистрирован!';
        echo 'Пользователь зарегистрирован';
        echo '<a class="external" href="reg_sub_read.html"><b><i>На главную</i></b></a>';
    }
    else {
        //$message = 'Ошибка регистрации пользователя!';
        echo 'Ошибка регистрации пользователя!';
        echo '<a class="external" href="reg_sub_read.html"><b><i>На главную</i></b></a>';
    }
}
