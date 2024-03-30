<?php
echo "<pre>";

if ($_POST)
{
    $text = '';
    if (false != isset($_POST['text'])) {
        $text = $_POST["text"];
    }
    echo 'Количество символов: ', strlen($text), "\n";
    echo 'Количество слов: ', str_word_count($text), "\n";}


?>
<form method="post">
    <textarea name="text"></textarea>
    <input type="submit" value="Расчёт" />
</form>