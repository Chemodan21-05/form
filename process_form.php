<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Путь к файлу, в который будут записываться данные
    $file = "data.txt";

    // Открываем файл для записи
    $fileHandle = fopen($file, "a");

    if ($fileHandle) {
        // Форматируем данные и записываем их в файл
        $data = "Им'я користувача: $username\nПароль: $password\nEmail: $email\n\n";
        fwrite($fileHandle, $data);

        // Закрываем файл
        fclose($fileHandle);

        echo "Дані були збережені у файлі.";
    } else {
        echo "Помилка при відкритті файлу для запису.";
    }
} else {
    echo "Помилка: невірний метод запиту.";
}
?>
