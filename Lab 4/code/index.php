<!DOCTYPE html>
<html>
<head>
    <title>Доска объявлений</title>
</head>
<body>
<h1>Добавить объявление</h1>
<form method="post" action="add.php">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="category">Категория:</label>
    <select name="category" id="category" required>
        <option value="folder1">продажа 1</option>
        <option value="folder2">аренда 2</option>
        <option value="услуги">Услуги</option>
    </select><br>

    <label for="title">Заголовок:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="text">Текст объявления:</label>
    <textarea name="text" id="text" required></textarea><br>

    <input type="submit" value="Добавить">
</form>

<h2>Объявления</h2>
<table>
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст</th>
    </tr>
    <?php
    require 'vendor/autoload.php';

    $range = 'mytest!A2:D';

    $client = new Google\Client();
    $client->setApplicationName('Ads Board');
    $client->setScopes(Google\Service\Sheets::SPREADSHEETS);
    $client->setAuthConfig(__DIR__ . "/credentials.json");

    $service = new Google\Service\Sheets($client);
    $spreadsheetId = '1oKEFEFrcKETqim6PowdySjgL1Ru9IrSZY46yXXvK2T0';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();

    // Выведите данные в таблицу

    foreach ($values as $row) {
        echo '<tr>';
        echo '<td>' . $row[0] . '</td>';
        echo '<td>' . $row[1] . '</td>';
        echo '<td>' . $row[2] . '</td>';
        echo '<td>' . $row[3] . '</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>