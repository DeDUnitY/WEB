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
    $host = 'db';
    $user = 'root';
    $password = 'helloworld';
    $database = 'web';

    $mysqli = new mysqli($host, $user, $password, $database);

    $link = $mysqli->query("SELECT email, category, title, description FROM ad");
    while ($row = $link->fetch_assoc()) {?>
        <tr>
            <?php
            foreach(['email', 'category', 'title', 'description'] as $item) {?>
                <td><?php echo $row[$item];?></td>
                <?php
            }?>
        </tr>
        <?php
    }
    $link->close();
    $mysqli->close();
    ?>
</table>
</body>
</html>
