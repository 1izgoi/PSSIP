<?php
//2 задание вместе с файлом 2.php
// session_start(); // Начало сессии

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получение данных из формы
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     // Сохранение данных в сессионных переменных
//     $_SESSION['email'] = $email;
//     $_SESSION['message'] = $message;

//     // Перенаправление на страницу 2.php
//     header("Location: 2.php");
//     exit(); // Важно использовать exit после header, чтобы прекратить выполнение скрипта после перенаправления
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Ваше имя</label>
        <input name="name" value="" placeholder="Введите имя" required/><br><br>
        
        <label>Email</label>
        <input name="email" value="" placeholder="Введите почту" required/><br><br>
        
        <label>Заголовок</label>
        <input name="title" value="" placeholder="Введите заголовок"  required/><br><br>

        <label>Получатель</label>
        <select name="poluch" required>
            <option disabled hidden selected>Выберите получателя</option>
            <option>109</option>
            <option>ГГПК</option>
            <option>ГрГУ</option>
            <option>ГрГМУ</option>
            <option>ГАУК</option>
            <option>Отдел заказов</option>
            <option>ХТТ</option>
        </select><br><br>

        <label for="">Сообщение</label>
        <textarea name="message"></textarea><br><br>

        <input type="submit" value="Отправить" />
        <input type="reset" value="Сбросить" />
    </form><br><br>

    <!-- 4 задание с редактированием БД -->
    <form action="edit.php" method="post">
        <label>ID студента:</label><br>
        <input type="text" name="idStudents" required><br><br>
            
        <label>Новая сумма оплаты:</label><br>
        <input type="text" name="sumPay" required><br><br>

        <input type="submit" value="Выполнить" />
    </form>
</body>
</html>

<?php
//1 задание
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получение данных из формы
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $title = $_POST['title'];
//     $poluch = $_POST['poluch'];
//     $message = $_POST['message'];

//     // Вывод полученных данных для примера
//     echo "Ваше имя: " . $name . "<br>";
//     echo "Email: " . $email . "<br>";
//     echo "Заголовок: " . $title . "<br>";
//     echo "Получатель: " . $poluch . "<br>";
//     echo "Сообщение: " . $message . "<br>";

//     // Здесь вы можете добавить код для отправки электронной почты, базы данных и т. д.
// }

// 3 задание
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получаем значения из формы
//     $title = $_POST['title'];
//     $message = $_POST['message'];
//     $poluch = $_POST['poluch'];
    
//     // Формируем строку для записи в файл
//     $data = "Заголовок: $title\nСообщение: $message\nПолучатель: $poluch\n";
    
//     // Открываем файл для записи (если файл не существует, он будет создан)
//     $file = fopen("fio.txt", "a");
    
//     // Записываем данные в файл
//     fwrite($file, $data);
    
//     // Закрываем файл
//     fclose($file);
    
//     echo "Данные были успешно записаны в файл fio.txt.";
// }
?>