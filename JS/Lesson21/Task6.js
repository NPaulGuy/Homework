/**
 * Напишите функцию getSecondsToday(), возвращающую количество секунд с начала сегодняшнего дня.
 * Например, если сейчас 10:00, и не было перехода на зимнее/летнее время, то:
 * Функция должна работать в любой день, т.е. в ней не должно быть конкретного значения сегодняшней даты.
 */
function getSecondsToday() {
	let current = new Date();
	let dayBegin = new Date(
		current.getFullYear(),
		current.getMonth(),
		current.getDate(),
		0, 0, 0, 0
	);
	return Math.floor((+current - +dayBegin) / (1000));
}
alert(getSecondsToday());