<!DOCTYPE html>
<html>
<head>
    <title>Доска объявлений</title>
</head>
<body>
<h1>Добавить объявление</h1>
<form action="task3_1.php" method="post">
    Email: <input type="email" name="email"><br><br>
    Выберите категорию:
    <select name="category">
        <option value="продажа">Продажа</option>
        <option value="аренда">Аренда</option>
        <option value="услуги">Услуги</option>
    </select><br><br>
    Заголовок объявления: <input type="text" name="title"><br><br>
    Текст объявления: <textarea name="content"></textarea><br><br>
    <input type="submit" value="Добавить">
</form>

<h1>Список объявлений</h1>
<table border="1">
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст объявления</th>
    </tr>
    <?php
    $files = glob("объявления/*/*.txt");
    foreach ($files as $file) {
        $data = file_get_contents($file);
        $data = explode("|", $data);
        echo "<tr>";
        foreach ($file as $fi)
        echo "<td>{$data[0]}</td>";
        echo "<td>{$data[1]}</td>";
        echo "<td>{$data[2]}</td>";
        echo "<td>{$data[3]}</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>