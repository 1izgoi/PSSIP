<?php
session_start(); // Начало сессии

// Проверка наличия данных, отправленных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Сохранение данных в сессионных переменных
    $_SESSION['user_email'] = $email;
    $_SESSION['user_message'] = $message;
}

// Проверка наличия сессионных переменных
if (isset($_SESSION['user_email']) && isset($_SESSION['user_message'])) {
    $email = $_SESSION['user_email'];
    $message = $_SESSION['user_message'];

    // Вывод данных на страницу
    echo "Email: $email<br>";
    echo "Сообщение: $message<br>";

    // Очистка сессионных переменных, если нужно
    unset($_SESSION['user_email']);
    unset($_SESSION['user_message']);
} else {
    echo "Данные пользователя не найдены.";
}
?>
