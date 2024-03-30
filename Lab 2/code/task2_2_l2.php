<?php
session_start();
if (false === isset($_SESSION['name'], $_SESSION['surname'], $_SESSION['age'])) {
    echo "Произошла какая-то ошибка.";
} else {
    echo "ФИО: ", $_SESSION['surname']." ".$_SESSION['name']." ".$_SESSION['age'];
}