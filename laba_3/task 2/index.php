<?php
session_start();
if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
}
if (isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["age"])) {
    echo "Имя: " . $_SESSION["name"] . "<br>";
    echo "Фамилия: " . $_SESSION["surname"] . "<br>";
    echo "Возраст: " . $_SESSION["age"] . "<br>";
} else {
    echo "Данные о пользователе не найдены в сессии.";
}
?>