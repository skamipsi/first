<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home 4.1</title>

</head>
<body>

<?php
$mass = [1 2 3 4 5];
$result = 0;
foreach ($mass as $element)
{
    $result += $element*$element;

}
echo "Сумма квадратов элементов массива =".$result;
var_dump($result);
?>

</body>
