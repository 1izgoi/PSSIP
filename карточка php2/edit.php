<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paypal";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$idStudents = $_POST['idStudents'];
$sumPay = $_POST['sumPay'];

// Подготовка и выполнение запроса на редактирование данных
$sql = "UPDATE students SET sumPay='$sumPay' WHERE idStudents='$idStudents'";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно отредактированы.<br>";
} else {
    echo "Ошибка при редактировании данных: " . $conn->error . "<br>";
}

// Вывод содержимого таблицы students после редактирования данных
$sql_select = "SELECT * FROM students";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    echo "<h2>Содержимое таблицы students после редактирования данных:</h2>";
    echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Пол</th>
        <th>Дата рождения</th>
        <th>Группа</th>
        <th>Сумма оплаты</th>
        </tr>";

    // Вывод данных каждой строки
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["idStudents"]."</td>
        <td>".$row["lastname"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["surname"]."</td>
        <td>".$row["sex"]."</td>
        <td>".$row["dateBirth"]."</td>
        <td>".$row["groupStud"]."</td>
        <td>".$row["sumPay"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Таблица students пуста.";
}

// Закрытие соединения с базой данных
$conn->close();
?>
