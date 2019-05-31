<?php
$mass = [1, 2, 3, 4, 5];
$result = 0;
foreach ($mass as $element)
{
    $result += $element*$element;

}
echo "Сумма квадратов элементов массива =".$result;
