<?php
/**
 * Дана дата в формате '2025-12-31'. С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'.
 */
$date = '2025-12-31';
echo date("d-m-Y", strtotime($date));