<?php
/**
 * 	Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит. 
 */
/**
 * @param string $str
 * 
 * @return string
 */
function rustoEng(string $str) : string {
    $russian = array(
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 
        'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 
        'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 
        'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 
        'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 
        'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 
        'ъ', 'ы', 'ь', 'э', 'ю', 'я'
    );
    $translit = array(
        'A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I',
        'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T',
        'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 
        'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 
        'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 
        'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 
        'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya'
    );
    $arr = str_split($str, 2); 
    $result = [];
    foreach ($arr as $elem) {
        // Если нерусский символ, то оставляем как есть
        if (in_array($elem, $russian)) {
            $result[] = $translit[array_search($elem, $russian)];
        } else {
            $result[] = $elem;
        }
    }
    $newStr = implode('', $result);
    return $newStr;
}
$str = rustoEng("ПроверкаСвязи");
echo $str;