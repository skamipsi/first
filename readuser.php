<?php
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