<?php
session_start();

$user_data = $_SESSION['user_data'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
<ul>
    <?php
    foreach ($user_data as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    ?>
</ul>
</body>
</html>