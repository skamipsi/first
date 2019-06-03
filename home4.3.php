<?php
$dni = [1=>"Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
$dayNumber = date('N');
foreach ($dni as $key=>$element){
    if($key == $dayNumber) {
        print "<i>$element</i><br>";
        $day = $element;
    }
    else {
        print "$element<br>";
    }
}
