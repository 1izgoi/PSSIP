<?php
// Создаем строковую переменную s1 и s2
$s1 = "я люблю Беларусь";
$s2 = "я учусь в политехническом колледже";

// Определяем длину строки s2
$length_s2 = strlen($s2);
echo "Длина строки s2: $length_s2 <br>";

// Выделяем 21-ый символ в строке s1 и определяем его ASCII-код
$n = 21;
$char_at_n = $s1[$n - 1];
$ascii_code = ord($char_at_n);
echo "21-ый символ в строке s1: $char_at_n, его ASCII-код: $ascii_code <br>";

// Заменяем в строке s1 слово "Беларусь" на "Гродно"
$s1_modified = str_replace("Беларусь", "Гродно", $s1);
echo "Измененная строка s1: $s1_modified";
?>
