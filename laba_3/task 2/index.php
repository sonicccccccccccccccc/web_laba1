<?php
session_start();
if(isset($_SESSION['userData'])) {
    echo '<ul>';
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '</ul>';
}
else echo "No user data found!";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["text"])) {
        $text = $_POST["text"];
        $word_count = str_word_count($text);
        $char_count = strlen($text);
        echo "<h2>Результат:</h2>";
        echo "<p>Количество слов:$word_count</p>";
        echo "<p>Количество символов:$char_count</p>";
    }
}
?>
</body>
</html>