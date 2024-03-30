<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_data = array(
        'Имя' => $_POST['name'],
        'Возраст' => $_POST['age'],
        'Зарплата' => $_POST['salary'],
        'Ещё что-нибудь' => $_POST['other']
    );

    $_SESSION['user_data'] = $user_data;

    header("Location: task2_3_l2.php");
    exit();
}
?>

    <!DOCTYPE html>
    <html>
<head>
    <title>Form</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="number" name="age"><br>
    Зарплата: <input type="number" name="salary"><br>
    Ещё что-нибудь: <input type="text" name="other"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
