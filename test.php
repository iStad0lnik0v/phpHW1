<?php 


//Функция выводит в консоли текст и возвращает то, что пользователь введёт

function get_data_from_console($text_message = "Enter value: "){
fwrite(STDOUT, $text_message);
return trim(fgets(STDIN));	
}
// получаем то, что введёт пользователь

function splitToInitials($string)
{
    list($second,$first) = explode(' ',$string,2);
    $firstName = mb_substr(ucfirst($first), 0,1);
    $lastName = mb_substr(ucfirst($second), 0,1);
    return $f = $lastName . '. ' . $firstName;
}
//метод преобразующий строку


$f = get_data_from_console('Enter your name: ');


// выводим в консоль текст с переменной 

$f = splitToInitials($f);
print ('Hello, ' . $f . PHP_EOL);


