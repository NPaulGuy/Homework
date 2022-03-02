<?php
/**
 * Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее. 
 * Решите задачу через switch-case. 
 */
$num = 4;
switch($num) {
    case 1: 
        echo "Зима";
        break;
    case 2: 
        echo "Весна";
        break;
    case 3: 
        echo "Лето";
        break;
    case 4: 
        echo "Осень";
        break;
    default:
        echo "???";
        break;
}