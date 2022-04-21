/**
 * Создайте функцию getSecondsToTomorrow(), возвращающую количество секунд до завтрашней даты.
 * P.S. Функция должна работать в любой день, т.е. в ней не должно быть конкретного значения сегодняшней даты.
 */
function getSecondsToTomorrow() {
	let current = new Date();
	let tomorrow = new Date(
		current.getFullYear(),
		current.getMonth(),
		current.getDate() + 1,
		0, 0, 0, 0
	);
	return Math.floor((tomorrow - current) / 1000);
}
alert(getSecondsToTomorrow());