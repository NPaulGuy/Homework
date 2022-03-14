<?php
/**
 * Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
 */
?>
<form method="POST">
    <label>Сколько Вам лет?</label><br>
    <select name="age">
        <option value="1" selected>менее 20</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">более 30</option>
    </select>
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