/**
 * Напишите функцию getWeekDay(date), показывающую день недели в коротком формате: «ПН», «ВТ», «СР», «ЧТ», «ПТ», «СБ», «ВС».
 */
function getWeekDay(date) {
	let arrDays = [
		"ВС", "ПН", "ВТ", "СР",
		"ЧТ", "ПТ", "СБ",
	];
	let day = date.getDay();
	return arrDays[day];
}
let date = new Date(2012, 0, 3);
alert(getWeekDay(date));