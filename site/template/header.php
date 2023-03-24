<?php 
error_reporting(E_ALL);
ini_set("display_errors", true);

include './products.php';
include './order.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="menu">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="about">О нас</a></li>
                <li><a href="contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
    <div class="container">