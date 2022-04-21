/**
 * Напишите функцию formatDate(date), форматирующую date по следующему принципу:
 * Если спустя date прошло менее 1 секунды, вывести "прямо сейчас".
 * В противном случае, если с date прошло меньше 1 минуты, вывести "n сек. назад".
 * В противном случае, если меньше часа, вывести "m мин. назад".
 * В противном случае, полная дата в формате "DD.MM.YY HH:mm". А именно: "день.месяц.год часы:минуты", всё в виде двух цифр, т.е. 31.12.16 10:00.
 */
function formatDate(date) {
	let diff = (new Date() - date);
	if (diff < 1000) {
		return "прямо сейчас";
	} else if (diff >= 1000 && diff < 60 * 1000){
		return `${Math.floor(diff / 1000)} секунд назад`;
	} else if (diff >= 60 * 1000 && diff < 3600 * 1000) {
		return `${Math.floor(diff / (60 * 1000))} минут назад`;
	} else {
		let dateStr = date.getDate() + "." + (date.getMonth() + 1) 
			+ "." + date.getFullYear() + " " + date.getHours() 
			+ ":" + date.getMinutes();
		return dateStr;
	}
} 
alert(formatDate(new Date(new Date - 1)));
alert(formatDate(new Date(new Date - 45 * 1000)));
alert(formatDate(new Date(new Date - 3 * 60 * 1000)));
alert(formatDate(new Date(new Date - 8 * 3600 * 1000)));