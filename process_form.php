<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $file = "data.txt";
    $fileHandle = fopen($file, "a");
    if ($fileHandle) {
        $data = "Им'я користувача: $username\nПароль: $password\nEmail: $email\n\n";
        fwrite($fileHandle, $data);
        fclose($fileHandle);
        echo "Дані були збережені у файлі.";
    } else {
        echo "Помилка при відкритті файлу для запису.";
    }
} else {
    echo "Помилка: невірний метод запиту.";
}
?>
