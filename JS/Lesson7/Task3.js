/**
 * Напишите цикл, который предлагает prompt ввести число, большее 100. Если посетитель ввёл другое число – попросить ввести ещё раз, и так далее.
 * Цикл должен спрашивать число пока либо посетитель не введёт число, большее 100, либо не нажмёт кнопку Отмена (ESC).
 * Предполагается, что посетитель вводит только числа. Предусматривать обработку нечисловых строк в этой задаче необязательно.
 */
let num = 1;
// Если введено что угодно, кроме Отмены, то цикл продолжается
while (num !== null) {
	num = prompt("Введите число, большее 100");
	// Условие сработает, если число введено правильно и больше 100.
	if (Number(num) > 100) {
		break;
	}
}