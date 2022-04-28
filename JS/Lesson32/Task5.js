/**
 * Напишите функцию createCalendar(elem, year, month).
 * Вызов функции должен создать календарь для заданного месяца month в году year и вставить его в elem.
 * Календарь должен быть таблицей, где неделя – это <tr>, а день – это <td>. У таблицы должен быть заголовок с названиями дней недели, каждый день – <th>, первым днём недели должен быть понедельник.
 * P.S. В этой задаче достаточно сгенерировать календарь, кликабельным его делать не нужно.
 */
function createCalendar(elem, year, month) {
	// Месяцы в JS считаются с нуля, поэтому убираем единицу, чтобы счёт месяцев совпадал
	month -= 1;
	// Создание шапки с днями недели
	let calendarTable = document.createElement('table');
	createWeekNames(calendarTable);
	// Получение текущего(со старта первый) и последнего дней месяца
	let lastDay = new Date(year, month + 1, 0);
	let currentDay = new Date(year, month);
	while (+currentDay <=  +lastDay) {
		let tr = document.createElement('tr');
		for (let i = 1; i <= 7; i++) {
			let td = document.createElement('td');
			let weekDay = i;
			if (weekDay == 7) {
				weekDay = 0;
			}
			if (
				currentDay.getDay() != weekDay 
				|| +currentDay > +lastDay
			) {
				tr.append(td);
				continue;
			}
			td.textContent = currentDay.getDate();
			currentDay.setDate(currentDay.getDate() + 1);
			tr.append(td);
		}
		calendarTable.append(tr);
	}
	elem.append(calendarTable);
}
function createWeekNames(weekNode) {
	let dayNames = [
		"пн", "вт", "ср", "чт", 
		"пт", "сб", "вс"
	];
	let tr = document.createElement('tr');
	for (let i = 0; i < 7; i++) {
		let th = document.createElement('th');
		th.textContent = dayNames[i];
		tr.append(th);
	}
	weekNode.append(tr);
}
createCalendar(calendar, 2022, 2);