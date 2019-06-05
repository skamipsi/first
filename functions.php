<?php

function saveUser(string $firstName, string $lastName, string $email, string $password): bool
{
    $file = fopen('users.txt', 'a');
    if($file === false){
        return false;
    }


    $row = sprintf("%s\t%s\t%s\t%s\n", $firstName, $lastName, $email, $password);
    fputs($file, $row);
    fclose($file);
    return true;
}

function readUser(): array
{
    $file = fopen('users.txt', 'r');

    if ($file) {
        while (($buffer = fgets($file, 4096)) !== false) {
            echo $buffer;
            $arr = explode("\t", $buffer);

            var_dump($arr);
        }
        if (!feof($file)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";

        }
    }
    fclose($file);

}