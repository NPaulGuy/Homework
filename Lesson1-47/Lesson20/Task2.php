<?php
/**
 * Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.
 */
?>
<form method="POST">
    <label>Какие языки Вы знаете?</label><br>
    <label>HTML</label>
    <input type="checkbox" name="lang[]" value="HTML"><br>
    <label>CSS</label>
    <input type="checkbox" name="lang[]" value="CSS"><br>
    <label>PHP</label>
    <input type="checkbox" name="lang[]" value="PHP"><br>
    <label>Javascript</label>
    <input type="checkbox" name="lang[]" value="Javascript"><br>
    <input type="submit" value="Ввод">
</form>
<?php
if (!empty($_POST['lang'])) {
    echo "Вы знаете следующие языки:<br>";
    foreach ($_POST['lang'] as $lang) {
        echo $lang . "<br>";
    }
}