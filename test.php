<?php 


//Функция выводит в консоли текст и возвращает то, что пользователь введёт

function get_data_from_console($text_message = "Enter value: "){
fwrite(STDOUT, $text_message);
return trim(fgets(STDIN));	
}
// получаем то, что введёт пользователь

function splitToInitials($string)
{
    $f = ucwords(strtolower($string));

    return $f;
}
//метод преобразующий строку


$f = get_data_from_console('Enter your name: ');


// выводим в консоль текст с переменной 

$f = splitToInitials($f);
print ('Hello, ' . $f . PHP_EOL);


