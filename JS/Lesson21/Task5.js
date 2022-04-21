/**
 * Напишите функцию getLastDayOfMonth(year, month), возвращающую последнее число месяца. Иногда это 30, 31 или даже февральские 28/29.
 * Параметры:
 * year – год из четырёх цифр, например, 2012.
 * month – месяц от 0 до 11.
 * К примеру, getLastDayOfMonth(2012, 1) = 29 (високосный год, февраль).
 */
function getLastDayOfMonth(year, month) {
	let firstMonthDay = new Date(year, month);
	let firstNextMonthDay = new Date(year, month + 1);
	let diff = firstNextMonthDay - firstMonthDay;
	return +diff / (1000 * 3600 * 24);
}
alert(getLastDayOfMonth(2012, 1));