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
function readUser()
{
    $table = '<table border="1">';

    $file = fopen('users.txt', 'r');

    if($file)
    {
        while (($buffer = fgets($file)) !== false)
        {
            $table .= '<tr>';
            $arr = explode("\t", $buffer);
            foreach ($arr as $element)
            {
                $table .= '<td>'. $element .'</td>';
            }
            $table .= '</tr>';
        }

        $table .= '</table>';
        echo $table;

    }
    fclose($file);

}
