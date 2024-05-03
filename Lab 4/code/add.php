<?php
require_once __DIR__ . '/vendor/autoload.php';

// Установите права доступа
$client = new Google_Client();
$client->setApplicationName('Ads Board');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(__DIR__ . "/credentials.json");

$service = new Google_Service_Sheets($client);
$spreadsheetId = '1oKEFEFrcKETqim6PowdySjgL1Ru9IrSZY46yXXvK2T0'; // ID вашей Google таблицы

// Получите данные из формы
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$text = $_POST['text'];

// Добавьте новую строку в таблицу
$range = 'mytest!A:D'; // Название листа и диапазон столбцов
$values = [
    [$email, $category, $title, $text],
];
$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = ['valueInputOption' => 'RAW'];
$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

// Перенаправьте пользователя обратно на главную страницу
header('Location: index.php');
