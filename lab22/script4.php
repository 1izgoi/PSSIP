<?php
// Создаем пустой массив
$numbers = [];

// Заполняем массив 5 случайными целыми числами от -10 до 10
for ($i = 0; $i < 5; $i++) {
    $numbers[] = rand(-10, 10);
}

// Выводим массив на экран
echo "Массив: ";
print_r($numbers);
echo "<br>";

// Находим сумму положительных элементов в массиве
$sum = 0;
foreach ($numbers as $num) {
    if ($num > 0) {
        $sum += $num;
    }
}

// Выводим сумму положительных элементов на экран
echo "Сумма положительных элементов: $sum";
?>
