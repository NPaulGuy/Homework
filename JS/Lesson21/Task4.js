/**
 * Создайте функцию getDateAgo(date, days), возвращающую число, которое было days дней назад от даты date.
 * К примеру, если сегодня двадцатое число, то getDateAgo(new Date(), 1) вернёт девятнадцатое и getDateAgo(new Date(), 2) – восемнадцатое.
 * Функция должна надёжно работать при значении days=365 и больших значениях.
 * P.S. Функция не должна изменять переданный ей объект date.
 */
function getDateAgo(date, days) {
	let dateAgo = +date - (days * 24 * 3600 * 1000);
	dateAgo = new Date(dateAgo);
	return dateAgo.getDate();
}
let date = new Date(2015, 0, 2);
alert(getDateAgo(date, 1));
alert(getDateAgo(date, 2));
alert(getDateAgo(date, 365));