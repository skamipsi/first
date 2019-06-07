<?php

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
