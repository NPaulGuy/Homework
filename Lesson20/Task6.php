<?php
/**
 * Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь. 
 */
?>
<form method="POST">
    <label>Какие языки Вы знаете?</label><br>
    <select name="lang[]" multiple>
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="PHP">PHP</option>
        <option value="Javascript">Javascript</option>
    </select>
    <input type="submit" value="Ввод">
</form>
<?php
if (!empty($_POST['lang'])) {
    echo "Вы знаете следующие языки:<br>";
    foreach ($_POST['lang'] as $lang) {
        echo $lang . "<br>";
    }
}