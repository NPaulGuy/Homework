/**
 * В Европейских странах неделя начинается с понедельника (день номер 1), затем идёт вторник (номер 2) и так до воскресенья (номер 7). Напишите функцию getLocalDay(date), которая возвращает «европейский» день недели для даты date.
 */
function getLocalDay(date) {
	return (date.getDay() == 0 ? 7 : date.getDay());
}
let date = new Date(2012, 0, 2);
alert(getLocalDay(date));