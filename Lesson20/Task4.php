<?php
/**
 * Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
 */
?>
<form method="POST">
    <label>Сколько Вам лет?</label><br>
    <label>Менее 20</label>
    <input type="radio" name="age" value="1" checked>
    <label>20-25</label>
    <input type="radio" name="age" value="2">
    <label>26-30</label>
    <input type="radio" name="age" value="3">
    <label>более 30</label>
    <input type="radio" name="age" value="4"><br>
    <input type="submit" value="Ввод">
</form>
<?php
if (isset($_POST['age'])) {
    switch ($_POST['age']) {
        case 1:
            echo "Вам менее 20 лет! Столько ещё Вас ждёт!";
            break;
        case 2:
            echo "Вам от 20 до 25 лет! Хороший возраст!";
            break;
        case 3: 
            echo "Вам от 26 до 30 лет! Золотая середина!";
            break;
        case 4: 
            echo "Вам больше 30 лет! Крепкого Вам здоровья!";
            break;
    }
}