<?php
/**
 * Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!
 */
if (
    isset($_POST['birthdate']) || 
    isset($_COOKIE['birthdate'])
) {
    if (!isset($_COOKIE['birthdate'])) {
        setcookie('birthdate', $_POST['birthdate']);
    } else {
        if ($_COOKIE['birthdate'] == date("Y-m-d")) {
            echo "С Днём Рождения!!!";
        } else {
            $arr = explode('-', $_COOKIE['birthdate']);
            $diff = mktime(0, 0, 0, $arr[1], $arr[2]) - time();
            if($diff < 0) {
                $diff = (365 * 24 * 60 * 60) + $diff;
            }
            $diffDays = ceil($diff / (60 * 60 * 24));
            echo "До вашего Дня Рождения осталось $diffDays дней!";
        }
    }
    #setcookie('birthdate', '', time() - 1);
} else {
?>
<form method="POST">
    <label>Birthdate:</label><br>
    <input type="date" name="birthdate"><br>
    <input type="submit" value="Ввод">
</form>
<?php
}