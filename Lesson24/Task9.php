<?php
/**
 * Модифицируйте предыдущую задачу так, чтобы каждая ссылка стояла в своем li в теге ul.
 */
echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li><a href=\"?num=$i\">Link №$i</a></li>";
}
echo "</ul>";
if (isset($_GET['num'])) {
    if ($_GET['num'] >= 1 && $_GET['num'] <= 10) {
        echo "--->{$_GET['num']}<---";
    }
}