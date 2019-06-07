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
    fclose($file);
    echo '<a class="external" href="reg_sub_read.html"><b><i>На главную</i></b></a>';

}
